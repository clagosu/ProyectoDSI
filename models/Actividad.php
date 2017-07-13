<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actividad".
 *
 * @property integer $id_estado_actividad
 * @property integer $id_tipo_actividad
 * @property string $id_responsable_actividad
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property integer $id_actividad_convenio
 * @property integer $id_convenio
 * @property string $nombre_actividad
 * @property string $descripcion
 * @property string $vigente
 */
class Actividad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'actividad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_actividad_convenio','id_estado_actividad','id_tipo_actividad','id_responsable_actividad'], 'required'],
            [['id_estado_actividad', 'id_tipo_actividad', 'id_actividad_convenio', 'id_convenio'], 'integer'],
            ['id_actividad_convenio', 'unique'],
            [['fecha_inicio', 'fecha_fin'], 'date', 'format'=>'yyyy-mm-dd'],
            ['fecha_fin', 'compare', 'compareAttribute' => 'fecha_inicio', 'operator' => '>'],
            [['id_responsable_actividad'], 'string', 'max' => 20],
            ['id_responsable_actividad', 'match', 'pattern' => "/^[0-9A-Z]+$/", 'message' => 'SÛlo se aceptan letras Mayusculas y n˙meros enteros'],
            [['nombre_actividad'], 'string', 'max' => 200],
            [['nombre_actividad'], 'match', 'pattern' => '/^[a-z·ÈÌÛ˙Ò\s]+$/i', 'message' => 'SÛlo se aceptan letras'],
            [['descripcion'], 'string', 'max' => 500],
            [['descripcion'], 'match', 'pattern' => '/^[a-z·ÈÌÛ˙Ò\s]+$/i', 'message' => 'SÛlo se aceptan letras'],
            [['vigente'], 'string', 'max' => 2],
            [['vigente'], 'match', 'pattern' => '/^S(i)|N(o)|\s/', 'message' => 'SÛlo se acepta "Si" o "No"'],
            [['id_convenio'], 'exist', 'skipOnError' => true, 'targetClass' => Convenio::className(), 'targetAttribute' => ['id_convenio' => 'id_convenio']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_estado_actividad' => 'Id Estado Actividad',
            'id_tipo_actividad' => 'Id Tipo Actividad',
            'id_responsable_actividad' => 'Id Responsable Actividad',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_fin' => 'Fecha Fin',
            'id_actividad_convenio' => 'Id Actividad Convenio',
            'id_convenio' => 'Id Convenio',
            'nombre_actividad' => 'Nombre Actividad',
            'descripcion' => 'Descripcion',
            'vigente' => 'Vigente',
        ];
    }
}
