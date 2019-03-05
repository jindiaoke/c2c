<?php
namespace backend\widgets\menu;

use Yii;
use yii\base\Widget;
use common\enums\StatusEnum;
use common\models\sys\Menu;

/**
 * 左边菜单
 *
 * Class MenuLeftWidget
 * @package backend\widgets\menu
 * @author cx
 */
class MenuLeftWidget extends Widget
{
    /**
     * @return string
     */
    public function run()
    {
        return $this->render('menu-left', [
            'models'=> Menu::getAuthShowList(StatusEnum::ENABLED),
            'addonsInfo' => Yii::$app->services->sys->addon->getInfo(),
        ]);
    }
}