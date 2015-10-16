<?php 
    use yii\helpers\Html;
?>

<!DOCTYPE html>
<!-- saved from url=(0030)http://innovation.verizon.com/ -->
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html;">
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= Html::encode($this->title) ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <?= Html::csrfMetaTags() ?>
    <!--<script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/clientlibs.js"></script>
    <link rel="stylesheet" href="./css/vzw_fonts.css" type="text/css">
    <link rel="stylesheet" href="./css/clientlibs.css" type="text/css">-->
    
    <?php $this->head() ?>
    <script src="https://api-maps.yandex.ru/1.1/index.xml" type="text/javascript"></script>
    <script type="text/javascript">
    // Создает обработчик события window.onLoad
    YMaps.jQuery(function () {
        // Создает экземпляр карты и привязывает его к созданному контейнеру
        var map = new YMaps.Map(YMaps.jQuery("#YMapsID")[0]);
            
        // Устанавливает начальные параметры отображения карты: центр карты и коэффициент масштабирования
        map.setCenter(new YMaps.GeoPoint(129.711349,62.02958), 4);

        // Создает метку в центре Москвы
        var placemark = new YMaps.Placemark(new YMaps.GeoPoint(129.705139,62.017644), {hideIcon: false, style: "default#redPoint"});
        var placemark2 = new YMaps.Placemark(new YMaps.GeoPoint(128.383232,61.238735), {hideIcon: false, style: "default#redPoint"});
        var placemark3 = new YMaps.Placemark(new YMaps.GeoPoint(113.966763,62.536191), {hideIcon: false, style: "default#redPoint"});
        var placemark4 = new YMaps.Placemark(new YMaps.GeoPoint(177.501522,64.731434), {hideIcon: false, style: "default#redPoint"});
        var placemark5 = new YMaps.Placemark(new YMaps.GeoPoint(124.72027,56.659963), {hideIcon: false, style: "default#redPoint"});
        
        // Устанавливает содержимое балуна
        placemark.name = "АИЦ";
        placemark.setIconContent("Якутск");
        placemark.description = "Головной офис";
        placemark2.name = "АИЦ Октемцы";
        placemark2.setIconContent("Октемцы");
        placemark2.description = "Филиал";
        placemark3.name = "АИЦ Мирный";
        placemark3.setIconContent("Мирный");
        placemark3.description = "Филиал";
        placemark4.name = "АИЦ Чукотка";
        placemark4.setIconContent("Анадырь СКОРО");
        placemark4.description = "Скоро";
        placemark5.name = "АИЦ Нерюнгри";
        placemark5.setIconContent("Нерюнгри СКОРО");
        placemark5.description = "Скоро";

        // Добавляет метку на карту
        map.addOverlay(placemark); 
        map.addOverlay(placemark2); 
        map.addOverlay(placemark3); 
        map.addOverlay(placemark4); 
        map.addOverlay(placemark5); 
    })
</script>
</head>
    <!--[if lt IE 7]>      <body class="mox-vic lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <body class="mox-vic lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <body class="mox-vic lt-ie10 lt-ie9"> <![endif]-->
    <!--[if lt IE 10]>     <body class="mox-vic lt-ie10"> <![endif]-->
    <!--[if gt IE 9]><!--> 