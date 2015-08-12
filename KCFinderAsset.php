<?php

namespace stenyo\ckeditor;

use yii\web\AssetBundle;

class KCFinderAsset extends AssetBundle {

    public $sourcePath = '@vendor/sunhater/kcfinder';
    public $depends = [
        'stenyo\ckeditor\CKEditorAsset',
    ];

}
