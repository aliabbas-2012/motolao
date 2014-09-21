<?php

/**
 * This is the model class for table "banners".
 *
 * The followings are the available columns in table 'banners':
 * @property string $id
 * @property string $lang_id
 * @property string $key
 * @property string $alt
 * @property string $title
 * @property string $image_large
 * @property string $video_tag_embedded_code
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 * @property string $activity_log
 */
class Banner extends DTActiveRecord {

    public $uploaded_img = "";
    public $no_image;

    /**
     * upload instance and index for multiple uploader
     * index is no and instance is object
     * @var type 
     */
    public $upload_insance;

    /**
     * copy path in case of only import
     * @var type 
     */
    public $_copy_path;

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
        return 'banners';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('lang_id, key, create_time, create_user_id, update_time, update_user_id', 'required'),
            array('lang_id, create_user_id, update_user_id', 'length', 'max' => 11),
            array('key', 'length', 'max' => 20),
             array('image_large', 'file', 'allowEmpty' => $this->isNewRecord ? false : true,
                'types' => 'jpg,jpeg,gif,png,JPG,JPEG,GIF,PNG'),
            array('alt, title, image_large', 'length', 'max' => 150),
            array('video_tag_embedded_code, activity_log', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, lang_id, key, alt, title, image_large, video_tag_embedded_code, create_time, create_user_id, update_time, update_user_id, activity_log', 'safe', 'on' => 'search'),
        );
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
            'alt' => 'Alt',
            'title' => 'Title',
            'image_large' => 'Image Large',
            'video_tag_embedded_code' => 'Video Tag Embedded Code',
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
        $criteria->compare('lang_id', $this->lang_id, true);
        $criteria->compare('key', $this->key, true);
        $criteria->compare('alt', $this->alt, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('image_large', $this->image_large, true);
        $criteria->compare('video_tag_embedded_code', $this->video_tag_embedded_code, true);
        $criteria->compare('create_time', $this->create_time, true);
        $criteria->compare('create_user_id', $this->create_user_id, true);
        $criteria->compare('update_time', $this->update_time, true);
        $criteria->compare('update_user_id', $this->update_user_id, true);
        $criteria->compare('activity_log', $this->activity_log, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 20,
            ),
            'sort' => array(
                'defaultOrder' => 'id DESC , lang_id DESC',
            )
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Banner the static model class
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
            $this->image_url['image_large'] = Yii::app()->baseUrl . "/uploads/banner/" . $this->id . "/" . $this->image_large;
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
        } else {

            $this->image_large = $this->oldLargeImg;
        }
    }

    /**
     * upload images
     */
    public function uploadImages() {

        if (!empty($this->upload_insance)) {


            $folder_array = array("banner", $this->getPrimaryKey());

            $upload_path = DTUploadedFile::creeatRecurSiveDirectories($folder_array);
            $this->upload_insance->saveAs($upload_path . str_replace(" ", "_", $this->image_large));

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
            $path.= "uploads" . DIRECTORY_SEPARATOR . "banner" . DIRECTORY_SEPARATOR . $this->id . DIRECTORY_SEPARATOR . $this->oldLargeImg;
            DTUploadedFile::deleteExistingFile($large_path);
        }
    }

    public function beforeDelete() {
        $this->deleteldImage();
        parent::beforeDelete();
    }

}
