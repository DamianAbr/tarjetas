<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\unidades;

/**
 * unidadesSearch represents the model behind the search form about `app\models\unidades`.
 */
class unidadesSearch extends unidades
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['unidadID', 'autorizacion'], 'integer'],
            [['nombre', 'descripcion', 'contrasenia'], 'safe'],
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
        $query = unidades::find();

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
            'unidadID' => $this->unidadID,
            'autorizacion' => $this->autorizacion,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'contrasenia', $this->contrasenia]);

        return $dataProvider;
    }
}
