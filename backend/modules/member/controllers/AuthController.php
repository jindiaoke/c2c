<?php
namespace backend\modules\member\controllers;

use Yii;
use common\enums\StatusEnum;
use common\components\CurdTrait;
use common\models\member\MemberAuth;
use common\models\common\SearchModel;

/**
 * Class AuthController
 * @package backend\modules\member\controllers
 * @author cx
 */
class AuthController extends MController
{
    use CurdTrait;

    /**
     * @var string
     */
    public $modelClass = 'common\models\member\MemberAuth';

    /**
     * 首页
     *
     * @return string
     * @throws \yii\web\NotFoundHttpException
     */
    public function actionIndex()
    {
        $searchModel = new SearchModel([
            'model' => MemberAuth::className(),
            'scenario' => 'default',
            'partialMatchAttributes' => ['realname', 'mobile_phone'], // 模糊查询
            'defaultOrder' => [
                'id' => SORT_DESC
            ],
            'pageSize' => $this->pageSize
        ]);

        $dataProvider = $searchModel
            ->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['>=', 'status', StatusEnum::DISABLED]);

        return $this->render($this->action->id, [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }
}