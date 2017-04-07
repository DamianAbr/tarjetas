<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "canon".
 *
 * @property string $idcanon
 * @property string $nroSerie
 * @property string $descripcion
 * @property string $calibre
 *
 * @property Canonunidad[] $canonunidads
 * @property Unidades[] $unidads
 * @property Tarjetacanon[] $tarjetacanons
 * @property Tarjeta[] $nroTarjetas
 */
class Canon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'canon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nroSerie', 'descripcion', 'calibre'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcanon' => 'Idcanon',
            'nroSerie' => 'Nro Serie',
            'descripcion' => 'Descripcion',
            'calibre' => 'Calibre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCanonunidads()
    {
        return $this->hasMany(Canonunidad::className(), ['idcanon' => 'idcanon']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnidads()
    {
        return $this->hasMany(Unidades::className(), ['unidadID' => 'unidadID'])->viaTable('canonunidad', ['idcanon' => 'idcanon']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTarjetacanons()
    {
        return $this->hasMany(Tarjetacanon::className(), ['idcanon' => 'idcanon']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNroTarjetas()
    {
        return $this->hasMany(Tarjeta::className(), ['nroTarjeta' => 'nroTarjeta'])->viaTable('tarjetacanon', ['idcanon' => 'idcanon']);
    }
}
