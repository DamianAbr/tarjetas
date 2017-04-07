<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\tarjeta;

/**
 * tarjetaSearch represents the model behind the search form about `app\models\tarjeta`.
 */
class tarjetaSearch extends tarjeta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nroTarjeta', 'horasHombre', 'cantidadHombres', 'tiempoTotal'], 'integer'],
            [['codigo', 'Componente', 'subSistema', 'mantenimineto', 'descripcion', 'peridiocidad', 'mantenimientoRelacionado', 'sistema', 'grado'], 'safe'],
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
        $query = tarjeta::find();

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
            'nroTarjeta' => $this->nroTarjeta,
            'horasHombre' => $this->horasHombre,
            'cantidadHombres' => $this->cantidadHombres,
            'tiempoTotal' => $this->tiempoTotal,
        ]);

        $query->andFilterWhere(['like', 'codigo', $this->codigo])
            ->andFilterWhere(['like', 'Componente', $this->Componente])
            ->andFilterWhere(['like', 'subSistema', $this->subSistema])
            ->andFilterWhere(['like', 'mantenimineto', $this->mantenimineto])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'peridiocidad', $this->peridiocidad])
            ->andFilterWhere(['like', 'mantenimientoRelacionado', $this->mantenimientoRelacionado])
            ->andFilterWhere(['like', 'sistema', $this->sistema])
            ->andFilterWhere(['like', 'grado', $this->grado]);

        return $dataProvider;
    }
}
