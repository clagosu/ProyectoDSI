<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estado".
 *
 * @property integer $id_estado_convenio
 * @property string $nombre_estado_convenio
 * @property string $descripcion
 * @property string $vigente
 *
 * @property Convenio[] $convenios
 */
class Estado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_estado_convenio'], 'required'],
            [['id_estado_convenio'], 'integer'],
            [['nombre_estado_convenio'], 'string', 'max' => 200],
            [['descripcion'], 'string', 'max' => 500],
            [['vigente'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_estado_convenio' => 'Id Estado Convenio',
            'nombre_estado_convenio' => 'Nombre Estado Convenio',
            'descripcion' => 'Descripcion',
            'vigente' => 'Vigente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConvenios()
    {
        return $this->hasMany(Convenio::className(), ['id_estado_convenio' => 'id_estado_convenio']);
    }
}
