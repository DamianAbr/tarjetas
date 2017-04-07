<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unidades".
 *
 * @property string $unidadID
 * @property string $nombre
 * @property string $descripcion
 * @property string $contrasenia
 * @property string $autorizacion
 *
 * @property Canonunidad[] $canonunidads
 * @property Canon[] $idcanons
 * @property Mantenimientos[] $mantenimientos
 */
class Unidades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'unidades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['autorizacion'], 'integer'],
            [['nombre'], 'string', 'max' => 10],
            [['descripcion'], 'string', 'max' => 150],
            [['contrasenia'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'unidadID' => 'Unidad ID',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'contrasenia' => 'Contrasenia',
            'autorizacion' => 'Autorizacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCanonunidads()
    {
        return $this->hasMany(Canonunidad::className(), ['unidadID' => 'unidadID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdcanons()
    {
        return $this->hasMany(Canon::className(), ['idcanon' => 'idcanon'])->viaTable('canonunidad', ['unidadID' => 'unidadID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMantenimientos()
    {
        return $this->hasMany(Mantenimientos::className(), ['idUnidad' => 'unidadID']);
    }
}
