<?php

/**
 * This is the model class for table "seo".
 *
 * The followings are the available columns in table 'seo':
 * @property string $id
 * @property string $lang_id
 * @property string $key
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 * @property string $activity_log
 */
class Seo extends DTActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'seo';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('lang_id, key,title,keywords, create_time, create_user_id, update_time, update_user_id', 'required'),
            array('lang_id, create_user_id, update_user_id', 'length', 'max' => 11),
            array('key', 'validateUniquness'),
            array('key', 'length', 'max' => 20),
            array('title, keywords, description', 'length', 'max' => 150),
            array('activity_log', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, lang_id, key, title, keywords, description, create_time, create_user_id, update_time, update_user_id, activity_log', 'safe', 'on' => 'search'),
        );
    }

    /**
     * uniqueness key and language
     */
    public function validateUniquness() {
        $criteria = new CDbCriteria();
        if (!$this->isNewRecord) {
            $criteria->addCondition("id<>" . $this->id);
        }
        $criteria->addCondition("t.key ='" . $this->key . "' AND lang_id =" . $this->lang_id);
        if ($this->count($criteria) > 0) {
            $this->addError("key", "This key already exist in this language");
        }
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'lang' => array(self::BELONGS_TO, 'Language', 'lang_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'lang_id' => 'Language',
            'key' => 'Key',
            'title' => 'Page Title',
            'keywords' => 'Meta Keywords',
            'description' => 'Meta Description',
            'create_time' => 'Create Time',
            'create_user_id' => 'Create User',
            'update_time' => 'Update Time',
            'update_user_id' => 'Update User',
            'activity_log' => 'Activity Log',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
//        $criteria->compare('lang_id', $this->lang_id, true);
        if ($id = $this->getLanguageId($this->lang_id) != '') {
            $criteria->compare('lang_id', $id);
        }
        $criteria->compare('key', $this->key, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('keywords', $this->keywords, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('create_time', $this->create_time, true);
        $criteria->compare('create_user_id', $this->create_user_id, true);
        $criteria->compare('update_time', $this->update_time, true);
        $criteria->compare('update_user_id', $this->update_user_id, true);
        $criteria->compare('activity_log', $this->activity_log, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * 
     * @param type $name
     */
    public function getLanguageId($name) {
        $criteria = new CDbCriteria;
        $criteria->compare('name', $name, true);
        $criteria->select = 'id';
        if ($model = Language::model()->find($criteria)) {
            return $model->id;
        }
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Seo the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
