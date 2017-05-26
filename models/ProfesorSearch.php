<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Profesor;

/**
 * ProfesorSearch represents the model behind the search form about `app\models\Profesor`.
 */
class ProfesorSearch extends Profesor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PRO_RUT', 'PRO_NOMBRES', 'PRO_PATERNO', 'PRO_MATERNO', 'PRO_FONO', 'PRO_DIRECCION', 'PRO_EMAIL', 'PRO_VIGENTE'], 'safe'],
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
        $query = Profesor::find();

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
        $query->andFilterWhere(['like', 'PRO_RUT', $this->PRO_RUT])
            ->andFilterWhere(['like', 'PRO_NOMBRES', $this->PRO_NOMBRES])
            ->andFilterWhere(['like', 'PRO_PATERNO', $this->PRO_PATERNO])
            ->andFilterWhere(['like', 'PRO_MATERNO', $this->PRO_MATERNO])
            ->andFilterWhere(['like', 'PRO_FONO', $this->PRO_FONO])
            ->andFilterWhere(['like', 'PRO_DIRECCION', $this->PRO_DIRECCION])
            ->andFilterWhere(['like', 'PRO_EMAIL', $this->PRO_EMAIL])
            ->andFilterWhere(['like', 'PRO_VIGENTE', $this->PRO_VIGENTE]);

        return $dataProvider;
    }
}
