<?php

namespace app\assets;

class TagsinputAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/bootstrap-tagsinput/dist';
    /**
     * @inheritdoc
     */
    public $js = [
        'bootstrap-tagsinput.min.js',
    ];
    /**
     * @inheritdoc
     */
    public $depends = [
        'app\assets\TypeaheadAsset',
    ];
}