<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "convenio".
 *
 * @property integer $id_convenio
 * @property integer $id_tipo_convenio
 * @property string $id_coordinador_convenio
 * @property integer $id_estado_convenio
 * @property string $nombre_convenio
 * @property string $fecha_inicio
 * @property string $fecha_termino
 * @property string $fecha_firma
 * @property string $fecha_decreto
 * @property integer $numero_decreto
 * @property string $descripcion
 * @property string $vigente
 * @property integer $vigencia
 */
class Convenio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'convenio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_convenio', 'id_tipo_convenio', 'id_estado_convenio','id_coordinador_convenio'], 'required'],
            [['id_convenio', 'id_tipo_convenio', 'id_estado_convenio', 'numero_decreto', 'vigencia'], 'integer'],
            [['fecha_inicio', 'fecha_termino', 'fecha_firma', 'fecha_decreto'], 'safe'],
            [['id_coordinador_convenio'], 'string', 'max' => 20],
            [['nombre_convenio', 'descripcion', 'area'], 'string', 'max' => 500],
            [['vigente'], 'string', 'max' => 2],
            [['id_coordinador_convenio'], 'exist', 'skipOnError' => true, 'targetClass' => Coordinador::className(), 'targetAttribute' => ['id_coordinador_convenio' => 'id_coordinador_convenio']],
            [['id_estado_convenio'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['id_estado_convenio' => 'id_estado_convenio']],
                   
              [['fecha_inicio', 'fecha_termino', 'fecha_firma', 'fecha_decreto'], 'date', 'format'=>'yyyy-mm-dd'],
                    [['id_coordinador_convenio','id_convenio','id_tipo_convenio','id_estado_convenio'],'match', 'pattern' => "/^[0-9A-Z]+$/", 'message' => 'Sólo se aceptan letras Mayusculas y números enteros'],
                    [['nombre_convenio', 'descripcion', 'area'],'match', 'pattern' => '/^[a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras'],
          
              ['fecha_termino', 'compare', 'compareAttribute' => 'fecha_inicio', 'operator' => '>'],
            ['fecha_termino', 'compare', 'compareAttribute' => 'fecha_firma', 'operator' => '>'],
            ['fecha_termino', 'compare', 'compareAttribute' => 'fecha_decreto', 'operator' => '>'],
            
               ['fecha_inicio', 'compare', 'compareAttribute' => 'fecha_termino', 'operator' => '<'],
            ['fecha_inicio', 'compare', 'compareAttribute' => 'fecha_firma', 'operator' => '<'],
            ['fecha_inicio', 'compare', 'compareAttribute' => 'fecha_decreto', 'operator' => '<'],
            
            ['vigente','match', 'pattern' => '/^S(i)|N(o)|\s/', 'message' => 'Sólo se acepta "Si" o "No"'],
            ['id_convenio','unique'],

            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_convenio' => 'Id ',
            'id_tipo_convenio' => 'Id Tipo',
            'id_coordinador_convenio' => 'Id Coordinador',
            'id_estado_convenio' => 'Id Estado',
            'nombre_convenio' => 'Nombre',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_termino' => 'Fecha Termino',
            'fecha_firma' => 'Fecha Firma',
            'fecha_decreto' => 'Fecha Decreto',
            'numero_decreto' => 'Numero Decreto',
            'descripcion' => 'Descripcion',
            'vigente' => 'Vigente',
            'vigencia' => 'Vigencia',
        ];
    }
}
