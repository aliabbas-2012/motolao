<?php

/**
 * This is the model class for table "labels".
 *
 * The followings are the available columns in table 'labels':
 * @property string $id
 * @property string $lang_id
 * @property string $category
 * @property string $key
 * @property string $value
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 * @property string $activity_log
 */
class Label extends DTActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'labels';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('category,lang_id, create_time, create_user_id, update_time, update_user_id', 'required'),
            array('lang_id, create_user_id, update_user_id', 'length', 'max' => 11),
            array('activity_log,value,key', 'safe'),
            array('key', 'validateUniquness'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, lang_id, key, value, create_time, create_user_id, update_time, update_user_id, activity_log', 'safe', 'on' => 'search'),
        );
    }

    /**
     * uniqueness
     */
    public function validateUniquness() {
        $criteria = new CDbCriteria();
        if (!$this->isNewRecord) {
            $criteria->addCondition("id<>" . $this->id);
        }
        $criteria->addCondition("category = '" . $this->category . "' AND t.key ='" . $this->key . "' AND lang_id =" . $this->lang_id);

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
            'value' => 'Value',
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
          
        $lang_id = $this->getLanguageId($this->lang_id);
        if(!empty($lang_id)){
            $criteria->compare('lang_id', $lang_id);
        }
        else {
             $criteria->compare('lang_id', $this->lang_id, true);
        }
       
        $criteria->compare('category', $this->category, true);
        $criteria->compare('t.key', $this->key, true);
        $criteria->compare('value', $this->value, true);
        $criteria->compare('create_time', $this->create_time, true);
        $criteria->compare('create_user_id', $this->create_user_id, true);
        $criteria->compare('update_time', $this->update_time, true);
        $criteria->compare('update_user_id', $this->update_user_id, true);
        $criteria->compare('activity_log', $this->activity_log, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 50,
            ),
            'sort' => array(
                'defaultOrder' => 'id DESC , lang_id DESC',
            )
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
     * @return Label the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * 
     * @return type
     */
    public function beforeSave() {
        $this->setSlug();
        return parent::beforeSave();
    }

    /**
     * setting slug
     * for url
     * before save 
     */
    public function setSlug() {

//        $this->key = strtolower(trim($this->key));
//        $this->key = str_replace(" ", "-", $this->key);
//        $this->key = MyHelper::convert_no_sign($this->key);
    }

    public function insertLabels($category, $message) {

        Yii::import("application.models.Language");
        $all_languages = Language::model()->findAll();
        foreach ($all_languages as $lng) {
            $criteria = new CDbCriteria();
            $criteria->addCondition("lang_id=:lang_id AND category = :category");

            $criteria->params = array("lang_id" => $lng->id,
                "category" => $category);

            //Label::model()->deleteAll($criteria);

            $model = new Label;
            $model->lang_id = $lng->id;
            $model->category = $category;
            $model->key = $message;
            $model->value = $message;
            $model->save();
        }
        Yii::log("==" . $category . "---" . $message . "==", 'info');
    }

}
