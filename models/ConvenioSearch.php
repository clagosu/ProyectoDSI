<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Convenio;

/**
 * ConvenioSearch represents the model behind the search form about `app\models\Convenio`.
 */
class ConvenioSearch extends Convenio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_convenio', 'id_tipo_convenio', 'id_estado_convenio', 'numero_decreto', 'vigencia'], 'integer'],
            [['id_coordinador_convenio', 'nombre_convenio', 'fecha_inicio', 'fecha_termino', 'fecha_firma', 'fecha_decreto', 'descripcion', 'vigente'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Convenio::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_convenio' => $this->id_convenio,
            'id_tipo_convenio' => $this->id_tipo_convenio,
            'id_estado_convenio' => $this->id_estado_convenio,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_termino' => $this->fecha_termino,
            'fecha_firma' => $this->fecha_firma,
            'fecha_decreto' => $this->fecha_decreto,
            'numero_decreto' => $this->numero_decreto,
            'vigencia' => $this->vigencia,
        ]);

        $query->andFilterWhere(['like', 'id_coordinador_convenio', $this->id_coordinador_convenio])
            ->andFilterWhere(['like', 'nombre_convenio', $this->nombre_convenio])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'vigente', $this->vigente]);

        return $dataProvider;
    }
}
