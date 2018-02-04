1 Introduction
------------

This is a **CKEditor** widget for the Yii2 framework with [CKEditor](http://docs.ckeditor.com/) 
template.

## 2 Dependencies
- php >= 7
- composer

## 3 Installation

Via composer:

```composer require "itstructure/yii2-ckeditor": "^1.0.0"```

or in section **require** of composer.json file set the following:
```
"require": {
    "itstructure/yii2-ckeditor": "^1.0.0"
}
```
and command ```composer install```, if you install yii2 project extensions first,

or command ```composer update```, if all yii2 project extensions are already installed.

## 4 Usage

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
            ]
        ]
    );
```

```preset``` option can be:

- basic
- full
- standart

## License
Copyright © 2018 Andrey Girnik girnikandrey@gmail.com.

Licensed under the [MIT license](http://opensource.org/licenses/MIT). See LICENSE.txt for details.
