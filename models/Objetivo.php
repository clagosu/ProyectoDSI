<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "objetivo".
 *
 * @property integer $id_objetivo_convenio
 * @property integer $id_convenio
 * @property string $texto_objetivo
 * @property string $vigente
 */
class Objetivo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'objetivo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_objetivo_convenio', 'id_convenio'], 'integer'],
            [['texto_objetivo'], 'string', 'max' => 500],
            [['vigente'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_objetivo_convenio' => 'Id Objetivo Convenio',
            'id_convenio' => 'Id Convenio',
            'texto_objetivo' => 'Texto Objetivo',
            'vigente' => 'Vigente',
        ];
    }
}
