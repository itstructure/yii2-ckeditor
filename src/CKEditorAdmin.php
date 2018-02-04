<?php
/**
 * @copyright Copyright (c) 2018 Andrey Girnik
 * @author Andrey Girnik <girnikandrey@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT License
 */
namespace Itstructure\CKEditor;

/**
 * Class CKEditorAdmin
 * Widget class for displaying CKEditor block in admin-module view template.
 *
 * @see http://docs.ckeditor.com/
 *
 * @package Itstructure\CKEditor
 */
class CKEditorAdmin extends CKEditor
{
    /**
     * Give ability of configure view to the module class.
     *
     * @return \yii\base\View|\yii\web\View
     */
    public function getView()
    {
        $module = \Yii::$app->controller->module;

        if (method_exists($module, 'getView')) {
            return $module->getView();
        }

        return parent::getView();
    }
}
