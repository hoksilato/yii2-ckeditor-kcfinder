<?php

namespace hoksilato\ckeditor;

use yii\web\AssetBundle;

class KCFinderAsset extends AssetBundle
{
    public $sourcePath = '@vendor/sunhater/kcfinder';
    public $depends = [
        'hoksilato\ckeditor\CKEditorAsset',
    ];
}
