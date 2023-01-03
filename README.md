Yii2 CKEditor widget
==============

## Introduction

[![Latest Stable Version](https://poser.pugx.org/itstructure/yii2-ckeditor/v/stable)](https://packagist.org/packages/itstructure/yii2-ckeditor)
[![Latest Unstable Version](https://poser.pugx.org/itstructure/yii2-ckeditor/v/unstable)](https://packagist.org/packages/itstructure/yii2-ckeditor)
[![License](https://poser.pugx.org/itstructure/yii2-ckeditor/license)](https://packagist.org/packages/itstructure/yii2-ckeditor)
[![Total Downloads](https://poser.pugx.org/itstructure/yii2-ckeditor/downloads)](https://packagist.org/packages/itstructure/yii2-ckeditor)
[![Build Status](https://scrutinizer-ci.com/g/itstructure/yii2-ckeditor/badges/build.png?b=master)](https://scrutinizer-ci.com/g/itstructure/yii2-ckeditor/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/itstructure/yii2-ckeditor/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/itstructure/yii2-ckeditor/?branch=master)

This is a **CKEditor** widget for the Yii2 framework with [CKEditor](http://docs.ckeditor.com/) 
template.

## Dependencies
- php >= 7.1
- composer

## Installation

Via composer:

`composer require itstructure/yii2-ckeditor ~1.1.5`

or in section **require** of composer.json file set the following:

```json
"require": {
    "itstructure/yii2-ckeditor": "~1.1.4"
}
```

and command `composer install`, if you install yii2 project extensions first,

or command `composer update`, if all yii2 project extensions are already installed.

## Usage

Example of using in application with an active model and ckfinder:

```php
echo $this->form->field($this->model, $this->getFieldName())
    ->widget(
        CKEditor::className(),
        [
            'preset' => 'custom',
            'clientOptions' => [
                'toolbarGroups' => [
                    [
                        'name' => 'undo'
                    ],
                    [
                        'name' => 'basicstyles',
                        'groups' => ['basicstyles', 'cleanup']
                    ],
                    [
                        'name' => 'colors'
                    ],
                    [
                        'name' => 'links',
                        'groups' => ['links', 'insert']
                    ],
                    [
                        'name' => 'others',
                        'groups' => ['others', 'about']
                    ],
                ],
                'filebrowserBrowseUrl' => '/ckfinder/ckfinder.html',
                'filebrowserImageBrowseUrl' => '/ckfinder/ckfinder.html?type=Images',
                'filebrowserUploadUrl' => '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                'filebrowserImageUploadUrl' => '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                'filebrowserWindowWidth' => '1000',
                'filebrowserWindowHeight' => '700',
                'allowedContent' => true,
                'language' => 'en',
            ]
        ]
    );
```

`preset` option can be:

- basic
- full
- standard

## License

Copyright © 2018-2023 Andrey Girnik girnikandrey@gmail.com.

Licensed under the [MIT license](http://opensource.org/licenses/MIT). See LICENSE.txt for details.
