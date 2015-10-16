<?php
return [
    'name' => 'АИЦ СВФУ им. М.К. Аммосова',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'urlManager' => [
        	'class' => 'yii\web\UrlManager',
        	'enablePrettyUrl' => true,
        	'showScriptName' => false,
        ],
    ],
    'modules' => [
        'photo' => [
            'class' => 'common\modules\photo\Load',//Модуль загрузки фотографий для всех ендов
        ],
        'redactor' => 'yii\redactor\RedactorModule',
        'class' => 'yii\redactor\RedactorModule',
        'uploadDir' => '@webroot/uploads',
        'uploadUrl' => '/hello/uploads',
    ],

];
