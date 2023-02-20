<?php

namespace SysProd\JsTree;

use yii\web\AssetBundle;

/**
 * JsTree asset bundle.
 *
 * Class TreeInputAsset
 * @package SysProd\JsTree
 */
class JsTreeInputAsset extends AssetBundle
{

    public $sourcePath = '@vakata/jstree/dist';

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        parent::init();

        // set css & js
        $min = YII_DEBUG ? '' : '.min';
        $this->css = ["themes/default/style{$min}.css"];
        $this->js = ["jstree{$min}.js"];
    }

}
