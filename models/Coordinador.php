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
            ['id_coordinador_convenio','unique'],
            ['id_coordinador_convenio', 'match', 'pattern' => "/^[0-9A-Z]+$/", 'message' => 'Sólo se aceptan letras Mayusculas y números enteros'],
            [['fecha_inicio', 'fecha_fin'], 'date', 'format'=>'yyyy-mm-dd'],
            ['fecha_fin', 'compare', 'compareAttribute' => 'fecha_inicio', 'operator' => '>'],
            [['id_coordinador_convenio'], 'string', 'max' => 20],
            [['rut_coordinador_convenio'], 'string', 'max' => 10],
            ['rut_coordinador_convenio', 'match', 'pattern' => "/^[0-9]{7,8}[-]{1}[0-9k]{1}/", 'message' => 'Intente con los siguientes formatos: 12345678-k ó 1234567-8'],
            [['nombre_coordinador_convenio', 'email'], 'string', 'max' => 500],
            ['email','email'],
            ['nombre_coordinador_convenio', 'match', 'pattern' => '/^[a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras'],
            [['vigente', 'esexterno'],'string', 'max' => 2],
            ['vigente','match', 'pattern' => '/^S(i)|N(o)|\s/', 'message' => 'Sólo se acepta "Si" o "No"'],
            ['esexterno','match', 'pattern' => '/^S(i)|N(o)|\s/', 'message' => 'Sólo se acepta "Si" o "No"'],
            [['unidad_academica'], 'string', 'max' => 300],
            ['unidad_academica','match', 'pattern' => '/^[a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras'],
            ['rut_coordinador_convenio','rut'],
        ];
    }
    public function rut($attribute,$params)
    {
        $rut = $this->rut_coordinador_convenio;
        $variable = strlen($this->rut_coordinador_convenio);
        $modulo = 0;
        $dv = 0;
        if($variable==10)
        {
            $suma = ($rut[7]*2)+($rut[6]*3)+($rut[5]*4)+($rut[4]*5)+($rut[3]*6)+($rut[2]*7)+($rut[1]*2)+($rut[0]*3);
            $modulo = intval($suma/11);
            $dv =  11 - ( $suma - ($modulo*11) );
            if($dv==11){$dv=0;}
            elseif($dv==10)
            {$dv='k';}
            elseif($dv != $rut[9])
            {
                $this->addError($attribute, 'El RUT ingresado no es valido');
                return false;
            }
        }
        else
        {
            $suma = ($rut[6]*2)+($rut[5]*3)+($rut[4]*4)+($rut[3]*5)+($rut[2]*6)+($rut[1]*7)+($rut[0]*2);
            $modulo = intval($suma/11);
            $dv =  11 - ( $suma - ($modulo*11) );
            if($dv==11){$dv=0;}
            elseif($dv==10)
            {$dv='k';}
            elseif($dv != $rut[8])
            {
                $this->addError($attribute, 'El RUT ingresado no es valido');
                return false;
            }
        }
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
