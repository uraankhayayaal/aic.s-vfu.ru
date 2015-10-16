<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

class MainAsset extends AssetBundle{

	public $basePath = '@webroot';
	public $baseUrl = '@web';

	public $css = [
	];

	public $js = [
	];

	public $depends = [
	];

	public $jsOptions = [
		'position' => View::POS_HEAD,
	];
}