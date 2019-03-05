<?php
namespace common\widgets\webuploader\assets;

use yii\web\AssetBundle;

/**
 * Class AppAsset
 * @package common\widgets\webuploader\assets
 * @author cx
 */
class AppAsset extends AssetBundle {

    public $sourcePath = '@common/widgets/webuploader/resources/';

    public $css = [
        'css/common.css',
    ];

    public $js = [
        'js/uploader.js',
        'js/sortable.min.js'
    ];

    public $depends = [

    ];
}