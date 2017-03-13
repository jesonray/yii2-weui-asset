<?php
/**
 * Created by PhpStorm.
 * User: Ray
 * Date: 2017/3/10
 * Time: 下午2:35
 */
namespace raysoft\weui;

class WeuiAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/weui/dist';

    public $basePath = '@webroot/assets';

    public $css = [
        'style/weui.css'
    ];
}