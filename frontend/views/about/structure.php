<?php use yii\helpers\Url; ?>
<?php 
if(Yii::$app->language == 'ru')
$this->title = 'Структура АИЦ';
if(Yii::$app->language == 'en')
$this->title = 'Structure of AIC';
?>
<?= $this->render('\common\_sidenav.php') ?>

<div class="col-9 scrollcontent">
    <section>
        <div class="mox-center mox-content">
            <div class="text parbase">
                <div class="vic-text">
                    <div class="row">
                        <h2 class="head1">Структура АИЦ</h2> <br>
                    </div>
                    <div class="row">
                        <div class="col-12 mox-padd-20">
                            <p class="mox-justify">При АИЦ функционируют 12 лабораторий, Центр интеллектуальной собственности, Центр маркетинга инноваций и управления проектами, Центр коллективного пользования, Сектор юридического сопровождения инновационной деятельности и студенческий бизнес-инкубатор «Орех»</p><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mox-padd-20">
                            <table class="col-12 mox-padd-20 mox-left tbl_struktura">
                                <tr>
                                    <td width="25%" class="nostyle"></td>
                                    <td colspan="2" width="50%" class="mox-center bg_red">Директор</td>
                                    <td width="25%" class="mox-center bg_red">Помощник директора</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="mox-center bg_red">Заместитель директора ЦИСиЮСИД</td>
                                    <td colspan="2" class="mox-center bg_red">Заместитель директора ЦМИиУП</td>
                                </tr>
                                <tr>
                                    <td class="mox-center bg_red">Центр интеллектуальной собственности и юридического сопровождения инновационной деятельности</td>
                                    <td width="25%" class="mox-center bg_red">Центр коллективного пользования</td>
                                    <td width="25%" class="mox-center bg_red">Центр маркетинга инноваций и управления проектами</td>
                                    <td class="mox-center bg_red">Студенческий бизнес инкубатор "Oreh"</td>
                                </tr>
                                <tr>
                                    <td class="mox-center bg_red">Сектор интеллектуальной собственности</td>
                                    <td rowspan="1"><li>Директор</li><li>Главный специалист</li></td>
                                    <td class="mox-center bg_red">Сектор маркетинга инноваций</td>
                                    <td rowspan="1"><li>Директор</li><li>Главный специалист</li></td>
                                </tr>
                                <tr>
                                    <td><li>Ведущий научный сотрудник</li><li>Ведущий научный сотрудник</li></td>
                                    <td width="25%" class="nostyle"></td>
                                    <td><li>Главный специалист</li><li>Главный специалист</li><li>Ведущий специалист</li></td>
                                </tr>
                                <tr>
                                    <td class="mox-center bg_red">Сектор юридического сопровождения инновационной деятельности</td>
                                    <td width="25%" class="nostyle"></td>
                                    <td class="mox-center bg_red">Сектор управления проектами</td>
                                </tr>
                                <tr>
                                    <td><li>Главный специалист</li><li>Главный специалист</li><li>Ведущий специалист</li></td>
                                    <td width="25%" class="nostyle"></td>                                    
                                    <td><li>Главный специалист</li><li>Ведущий специалист</li></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 mox-padd-20">
                            <ul class="mox-justify">
                                <a class="cta" href="#"><img src="<?= Yii::getAlias('@web') ?>/img/struct_cmpp.png" width="70" style="float:left;" alt="structure">Центр маркетинга инноваций и управления проектами</a><br><div class="clear"></div>
                                <li>Поиск и выявление преспективных идей</li>
                                <li>Создание и развитие МИП</li>
                                <li>Поиск и привлечение инвестиций в МИП-ы</li>
                                <li>Консультационная поддержка</li>
                                <li>Предоставление оборудования и помещений на льготных условиях</li>
                            </ul>
                        </div>
                         <div class="col-4 mox-padd-20">
                            <ul class="mox-justify">
                                <a class="cta" href="<?= Url::toRoute('oreh/index')?>"><img src="<?= Yii::getAlias('@web') ?>/img/struct_oreh.png" width="70" style="float:left;" alt="structure">Студенческий бизнес-инкубатор</a><br><div class="clear"></div>
                                <li>Развитие студенческого предпринимательства</li>
                                <li>Предоставление помещений на льготных условиях</li>
                                <li>Коворкинг-центр</li>
                                <li>Акселерационная программа "Идея на миллион"</li>
                                <li>Бизнес тренинги и семинары</li>
                                <li>Профориентационная школа для школьников "Я инноватор"</li>
                            </ul>
                        </div>
                        <div class="col-4 mox-padd-20">
                            <ul class="mox-justify">
                                <a class="cta" href="#"><img src="<?= Yii::getAlias('@web') ?>/img/struct_yristi.png" width="70" style="float:left;" alt="structure">Центр юридического сопровождения инновационной деятельности</a><br><div class="clear"></div>
                                <li>Регистрация, юридическое и бухгалтерское сопровождение МИП</li>
                                <li>Мониторинг деятельности МИП</li>
                                <li>Защита прав и законных интересов МИП</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mox-padd-20">
                            <ul class="mox-justify">
                                <a class="cta" href="#"><img src="<?= Yii::getAlias('@web') ?>/img/struct_koll.png" width="70" style="float:left;" alt="structure">Центр коллективного пользования</a><br><div class="clear"></div>
                                <li>Парк научного и технологического оборудования</li>
                                <li>Микроскопия, анализ, измерения, прототипирование</li>
                                <li>Сервисное обслуживание</li>
                            </ul>
                        </div>
                        <div class="col-6 mox-padd-20">
                            <ul class="mox-justify">
                                <a class="cta" href="#"><img src="<?= Yii::getAlias('@web') ?>/img/struct_cis.png" width="70" style="float:left;" alt="structure">Центр интеллектуальной собственности</a><br><div class="clear"></div>
                                <li>Центр поддержки технологий и инноваций ВИОС-Роспатент</li>
                                <li>Библиотека патентно-информационных фондов</li>
                                <li>Лицензирование объектов ИС СВФУ</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</div>