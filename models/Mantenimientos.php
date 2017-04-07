<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mantenimientos".
 *
 * @property string $idMantenimiento
 * @property string $nroTarjeta
 * @property string $idUnidad
 * @property string $fechaCumplimiento
 * @property string $fechaCumplido
 * @property string $descripcion
 * @property string $idcanon
 * @property string $porcentaje
 * @property integer $cumplido
 *
 * @property Tarjeta $nroTarjeta0
 * @property Unidades $idUnidad0
 */
class Mantenimientos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mantenimientos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nroTarjeta', 'idUnidad'], 'required'],
            [['nroTarjeta', 'idUnidad', 'idcanon', 'porcentaje', 'cumplido'], 'integer'],
            [['fechaCumplimiento', 'fechaCumplido'], 'safe'],
            [['descripcion'], 'string', 'max' => 250],
            [['nroTarjeta'], 'exist', 'skipOnError' => true, 'targetClass' => Tarjeta::className(), 'targetAttribute' => ['nroTarjeta' => 'nroTarjeta']],
            [['idUnidad'], 'exist', 'skipOnError' => true, 'targetClass' => Unidades::className(), 'targetAttribute' => ['idUnidad' => 'unidadID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idMantenimiento' => 'Id Mantenimiento',
            'nroTarjeta' => 'Nro Tarjeta',
            'idUnidad' => 'Id Unidad',
            'fechaCumplimiento' => 'Fecha Cumplimiento',
            'fechaCumplido' => 'Fecha Cumplido',
            'descripcion' => 'Descripcion',
            'idcanon' => 'Idcanon',
            'porcentaje' => 'Porcentaje',
            'cumplido' => 'Cumplido',
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
    public function getIdUnidad0()
    {
        return $this->hasOne(Unidades::className(), ['unidadID' => 'idUnidad']);
    }
}
