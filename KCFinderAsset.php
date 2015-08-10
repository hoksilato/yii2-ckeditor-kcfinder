<?php
/**
 * @link https://github.com/MadAnd/yii2-ckeditor-kcfinder
 * @copyright Copyright (c) 2014 HimikLab, MadAnd
 * @license http://opensource.org/licenses/MIT MIT
 */

namespace stenyo\ckeditor;

use yii\web\AssetBundle;

/**
 * @package MadAnd\ckeditor
 */
class KCFinderAsset extends AssetBundle
{
    public $sourcePath = '@vendor/sunhater/kcfinder';
    public $depends = [
        'MadAnd\ckeditor\CKEditorAsset',
    ];
}
