<?php

/**
 * This is the model class for table "faqs".
 *
 * The followings are the available columns in table 'faqs':
 * @property string $id
 * @property string $lang_id
 * @property string $question
 * @property string $answer
 * @property string $type
 * @property string $css_class
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 * @property string $activity_log
 */
class Faq extends DTActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'faqs';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('type,question,answer,lang_id, create_time, create_user_id, update_time, update_user_id', 'required'),
            array('lang_id, create_user_id, update_user_id', 'length', 'max' => 11),
            array('question', 'length', 'max' => 250),
            array('css_class,type,answer, activity_log', 'safe'),
            array('question', 'validateUniquness'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, lang_id, question, answer, create_time, create_user_id, update_time, update_user_id, activity_log', 'safe', 'on' => 'search'),
        );
    }

    /**
     * uniqueness
     */
    public function validateUniquness() {
        if (!empty($this->lang_id)) {
            $criteria = new CDbCriteria();
            if (!$this->isNewRecord) {
                $criteria->addCondition("id<>" . $this->id);
            }
            $criteria->addCondition("t.question ='" . $this->question . "' AND lang_id =" . $this->lang_id);
            $criteria->addCondition(" type ='" . $this->type . "'");
            if ($this->count($criteria) > 0) {
                $this->addError("key", "This " . ucfirst($this->type) . " already exist in this language");
            }
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
            'type' => 'Type',
            'question' => 'Heading or Question',
            'answer' => 'Detail or Answer',
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
        $criteria->compare('type', $this->type, true);
        $criteria->compare('css_class', $this->css_class, true);
        $criteria->compare('question', $this->question, true);
        $criteria->compare('answer', $this->answer, true);
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
     * @return Faq the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
