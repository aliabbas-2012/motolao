<?php

/**
 * This is the model class for table "languages".
 *
 * The followings are the available columns in table 'languages':
 * @property string $id
 * @property string $name
 * @property string $code
 * @property string $flag_img
 * @property string $meta_title
 * @property string $meta_description
 * @property string $description
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 * @property string $activity_log
 */
class Language extends DTActiveRecord {

    /**
     * for showing image link and image
     * @var type 
     */
    public $show_image, $old_image;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'languages';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('code,name, create_time, create_user_id, update_time, update_user_id', 'required'),
            array("name,code", "unique"),
            array('name, meta_title', 'length', 'max' => 150),
            array('create_user_id, update_user_id', 'length', 'max' => 11),
            array('flag_img,show_image,old_image,meta_description, description, activity_log', 'safe'),
            array('flag_img', 'file', 'allowEmpty' => true,
                'types' => 'jpg,jpeg,gif,png,JPG,JPEG,GIF,PNG'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name, meta_title, meta_description, description, create_time, create_user_id, update_time, update_user_id, activity_log', 'safe', 'on' => 'search'),
        );
    }
   

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'categoryLangs' => array(self::HAS_MANY, 'CategoryLang', 'lang_id'),
            'tour_langs' => array(self::HAS_MANY, 'TourLang', 'lang_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Id',
            'name' => 'Name',
            'code' => 'Short Code',
            'flag_img' => 'Flag',
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
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('code', $this->code, true);
        $criteria->compare('flag_img', $this->flag_img, true);
        $criteria->compare('meta_title', $this->meta_title, true);
        $criteria->compare('meta_description', $this->meta_description, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('create_time', $this->create_time, true);
        $criteria->compare('create_user_id', $this->create_user_id, true);
        $criteria->compare('update_time', $this->update_time, true);
        $criteria->compare('update_user_id', $this->update_user_id, true);
        $criteria->compare('activity_log', $this->activity_log, true);

        return new CActiveDataProvider('Language', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return languages the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * 
     */
    public function afterFind() {
        if (!empty($this->flag_img)) {
            $this->show_image['link'] = Yii::app()->baseUrl . "/uploads/language/" . $this->id . "/" . str_replace(" ", "_", $this->flag_img);
            $this->show_image['image'] = CHtml::image($this->show_image['link']);
            $this->old_image = $this->flag_img;
        }

        return parent::afterFind();
    }

    /**
     * delete image
     * @return type
     */
    public function beforeDelete() {
        $path = Yii::app()->basePath . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR;
        $path.= "uploads" . DIRECTORY_SEPARATOR . "language" . DIRECTORY_SEPARATOR . $this->primaryKey . DIRECTORY_SEPARATOR;

        DTUploadedFile::deleteExistingFile($path . str_replace(" ", "_", $this->flag_img));

        return parent::beforeDelete();
    }

}
