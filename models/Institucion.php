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
            [['id_tipo_institucion', 'id_institucion', 'id_pais'], 'integer'],
            [['id_institucion'], 'required'],
            [['nombre_institucion', 'razon_social_institucion', 'direccion_institucion'], 'string', 'max' => 500],
            [['vigente', 'id_internacional'], 'string', 'max' => 1],
            [['rut_institucion'], 'string', 'max' => 12],
            [['telefono_institucion'], 'string', 'max' => 100],
            [['email_institucion', 'link_institucion'], 'string', 'max' => 200],
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
