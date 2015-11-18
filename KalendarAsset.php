<?php

namespace globaloxs\kalendar;

/**
 * This is just an example.
 */
class KalendarAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/globalmikebracas/calendarr';

    public $css = [
        'zabuto_calendar.css',
    ];

    public $js = [
        'zabuto_calendar.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

