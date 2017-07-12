<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Institucion;

/**
 * InstitucionSearch represents the model behind the search form about `app\models\Institucion`.
 */
class InstitucionSearch extends Institucion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tipo_institucion', 'id_institucion', 'id_pais'], 'integer'],
            [['nombre_institucion', 'vigente', 'id_internacional', 'rut_institucion', 'razon_social_institucion', 'direccion_institucion', 'telefono_institucion', 'email_institucion', 'link_institucion'], 'safe'],
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
        $query = Institucion::find();

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
            'id_tipo_institucion' => $this->id_tipo_institucion,
            'id_institucion' => $this->id_institucion,
            'id_pais' => $this->id_pais,
        ]);

        $query->andFilterWhere(['like', 'nombre_institucion', $this->nombre_institucion])
            ->andFilterWhere(['like', 'vigente', $this->vigente])
            ->andFilterWhere(['like', 'id_internacional', $this->id_internacional])
            ->andFilterWhere(['like', 'rut_institucion', $this->rut_institucion])
            ->andFilterWhere(['like', 'razon_social_institucion', $this->razon_social_institucion])
            ->andFilterWhere(['like', 'direccion_institucion', $this->direccion_institucion])
            ->andFilterWhere(['like', 'telefono_institucion', $this->telefono_institucion])
            ->andFilterWhere(['like', 'email_institucion', $this->email_institucion])
            ->andFilterWhere(['like', 'link_institucion', $this->link_institucion]);

        return $dataProvider;
    }
}
