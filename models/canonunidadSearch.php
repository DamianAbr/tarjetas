<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\canonunidad;

/**
 * canonunidadSearch represents the model behind the search form about `app\models\canonunidad`.
 */
class canonunidadSearch extends canonunidad
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcanon', 'unidadID'], 'integer'],
            [['activo'], 'safe'],
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
        $query = canonunidad::find();

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
            'idcanon' => $this->idcanon,
            'unidadID' => $this->unidadID,
        ]);

        $query->andFilterWhere(['like', 'activo', $this->activo]);

        return $dataProvider;
    }
}
