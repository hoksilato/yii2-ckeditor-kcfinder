<?php
/**
 * @link https://github.com/MadAnd/yii2-ckeditor-kcfinder
 * @copyright Copyright (c) 2014 HimikLab, MadAnd
 * @license http://opensource.org/licenses/MIT MIT
 */

namespace Stenyo\ckeditor;

use yii\web\AssetBundle;


/**
 * @package MadAnd\ckeditor
 */
class CKEditorAsset extends AssetBundle
{
    public $sourcePath = '@vendor/ckeditor/ckeditor';

    public $js = [
        'ckeditor.js',
        'adapters/jquery.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
