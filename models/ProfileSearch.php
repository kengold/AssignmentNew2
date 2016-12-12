<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Profile;

/**
 * ProfileSearch represents the model behind the search form about `app\models\Profile`.
 */
class ProfileSearch extends Profile
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['id'], 'integer'],
            [['image', 'fullname', 'gender', 'dob', 'yearsOfExperience', 'industry', 'location', 'aboutMe', 'professionalTitle', 'address', 'phoneNumber', 'webSite', 'email'], 'safe'],
            [['careerLevel', 'communicationLevel', 'organizationLevel', 'jobLevel'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Profile::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            //'id' => $this->id,
            'dob' => $this->dob,
            'careerLevel' => $this->careerLevel,
            'communicationLevel' => $this->communicationLevel,
            'organizationLevel' => $this->organizationLevel,
            'jobLevel' => $this->jobLevel,
        ]);

        $query->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'fullname', $this->fullname])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'yearsOfExperience', $this->yearsOfExperience])
            ->andFilterWhere(['like', 'industry', $this->industry])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'aboutMe', $this->aboutMe])
            ->andFilterWhere(['like', 'professionalTitle', $this->professionalTitle])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phoneNumber', $this->phoneNumber])
            ->andFilterWhere(['like', 'webSite', $this->webSite])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
