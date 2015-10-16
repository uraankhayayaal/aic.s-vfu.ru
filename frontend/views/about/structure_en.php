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
                        <h2 class="head1">Structure of AIC</h2> <br>
                    </div>
                    <div class="row">
                        <div class="col-12 mox-padd-20">
                            <p class="mox-justify">AIC has 12 laboratories, Intellectual Property Center, innovation of marketing and project menagement center, collective use center, legal support innovation sector and student business incubator "Oreh"</p><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mox-padd-20">
                            <table class="col-12 mox-padd-20 mox-left tbl_struktura">
                                <tr>
                                    <td width="25%" class="nostyle"></td>
                                    <td colspan="2" width="50%" class="mox-center bg_red">Director</td>
                                    <td width="25%" class="mox-center bg_red">Deputy Director</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="mox-center bg_red">Deputy Director Intellectual Property Center and legal support innovation sector</td>
                                    <td colspan="2" class="mox-center bg_red">Deputy Director innovation of marketing and project menagement center</td>
                                </tr>
                                <tr>
                                    <td class="mox-center bg_red">Deputy Director Intellectual Property Center and legal support innovation sector</td>
                                    <td width="25%" class="mox-center bg_red">Collective use center</td>
                                    <td width="25%" class="mox-center bg_red">Innovation of marketing and project menagement center</td>
                                    <td class="mox-center bg_red">Student bisiness incubator "Oreh"</td>
                                </tr>
                                <tr>
                                    <td class="mox-center bg_red">Intellectual Property Center</td>
                                    <td><li>Director</li><li>Chief Specialist</li></td>
                                    <td class="mox-center bg_red">Innovation menegement center</td>
                                    <td rowspan="4"><li>Director</li><li>Chief Specialist</li></td>
                                </tr>
                                <tr>
                                    <td><li>Leading Researcher</li><li>Leading Researcher</li></td>
                                    <td width="25%" class="nostyle"></td>
                                    <td><li>Chief Specialist</li><li>Chief Specialist</li><li>Lead Specialist</li></td>
                                </tr>
                                <tr>
                                    <td class="mox-center bg_red">Legal support innovation sector</td>
                                    <td width="25%" class="nostyle"></td>
                                    <td class="mox-center bg_red">The project menedgement sector</td>
                                </tr>
                                <tr>
                                    <td><li>Chief Specialist</li><li>Chief Specialist</li><li>Leading Researcher</li></td>
                                    <td width="25%" class="nostyle"></td>
                                    <td><li>Chief Specialist</li><li>Leading Researcher</li></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 mox-padd-20">
                            <ul class="mox-justify">
                                <a class="cta" href="#">Innovation of marketing and project menagement center</a><br>
                                <li>Search and identify prospectively ideas</li>
                                <li>Create a SIE</li>
                                <li>Search and attraction of investments in SIE</li>
                                <li>Advisory support </li>
                                <li>Give rooms on preferential terms</li>
                            </ul>
                        </div>
                         <div class="col-4 mox-padd-20">
                            <ul class="mox-justify">
                                <a class="cta" href="<?= Url::toRoute('oreh/index')?>">Student business incubator "Oreh"</a><br>
                                <li>Student entrepreneurship development</li>
                                <li>Give rooms on preferential terms</li>
                                <li>Co-working center</li>
                                <li>"Million rubles idia" program</li>
                                <li>Business training</li>
                                <li>"iInnovator" career guidance school for kids</li>
                            </ul>
                        </div>
                        <div class="col-4 mox-padd-20">
                            <ul class="mox-justify">
                                <a class="cta" href="#">Legal support innovation sector</a><br>
                                <li>Register, legal and accounting support SIE</li>
                                <li>Monitoring of SIE</li>
                                <li>Protection of the rights and legal interests of SIE</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mox-padd-20">
                            <ul class="mox-justify">
                                <a class="cta" href="#">Collective use center</a><br>
                                <li>Scientific and technological equipment park</li>
                                <li>Microscopy, analysis, measurement, prototyping</li>
                                <li>Service</li>
                            </ul>
                        </div>
                        <div class="col-6 mox-padd-20">
                            <ul class="mox-justify">
                                <a class="cta" href="#">Intellectual Property Center</a><br>
                                <li>Technology and Innovation Rospatent Support center</li>
                                <li>Library of patent</li>
                                <li>Licensing of IP NEFU</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</div>