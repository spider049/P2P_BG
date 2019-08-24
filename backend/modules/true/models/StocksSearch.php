<?php

namespace backend\modules\true\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Stocks;

/**
 * StocksSearch represents the model behind the search form of `common\models\Stocks`.
 */
class StocksSearch extends Stocks
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['Material', 'MaterialDescription', 'SerialNumber', 'Plnt', 'SLoc', 'ChangedOn', 'Manufacturer', 'Model', 'Product', 'Depot', 'Region', 'Province', 'Sub', 'StatusSub', 'StatusModel'], 'safe'],
            [['Value'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Stocks::find();

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
            'ID' => $this->ID,
            'ChangedOn' => $this->ChangedOn,
            'Value' => $this->Value,
        ]);

        $query->andFilterWhere(['like', 'Material', $this->Material])
            ->andFilterWhere(['like', 'MaterialDescription', $this->MaterialDescription])
            ->andFilterWhere(['like', 'SerialNumber', $this->SerialNumber])
            ->andFilterWhere(['like', 'Plnt', $this->Plnt])
            ->andFilterWhere(['like', 'SLoc', $this->SLoc])
            ->andFilterWhere(['like', 'Manufacturer', $this->Manufacturer])
            ->andFilterWhere(['like', 'Model', $this->Model])
            ->andFilterWhere(['like', 'Product', $this->Product])
            ->andFilterWhere(['like', 'Depot', $this->Depot])
            ->andFilterWhere(['like', 'Region', $this->Region])
            ->andFilterWhere(['like', 'Province', $this->Province])
            ->andFilterWhere(['like', 'Sub', $this->Sub])
            ->andFilterWhere(['like', 'StatusSub', $this->StatusSub])
            ->andFilterWhere(['like', 'StatusModel', $this->StatusModel]);

        return $dataProvider;
    }
}
