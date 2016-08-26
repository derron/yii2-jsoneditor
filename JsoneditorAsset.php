<?php

namespace devgroup\jsoneditor;

use yii\web\AssetBundle;

class JsoneditorAsset extends AssetBundle
{
    public $sourcePath = '@bower/jsoneditor';
    public $js = [
        'dist/jsoneditor.min.js'
    ];
    public $css = [
        'dist/jsoneditor.min.css'
    ];
}
