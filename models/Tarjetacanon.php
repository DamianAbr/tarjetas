<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tarjetacanon".
 *
 * @property string $nroTarjeta
 * @property string $idcanon
 *
 * @property Tarjeta $nroTarjeta0
 * @property Canon $idcanon0
 */
class Tarjetacanon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tarjetacanon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcanon'], 'required'],
            [['idcanon'], 'integer'],
            [['nroTarjeta'], 'exist', 'skipOnError' => true, 'targetClass' => Tarjeta::className(), 'targetAttribute' => ['nroTarjeta' => 'nroTarjeta']],
            [['idcanon'], 'exist', 'skipOnError' => true, 'targetClass' => Canon::className(), 'targetAttribute' => ['idcanon' => 'idcanon']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nroTarjeta' => 'Nro Tarjeta',
            'idcanon' => 'Idcanon',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNroTarjeta0()
    {
        return $this->hasOne(Tarjeta::className(), ['nroTarjeta' => 'nroTarjeta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdcanon0()
    {
        return $this->hasOne(Canon::className(), ['idcanon' => 'idcanon']);
    }
}
