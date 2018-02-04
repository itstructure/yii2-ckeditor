<?php
/**
 * @copyright Copyright (c) 2018 Andrey Girnik
 * @author Andrey Girnik <girnikandrey@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT License
 */
namespace Itstructure\CKEditor;

use yii\web\{AssetBundle, JqueryAsset, YiiAsset};

/**
 * CKEditorAsset
 *
 * @see http://docs.ckeditor.com/
 *
 * @package Itstructure\CKEditor
 */
class CKEditorAsset extends AssetBundle
{
    public $sourcePath = '@vendor/ckeditor/ckeditor';

    public $js = [
        'ckeditor.js',
        'adapters/jquery.js',
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];

    public $depends = [
        YiiAsset::class,
        JqueryAsset::class,
    ];
}
