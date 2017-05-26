<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Horario;

/**
 * HorarioSearch represents the model behind the search form about `app\models\Horario`.
 */
class HorarioSearch extends Horario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HOR_CODIGO', 'ASI_CODIGO', 'HOR_INICIO', 'HOR_FINAL'], 'safe'],
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
        $query = Horario::find();

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
        $query->andFilterWhere(['like', 'HOR_CODIGO', $this->HOR_CODIGO])
            ->andFilterWhere(['like', 'ASI_CODIGO', $this->ASI_CODIGO])
            ->andFilterWhere(['like', 'HOR_INICIO', $this->HOR_INICIO])
            ->andFilterWhere(['like', 'HOR_FINAL', $this->HOR_FINAL]);

        return $dataProvider;
    }
}
