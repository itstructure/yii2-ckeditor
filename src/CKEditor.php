<?php
/**
 * @copyright Copyright (c) 2018 Andrey Girnik
 * @author Andrey Girnik <girnikandrey@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT License
 */
namespace Itstructure\CKEditor;

use yii\widgets\InputWidget;
use yii\helpers\{Html, Json};

/**
 * Class CKEditor
 * Widget class for displaying CKEditor block.
 *
 * @see http://docs.ckeditor.com/
 *
 * @package Itstructure\CKEditor
 */
class CKEditor extends InputWidget
{
    use OptionsTrait;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->loadOptions();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        echo $this->hasModel() ? $this->getActiveTextarea() : $this->getTextarea();

        $this->initEditor();
    }

    /**
     * Initialize CKEditor in textarea field with asset.
     *
     * @return void
     */
    protected function initEditor(): void
    {
        $view = $this->getView();

        CKEditorAsset::register($view);
        CKEditorAssetAddition::register($view);

        $id = $this->options['id'];

        $clientOptions = !empty($this->clientOptions) ? Json::encode($this->clientOptions) : '{}';

        $js = [];

        $js[] = "CKEDITOR.replace('$id', $clientOptions);";
        $js[] = "initItstructureOnChangeHandler('$id');";

        if (array_key_exists('filebrowserUploadUrl', $this->clientOptions) ||
            array_key_exists('filebrowserImageUploadUrl', $this->clientOptions)) {
            $js[] = "initItstructureCsrfHandler();";
        }

        $view->registerJs(implode("\n", $js));
    }

    /**
     * Get active textarea field with model.
     *
     * @return string
     */
    protected function getActiveTextarea(): string
    {
        return Html::activeTextarea($this->model, $this->attribute, $this->options);
    }

    /**
     * Get textarea field without model,
     * and with name and value.
     *
     * @return string
     */
    protected function getTextarea(): string
    {
        return Html::textarea($this->name, $this->value, $this->options);
    }
}
