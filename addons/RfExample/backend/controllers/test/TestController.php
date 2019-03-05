<?php
namespace addons\RfExample\backend\controllers\test;

use common\controllers\AddonsBaseController;

/**
 * Class TestController
 * @package addons\RfExample\backend\controllers\test
 * @author cx
 */
class TestController extends AddonsBaseController
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index', [

        ]);
    }

    /**
     * @return string
     */
    public function actionUpdate()
    {
        return $this->render('update', [

        ]);
    }
}