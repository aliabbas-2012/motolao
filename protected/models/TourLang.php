<?php

/**
 * This is the model class for table "tour_langs".
 *
 * The followings are the available columns in table 'tour_langs':
 * @property string $id
 * @property string $name
 * @property string $short_title
 * @property string $tour_type
 * @property integer $lang_id
 * @property integer $parent_id
 * @property string $url
 * @property string $meta_title
 * @property string $meta_description
 * @property string $description
 * @property string $short_description
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 * @property string $activity_log
 */
class TourLang extends DTActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tour_langs';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, lang_id,short_title, tour_type, create_time, create_user_id, update_time, update_user_id', 'required'),
            array('lang_id, parent_id', 'numerical', 'integerOnly' => true),
            array('name, short_title, tour_type, url, meta_title', 'length', 'max' => 150),
            array('create_user_id, update_user_id', 'length', 'max' => 11),
            array('meta_description, description,short_description, activity_log', 'safe'),
            array('name', 'unique'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, name, short_title, tour_type, lang_id, parent_id, url, meta_title, meta_description, description, create_time, create_user_id, update_time, update_user_id, activity_log', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'tour' => array(self::BELONGS_TO, 'Tour', 'parent_id'),
            'lang' => array(self::BELONGS_TO, 'Language', 'lang_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Name',
            'short_title' => 'Short Title',
            'tour_type' => 'Tour Type',
            'lang_id' => 'Language',
            'parent_id' => 'Parent',
            'url' => 'Url',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'description' => 'Description',
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
        $criteria->compare('name', $this->name, true);
        $criteria->compare('short_title', $this->short_title, true);
        $criteria->compare('tour_type', $this->tour_type, true);
        $criteria->compare('lang_id', $this->lang_id);
        $criteria->compare('parent_id', $this->parent_id);
        $criteria->compare('url', $this->url, true);
        $criteria->compare('meta_title', $this->meta_title, true);
        $criteria->compare('meta_description', $this->meta_description, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('short_description', $this->short_description, true);
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
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return TourLang the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
