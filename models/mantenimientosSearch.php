<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\mantenimientos;

/**
 * mantenimientosSearch represents the model behind the search form about `app\models\mantenimientos`.
 */
class mantenimientosSearch extends mantenimientos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idMantenimiento', 'nroTarjeta', 'idUnidad', 'idcanon', 'porcentaje', 'cumplido'], 'integer'],
            [['fechaCumplimiento', 'fechaCumplido', 'descripcion'], 'safe'],
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
        $query = mantenimientos::find();

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
            'idMantenimiento' => $this->idMantenimiento,
            'nroTarjeta' => $this->nroTarjeta,
            'idUnidad' => $this->idUnidad,
            'fechaCumplimiento' => $this->fechaCumplimiento,
            'fechaCumplido' => $this->fechaCumplido,
            'idcanon' => $this->idcanon,
            'porcentaje' => $this->porcentaje,
            'cumplido' => $this->cumplido,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
