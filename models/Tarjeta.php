<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tarjeta".
 *
 * @property string $nroTarjeta
 * @property string $codigo
 * @property string $Componente
 * @property string $subSistema
 * @property string $mantenimineto
 * @property string $horasHombre
 * @property string $cantidadHombres
 * @property string $tiempoTotal
 * @property string $descripcion
 * @property string $peridiocidad
 * @property string $mantenimientoRelacionado
 * @property string $sistema
 * @property string $grado
 *
 * @property Mantenimientos[] $mantenimientos
 * @property Tarjetacanon[] $tarjetacanons
 * @property Canon[] $idcanons
 */
class Tarjeta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tarjeta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['horasHombre', 'cantidadHombres', 'tiempoTotal'], 'integer'],
            [['codigo', 'Componente', 'subSistema', 'mantenimineto', 'peridiocidad', 'mantenimientoRelacionado', 'sistema', 'grado'], 'string', 'max' => 45],
            [['descripcion'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nroTarjeta' => 'Nro Tarjeta',
            'codigo' => 'Codigo',
            'Componente' => 'Componente',
            'subSistema' => 'Sub Sistema',
            'mantenimineto' => 'Mantenimineto',
            'horasHombre' => 'Horas Hombre',
            'cantidadHombres' => 'Cantidad Hombres',
            'tiempoTotal' => 'Tiempo Total',
            'descripcion' => 'Descripcion',
            'peridiocidad' => 'Peridiocidad',
            'mantenimientoRelacionado' => 'Mantenimiento Relacionado',
            'sistema' => 'Sistema',
            'grado' => 'Grado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMantenimientos()
    {
        return $this->hasMany(Mantenimientos::className(), ['nroTarjeta' => 'nroTarjeta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTarjetacanons()
    {
        return $this->hasMany(Tarjetacanon::className(), ['nroTarjeta' => 'nroTarjeta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdcanons()
    {
        return $this->hasMany(Canon::className(), ['idcanon' => 'idcanon'])->viaTable('tarjetacanon', ['nroTarjeta' => 'nroTarjeta']);
    }
}
