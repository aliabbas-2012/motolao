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

    public $no_image;

    /**
     * upload instance and index for multiple uploader
     * index is no and instance is object
     * @var type 
     */
    public $upload_insance;

    /**
     *
     * @var type 
     * for purpose of deleting old image
     */
    public $oldLargeImg = "";
    public $image_url = array();

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
            array('description', 'safe'),
            array('activity_log', 'safe'),
            array('image_large', 'file', 'allowEmpty' => $this->isNewRecord ? false : true,
                'types' => 'jpg,jpeg,gif,png,JPG,JPEG,GIF,PNG'),
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
            'tour' => array(self::BELONGS_TO, 'Tour', 'id','condition'=>'object_type ="tour"'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'object_type' => 'Object Type',
            'lang_id' => 'Language',
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

    public function afterFind() {
        $this->oldLargeImg = $this->image_large;
        /**
         *  setting path  for front end images
         */
        if (!empty($this->image_large)) {


            $this->image_url['image_large'] = Yii::app()->baseUrl . "/uploads/home-page/" . $this->getCompositeKey();
            $this->image_url['image_large'].= "/" . $this->image_large;
        } else {
            $this->image_url['image_large'] = Yii::app()->baseUrl . "/images/tour_images/noimages.jpeg";
        }

        parent::afterFind();
    }

    /**
     * set for validation to occure
     * need image instance for validation rules
     * @return type
     */
    public function beforeValidate() {
        $this->upload_insance = DTUploadedFile::getInstance($this, 'image_large');
        if (!empty($this->upload_insance)) {
            $this->image_large = $this->upload_insance;
        }
        return parent::beforeValidate();
    }

    /**
     * for setting object to save
     * image name rather its emtpy
     * @return type 
     */
    public function beforeSave() {


        $this->setUploadVars();
        return parent::beforeSave();
    }

    public function afterSave() {
        parent::afterSave();
        $this->uploadImages();

        return true;
    }

    /**
     * set image variable before save
     */
    public function setUploadVars() {



        $its_t = new DTFunctions();
        if (!empty($this->upload_insance)) {
            $this->image_large = $its_t->getRanddomeNo(10) . "." . $this->upload_insance->extensionName;
        } 
    }

    /**
     * upload images
     */
    public function uploadImages() {

        if (!empty($this->upload_insance)) {


            $folder_array = array("home-page", $this->getCompositeKey(),);

            $upload_path = DTUploadedFile::creeatRecurSiveDirectories($folder_array);
            $this->upload_insance->saveAs($upload_path . str_replace(" ", "_", $this->image_large));


            DTUploadedFile::createThumbs($upload_path . $this->image_large, $upload_path, 180, str_replace(" ", "_", "detail_" . $this->image_large));
            $this->deleteldImage();
        }
    }

    /**
     * to delete old image in case of not empty
     * not equal new image
     */
    public function deleteldImage() {

        if (!empty($this->oldLargeImg) && $this->oldLargeImg != $this->image_large) {
            $path = Yii::app()->basePath . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR;
            $path.= "uploads" . DIRECTORY_SEPARATOR . "home-page" . DIRECTORY_SEPARATOR . $this->getCompositeKey() . DIRECTORY_SEPARATOR;
            $large_path = $path . DIRECTORY_SEPARATOR . $this->oldLargeImg;

            DTUploadedFile::deleteExistingFile($large_path);
        }


    }

    public function beforeDelete() {
        $this->deleteldImage();
        parent::beforeDelete();
    }
    /**
     * 
     */
    public function getCompositeKey(){
        return implode("-",array($this->id,$this->lang_id,$this->object_type));;
        
    }

}
