<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property string $image
 * @property string $fullname
 * @property string $gender
 * @property string $dob
 * @property string $yearsOfExperience
 * @property string $industry
 * @property string $location
 * @property string $aboutMe
 * @property string $professionalTitle
 * @property double $careerLevel
 * @property double $communicationLevel
 * @property double $organizationLevel
 * @property double $jobLevel
 * @property string $address
 * @property string $phoneNumber
 * @property string $webSite
 * @property string $email
 */
class Profile extends \yii\db\ActiveRecord
{
     public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fullname', 'dob', 'professionalTitle', 'phoneNumber', 'email'], 'required'],
            [['dob'], 'safe'],
            [['careerLevel', 'communicationLevel', 'organizationLevel', 'jobLevel'], 'number'],
            [['image', 'industry', 'location', 'aboutMe', 'professionalTitle', 'address', 'phoneNumber', 'webSite', 'email'], 'string', 'max' => 150],
            [['fullname'], 'string', 'max' => 50],
            [['gender'], 'string', 'max' => 7],
            [['yearsOfExperience'], 'string', 'max' => 15],
            [['file'], 'safe'],
            [['file'], 'file', 'extensions'=>'jpg, gif, png'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file' => 'Profile Picture',
            'fullname' => 'Fullname',
            'gender' => 'Gender',
            'dob' => 'Dob',
            'yearsOfExperience' => 'Years Of Experience',
            'industry' => 'Industry',
            'location' => 'Location',
            'aboutMe' => 'About Me',
            'professionalTitle' => 'Professional Title',
            'careerLevel' => 'Career Level',
            'communicationLevel' => 'Communication Level',
            'organizationLevel' => 'Organization Level',
            'jobLevel' => 'Job Level',
            'address' => 'Address',
            'phoneNumber' => 'Phone Number',
            'webSite' => 'Web Site',
            'email' => 'Email',
        ];
    }

    /**
     * @inheritdoc
     * @return ProfileQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProfileQuery(get_called_class());
    }
}
