<?php
/**
 * @copyright Copyright (c) 2018 Andrey Girnik
 * @author Andrey Girnik <girnikandrey@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT License
 */
namespace Itstructure\CKEditor;

use yii\helpers\ArrayHelper;
use yii\base\InvalidConfigException;

/**
 * Trait OptionsTrait
 *
 * @see http://docs.ckeditor.com/
 *
 * @package Itstructure\CKEditor
 */
trait OptionsTrait
{
    /**
     * The toolbar preset.
     * Available values: basic, full, standard, custom (with configuration in [clientOptions]).
     *
     * @var string
     */
    public $preset = 'standard';

    /**
     * The options for the CKEditor 4.
     *
     * @var array
     */
    public $clientOptions = [];

    /**
     * Set the clientOptions.
     * Options from presets are merging with the client options.
     */
    protected function loadOptions()
    {
        $options = [];

        if ($this->preset == 'custom'){
            $optionsFile = null;
        } else {
            $optionsFile = __DIR__ . '/presets/' . $this->preset . '.php';
        }

        if ($optionsFile !== null) {
            if (!is_file($optionsFile)){
                throw new InvalidConfigException('The CKEditor options file can not be loaded.');
            }
            $options = require($optionsFile);
        }

        $this->clientOptions = ArrayHelper::merge(
            $options,
            $this->clientOptions
        );
    }
}
