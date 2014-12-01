<?php

/**
 * This is the model class for table "contact_us_setting".
 *
 * The followings are the available columns in table 'contact_us_setting':
 * @property string $id
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property string $skype
 * @property string $facebook
 * @property string $google_plus
 * @property string $print_rest
 * @property string $flicker
 * @property string $youtube
 * @property string $lat
 * @property string $lng
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 * @property string $activity_log
 */
class ConfContactUsSetting extends DTActiveRecord {

    public $confViewName = '//confContactUsSetting/index';

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'contact_us_setting';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('create_time, create_user_id, update_time, update_user_id', 'required'),
            array('address, email, phone, skype, facebook, google_plus, print_rest, flicker, youtube, lat, lng', 'length', 'max' => 250),
            array('create_user_id, update_user_id', 'length', 'max' => 11),
            array('activity_log', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, address, email, phone, skype, facebook, google_plus, print_rest, flicker, youtube, lat, lng, create_time, create_user_id, update_time, update_user_id, activity_log', 'safe', 'on' => 'search'),
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
            'address' => 'Address',
            'email' => 'Email',
            'phone' => 'Phone',
            'skype' => 'Skype',
            'facebook' => 'Facebook',
            'google_plus' => 'Google Plus',
            'print_rest' => 'Print Rest',
            'flicker' => 'Flicker',
            'youtube' => 'Youtube',
            'lat' => 'Lat',
            'lng' => 'Lng',
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
        $criteria->compare('address', $this->address, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('skype', $this->skype, true);
        $criteria->compare('facebook', $this->facebook, true);
        $criteria->compare('google_plus', $this->google_plus, true);
        $criteria->compare('print_rest', $this->print_rest, true);
        $criteria->compare('flicker', $this->flicker, true);
        $criteria->compare('youtube', $this->youtube, true);
        $criteria->compare('lat', $this->lat, true);
        $criteria->compare('lng', $this->lng, true);
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
     * @return ContactUsSetting the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
