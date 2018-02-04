<?php
/**
 * @copyright Copyright (c) 2018 Andrey Girnik
 * @author Andrey Girnik <girnikandrey@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT License
 */
namespace Itstructure\CKEditor;

use yii\web\{AssetBundle, JqueryAsset, YiiAsset};

/**
 * CKEditorAssetAddition
 *
 * @see http://docs.ckeditor.com/
 *
 * @package Itstructure\CKEditor
 */
class CKEditorAssetAddition extends AssetBundle
{
    public $sourcePath = __DIR__ . '/js';

    public $js = [
        'ckeditor-addition.js'
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];

    public $depends = [
        YiiAsset::class,
        JqueryAsset::class,
    ];
}
