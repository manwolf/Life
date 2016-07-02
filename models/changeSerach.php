<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\database\Change;

/**
 * changeSerach represents the model behind the search form about `app\models\database\Change`.
 */
class changeSerach extends Change
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user', 'type', 'beginDate', 'endDate', 'level', 'article', 'recordTime', 'updateTime'], 'integer'],
            [['theme', 'keywords', 'keyman', 'keymanImpact'], 'safe'],
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
        $query = Change::find();

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
            'id' => $this->id,
            'user' => $this->user,
            'type' => $this->type,
            'beginDate' => $this->beginDate,
            'endDate' => $this->endDate,
            'level' => $this->level,
            'article' => $this->article,
            'recordTime' => $this->recordTime,
            'updateTime' => $this->updateTime,
        ]);

        $query->andFilterWhere(['like', 'theme', $this->theme])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'keyman', $this->keyman])
            ->andFilterWhere(['like', 'keymanImpact', $this->keymanImpact]);

        return $dataProvider;
    }
}
