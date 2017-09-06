<?php

namespace sirgalas\yii2_xdan_datetimepicer;
use yii\web\AssetBundle;

class XdanAssets  extends AssetBundle
{
    public $sourcePath = __DIR__;
    public $css = [
        'jquery.datetimepicker.css',
    ];
    public $js=[
        'jquery.datetimepicker.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}