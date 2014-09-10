<?php

/**
 * This is the model class for table "conf_tour_types_langs".
 *
 * The followings are the available columns in table 'conf_tour_types_langs':
 * @property string $id
 * @property string $name
 * @property integer $lang_id
 * @property integer $parent_id
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 * @property string $activity_log
 */
class ConfTourTypeLang extends DTActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'conf_tour_types_langs';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, lang_id, parent_id, create_time, create_user_id, update_time, update_user_id', 'required'),
            array('lang_id, parent_id', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 150),
            array('create_user_id, update_user_id', 'length', 'max' => 11),
            array('activity_log', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name, lang_id, parent_id, create_time, create_user_id, update_time, update_user_id, activity_log', 'safe', 'on' => 'search'),
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
            'conf_tour' => array(self::BELONGS_TO, 'ConfTourTypeLang', 'parent_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Id',
            'name' => 'Name',
            'lang_id' => 'Lang',
            'parent_id' => 'Parent',
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

        $criteria->compare('lang_id', $this->lang_id);

        $criteria->compare('parent_id', $this->parent_id);

        $criteria->compare('create_time', $this->create_time, true);

        $criteria->compare('create_user_id', $this->create_user_id, true);

        $criteria->compare('update_time', $this->update_time, true);

        $criteria->compare('update_user_id', $this->update_user_id, true);

        $criteria->compare('activity_log', $this->activity_log, true);

        return new CActiveDataProvider('conf_tour_types_langs', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return conf_tour_types_langs the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
