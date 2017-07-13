<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Objetivo;

/**
 * ObjetivoSearch represents the model behind the search form about `app\models\Objetivo`.
 */
class ObjetivoSearch extends Objetivo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_convenio', 'id_objetivo_convenio'], 'integer'],
            [['texto_objetivo', 'vigente'], 'safe'],
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
        $query = Objetivo::find();

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
            'id_objetivo_convenio' => $this->id_objetivo_convenio,
        ]);

        $query->andFilterWhere(['like', 'texto_objetivo', $this->texto_objetivo])
            ->andFilterWhere(['like', 'vigente', $this->vigente]);

        return $dataProvider;
    }
}
