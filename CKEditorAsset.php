<?php

namespace stenyo\ckeditor;

use yii\web\AssetBundle;

/**
 * @package MadAnd\ckeditor
 */
class CKEditorAsset extends AssetBundle {

    public $sourcePath = '@vendor/ckeditor/ckeditor';
    public $js = [
        'ckeditor.js',
        'adapters/jquery.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];

}
