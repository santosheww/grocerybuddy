<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vendorproducts;

/**
 * VendorproductsSearch represents the model behind the search form about `app\models\Vendorproducts`.
 */
class VendorproductsSearch extends Vendorproducts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Pid'], 'integer'],
            [['ProductName', 'Quatity', 'Weight', 'Price', 'Discount'], 'safe'],
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
        $query = Vendorproducts::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Pid' => $this->Pid,
        ]);

        $query->andFilterWhere(['like', 'ProductName', $this->ProductName])
            ->andFilterWhere(['like', 'Quatity', $this->Quatity])
            ->andFilterWhere(['like', 'Weight', $this->Weight])
            ->andFilterWhere(['like', 'Price', $this->Price])
            ->andFilterWhere(['like', 'Discount', $this->Discount]);

        return $dataProvider;
    }
}
