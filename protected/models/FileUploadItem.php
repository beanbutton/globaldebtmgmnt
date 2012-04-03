<?php

/**
 * This is the model class for table "tbl_file_upload_item".
 *
 * The followings are the available columns in table 'tbl_file_upload_item':
 * @property integer $id
 * @property integer $Fk_user_id
 * @property string $description
 * @property string $filename
 * @property integer $create_user_id
 * @property integer $update_user_id
 * @property string $create_time
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property TblUser $fkUser
 */
class FileUploadItem extends CActiveRecord {
    /**
     * Returns the static model of the specified AR class.
     * @return FileUploadItem the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_file_upload_item';
    }

    public function beforeSave() {
        if ($this -> isNewRecord) {
            $this -> created_at = new CDbExpression('NOW()');
        } else {
            $this -> updated_at = new CDbExpression('NOW()');
        }
        return parent::beforeSave();
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array( 
        //array('Fk_user_id', 'required'), 
        //array('Fk_user_id, create_user_id, update_user_id', 'numerical', 'integerOnly' => true), 
        array('filename', 'length', 'max' => 128), 
        array('description, created_at, updated_at', 'safe'),
        // The following rule is used by search().
        // Please remove those attributes that should not be searched.
        array('id, Fk_user_id, description, filename, create_user_id, update_user_id, created_at, updated_at', 'safe', 'on' => 'search'), );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array('fkUser' => array(self::BELONGS_TO, 'TblUser', 'Fk_user_id'), );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array('id' => 'ID', 
        'Fk_user_id' => 'Fk User', 
        'description' => 'Description', 
        'filename' => 'Filename', 
        'create_user_id' => 'Create User', 
        'update_user_id' => 'Update User', 
        'created_at' => 'Create Time', 
        'updated_at' => 'Update Time', );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria -> compare('id', $this -> id);
        $criteria -> compare('Fk_user_id', $this -> Fk_user_id);
        $criteria -> compare('description', $this -> description, true);
        $criteria -> compare('filename', $this -> filename, true);
        $criteria -> compare('create_user_id', $this -> create_user_id);
        $criteria -> compare('update_user_id', $this -> update_user_id);
        $criteria -> compare('created_at', $this -> created_at, true);
        $criteria -> compare('updatef_at', $this -> updated_at, true);

        return new CActiveDataProvider($this, array('criteria' => $criteria, ));
    }

}
