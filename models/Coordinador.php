<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "coordinador".
 *
 * @property string $id_coordinador_convenio
 * @property string $rut_coordinador_convenio
 * @property string $nombre_coordinador_convenio
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $vigente
 * @property string $esexterno
 * @property string $unidad_academica
 * @property string $email
 */
class Coordinador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'coordinador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_coordinador_convenio'], 'required'],
            [['fecha_inicio', 'fecha_fin'], 'safe'],
            [['id_coordinador_convenio'], 'string', 'max' => 20],
            [['rut_coordinador_convenio'], 'string', 'max' => 10],
            [['nombre_coordinador_convenio', 'email'], 'string', 'max' => 500],
            [['vigente', 'esexterno'], 'string', 'max' => 2],
            [['unidad_academica'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_coordinador_convenio' => 'Id Coordinador Convenio',
            'rut_coordinador_convenio' => 'Rut Coordinador Convenio',
            'nombre_coordinador_convenio' => 'Nombre Coordinador Convenio',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_fin' => 'Fecha Fin',
            'vigente' => 'Vigente',
            'esexterno' => 'Esexterno',
            'unidad_academica' => 'Unidad Academica',
            'email' => 'Email',
        ];
    }
}
