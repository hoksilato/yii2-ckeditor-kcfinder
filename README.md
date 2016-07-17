CKEditor + KCFinder for Yii 2
=====

WYSIWYG text editor widget with integrated file browser.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist hoksilato/yii2-ckeditor-kcfinder "*"
```

If your `composer.json` has `stability` option set to `stable` (this is a
default value, if not set explicitly), run the following command:

```
php composer.phar require --prefer-dist "hoksilato/yii2-ckeditor-kcfinder:dev-master" \
    "ckeditor/ckeditor:@dev" "sunhater/kcfinder:@dev"
```

or add

```
"hoksilato/yii2-ckeditor-kcfinder": "*"
```

to the require section of your `composer.json` file.

Usage
-----

```php
\hoksilato\ckeditor\CKEditor::widget();
```

Possible settings (with default values)
---------------------------------------

```php
'type' => CKEditor::TYPE_STANDARD,
'height' => '200px',
'language' => Yii::$app->language,
```
