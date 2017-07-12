<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "institucion".
 *
 * @property integer $id_tipo_institucion
 * @property string $nombre_institucion
 * @property integer $id_institucion
 * @property integer $id_pais
 * @property string $vigente
 * @property string $id_internacional
 * @property string $rut_institucion
 * @property string $razon_social_institucion
 * @property string $direccion_institucion
 * @property string $telefono_institucion
 * @property string $email_institucion
 * @property string $link_institucion
 */
class Institucion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'institucion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['id_tipo_institucion', 'integer', 'message' => 'ID incorrecto'],
   ['id_tipo_institucion', 'required', 'message' => 'Campo requerido'],
   ['nombre_institucion', 'required', 'message' => 'Campo requerido'],
   ['nombre_institucion', 'match', 'pattern' => '/^[a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras'],
   ['nombre_institucion', 'match', 'pattern' => '/^.{3,500}$/', 'message' => 'Mínimo 3 y máximo 500 caracteres'],
   ['id_institucion', 'integer', 'message' => 'ID incorrecto'],
   ['id_institucion', 'required', 'message' => 'Campo requerido'],
   ['id_institucion', 'unique', 'message' => 'Campo unico'],
   ['id_pais', 'integer', 'message' => 'ID incorrecto'],
   ['id_pais', 'required', 'message' => 'Campo requerido'],
   ['vigente', 'required', 'message' => 'Campo requerido'],
   ['vigente', 'match', 'pattern' => '/^[yn\s]+$/i', 'message' => 'Sólo se aceptan letras. Ingresar "y" en caso de estar vigente aún, o bien ingresar "n" en caso contrario'],
   ['id_internacional', 'required', 'message' => 'Campo requerido'],
   ['id_internacional', 'match', 'pattern' => '/^[123456789\s]+$/i', 'message' => 'Sólo se aceptan números del 1 al 9.'],
   ['rut_institucion', 'required', 'message' => 'Campo requerido'],
   ['rut_institucion', 'match', 'pattern' => '/^[0-9k\s]+$/i', 'message' => 'Sólo se aceptan números y la letra "k"'],
   ['rut_institucion', 'match', 'pattern' => '/^.{9,12}$/', 'message' => 'Mínimo 9 y máximo 12 caracteres'],
   ['razon_social_institucion', 'required', 'message' => 'Campo requerido'],
   ['razon_social_institucion', 'match', 'pattern' => '/^[a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras'],
   ['razon_social_institucion', 'match', 'pattern' => '/^.{3,500}$/', 'message' => 'Mínimo 3 y máximo 500 caracteres'],
   ['direccion_institucion', 'required', 'message' => 'Campo requerido'],
   ['direccion_institucion', 'match', 'pattern' => '/^[0-9a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras y números'],
   ['direccion_institucion', 'match', 'pattern' => '/^.{3,500}$/', 'message' => 'Mínimo 3 y máximo 500 caracteres'],
   ['telefono_institucion', 'required', 'message' => 'Campo requerido'],
   ['telefono_institucion', 'match', 'pattern' => '/^[0-9\s]+$/i', 'message' => 'Sólo se aceptan números'],
   ['telefono_institucion', 'match', 'pattern' => '/^.{9,100}$/', 'message' => 'Mínimo 9 y máximo 100 caracteres'],
   ['email_institucion', 'required', 'message' => 'Campo requerido'],
   ['email_institucion', 'match', 'pattern' => '/^.{3,200}$/', 'message' => 'Mínimo 3 y máximo 200 caracteres'],
   ['email_institucion','email','message' => 'Formato no válido'],
   ['link_institucion', 'required', 'message' => 'Campo requerido'],
   ['link_institucion', 'match', 'pattern' => '/^.{3,200}$/', 'message' => 'Mínimo 3 y máximo 200 caracteres'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tipo_institucion' => 'Id Tipo Institucion',
            'nombre_institucion' => 'Nombre Institucion',
            'id_institucion' => 'Id Institucion',
            'id_pais' => 'Id Pais',
            'vigente' => 'Vigente',
            'id_internacional' => 'Id Internacional',
            'rut_institucion' => 'Rut Institucion',
            'razon_social_institucion' => 'Razon Social Institucion',
            'direccion_institucion' => 'Direccion Institucion',
            'telefono_institucion' => 'Telefono Institucion',
            'email_institucion' => 'Email Institucion',
            'link_institucion' => 'Link Institucion',
        ];
    }
}
