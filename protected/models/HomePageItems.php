<?php

/**
 * This is the model class for table "home_page_items".
 *
 * The followings are the available columns in table 'home_page_items':
 * @property string $id
 * @property string $object_type
 * @property string $lang_id
 * @property string $name
 * @property string $short_description
 * @property string $description
 * @property string $alt
 * @property string $title
 * @property string $image_large
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 * @property string $activity_log
 */
class HomePageItems extends DTActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'home_page_items';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id, object_type, lang_id, name, short_description, description, create_time, create_user_id, update_time, update_user_id', 'required'),
            array('id, lang_id, create_user_id, update_user_id', 'length', 'max' => 11),
            array('object_type', 'length', 'max' => 5),
            array('name, short_description, alt, title, image_large', 'length', 'max' => 150),
            array('description', 'length', 'max' => 250),
            array('activity_log', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, object_type, lang_id, name, short_description, description, alt, title, image_large, create_time, create_user_id, update_time, update_user_id, activity_log', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'object_type' => 'Object Type',
            'lang_id' => 'Lang',
            'name' => 'Name',
            'short_description' => 'Short Description',
            'description' => 'Description',
            'alt' => 'Alt',
            'title' => 'Title',
            'image_large' => 'Image Large',
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
        $criteria->compare('object_type', $this->object_type, true);
        $criteria->compare('lang_id', $this->lang_id, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('short_description', $this->short_description, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('alt', $this->alt, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('image_large', $this->image_large, true);
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
     * @return HomePageItems the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
