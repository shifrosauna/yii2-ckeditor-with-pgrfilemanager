CKEditor Widget for Yii2 with pgrfilemanager
========================

Renders a [CKEditor WYSIWYG text editor plugin](http://www.ckeditor.com) widget.

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require shifrosauna/yii2-ckeditor-with-pgrfilemanager:dev-master
```
or add

```json
"shifrosauna/yii2-ckeditor-with-pgrfilemanager" : "dev-master"
```

to the require section of your application's `composer.json` file.

Skins & Plugins
---------------

This widget works with default's `dev-full/stable` branch of CKEditor, with a set of plugins and skins. If you wish to
configure a different skins or plugins that the one proposed, you will have to download them separately and configure
the widget's `clientOptions` attribute accordingly.


Usage
-----
The library comes with two widgets: `CKEditor` and `CKEditorInline`. One is for classic edition and the other for inline
editing respectively.

Using a model with a basic preset:

```

use dosamigos\ckeditor\CKEditor;


<?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>
```
Using inline edition with basic preset:

```

use dosamigos\ckeditor\CKEditorInline;

<?php CKEditorInline::begin(['preset' => 'basic']);?>
    This text can be edited now :)
<?php CKEditorInline::end();?>
```

Testing
-------

To test the extension, is better to clone this repository on your computer. After, go to the extensions folder and do
the following (assuming you have `composer` installed on your computer): 

```bash 
$ composer install --no-interaction --prefer-source --dev
```
Once all required libraries are installed then do: 

```bash 
$ vendor/bin/phpunit
```

Further Information
-------------------
Please, check the [CKEditor plugin site](http://www.ckeditor.com) documentation for further information about its configuration options.

Contributing
------------

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.




<i>Web development has never been so fun!</i>  

# yii2-ckeditor-with-pgrfilemanager
