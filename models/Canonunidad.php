<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "canonunidad".
 *
 * @property string $idcanon
 * @property string $unidadID
 * @property string $activo
 *
 * @property Canon $idcanon0
 * @property Unidades $unidad
 */
class Canonunidad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'canonunidad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['unidadID'], 'required'],
            [['unidadID'], 'integer'],
            [['activo'], 'string', 'max' => 1],
            [['idcanon'], 'exist', 'skipOnError' => true, 'targetClass' => Canon::className(), 'targetAttribute' => ['idcanon' => 'idcanon']],
            [['unidadID'], 'exist', 'skipOnError' => true, 'targetClass' => Unidades::className(), 'targetAttribute' => ['unidadID' => 'unidadID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcanon' => 'Idcanon',
            'unidadID' => 'Unidad ID',
            'activo' => 'Activo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdcanon0()
    {
        return $this->hasOne(Canon::className(), ['idcanon' => 'idcanon']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnidad()
    {
        return $this->hasOne(Unidades::className(), ['unidadID' => 'unidadID']);
    }
}
