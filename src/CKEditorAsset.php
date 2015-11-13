<?php
/**
 * @copyright Copyright (c) 2013-15 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace shifrosauna/ckeditor-with-pgrfilemanager;

use yii\web\AssetBundle;

/**
 * CKEditorAsset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\ckeditor
 */
class CKEditorAsset extends AssetBundle
{
    public $js = [
        'ckeditor.js',
        'adapters/jquery.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets/ckeditor';
        parent::init();
    }
}
