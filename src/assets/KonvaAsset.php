<?php /** @noinspection PhpMissingFieldTypeInspection */
declare(strict_types=1);

namespace sablesoft\konva\assets;

use yii\web\AssetBundle;
use sablesoft\vue\assets\VueAsset;

/**
 * Class KonvaAsset
 * @package sablesoft\konva\assets
 */
class KonvaAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/sablesoft/yii2-konva/src/web';

    /**
     * @var string[]
     */
    public $js = [
//        'https://unpkg.com/konva@7.0.3/konva.min.js',
//        'https://unpkg.com/vue-konva@2.1.3/umd/vue-konva.min.js',
        'js/konva.min.js',
        'js/vue-konva.min.js'
    ];

    public $depends = [
        VueAsset::class
    ];
}
