<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Actividad;

/**
 * ActividadSearch represents the model behind the search form about `app\models\Actividad`.
 */
class ActividadSearch extends Actividad
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_estado_actividad', 'id_tipo_actividad', 'id_actividad_convenio', 'id_convenio'], 'integer'],
            [['id_responsable_actividad', 'fecha_inicio', 'fecha_fin', 'nombre_actividad', 'descripcion', 'vigente'], 'safe'],
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
        $query = Actividad::find();

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
            'id_estado_actividad' => $this->id_estado_actividad,
            'id_tipo_actividad' => $this->id_tipo_actividad,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_fin' => $this->fecha_fin,
            'id_actividad_convenio' => $this->id_actividad_convenio,
            'id_convenio' => $this->id_convenio,
        ]);

        $query->andFilterWhere(['like', 'id_responsable_actividad', $this->id_responsable_actividad])
            ->andFilterWhere(['like', 'nombre_actividad', $this->nombre_actividad])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'vigente', $this->vigente]);

        return $dataProvider;
    }
}
