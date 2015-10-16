<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>
<script>
function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}

$( document ).ready(function() {
    if( getQueryVariable("scroll") == "true_scroll"){
        $('html, body').animate({
            scrollTop: $("#elementtoScrollToID").offset().top
        }, 2000);
    };    
});
</script>
<section class="row">
    <div class="mox-center mox-content">
        <div class="text page-header parbase">
            <div class="vic-text">
				<h3 class="head1">Студенческий бизнес инкубатор "Орех"</h3>
				<div class="col-4 mox-padd-20-vcenter">
					<img src="<?= Yii::getAlias('@resource/img/oreh.png') ?>" alt="oreh" width="35%">
				</div>
				<h3 class="mox-center">По замыслу, орешки, находящиеся внутри кедровой шишки, символизируют резидентов бизнес-инкубатора и их единство.</h3>
            </div>
        </div>
    </div>
</section>


<section class="row patt-1">
    <div class="mox-center mox-content">
        <div class="text parbase">
            <div class="vic-text">
				<h3 class="head2 pad-med">БИЗНЕС-ИНКУБАТОР ДЛЯ СТУДЕНТОВ</h3>
				<div class="col-4 align-top pad-med">
					<img class="resident" src="<?= Yii::getAlias('@resource/img/tie.png') ?>" alt="oreh">
					<h3 class="mox-center"><span style="font-size:1.5rem;">Предоставляет</span> помещение или рабочее место по льготной цене</h3>
				</div>
				<div class="col-4 align-top pad-med">
					<img src="<?= Yii::getAlias('@resource/img/students.png') ?>" alt="oreh">
					<h3 class="mox-center"><span style="font-size:1.5rem;">Информирует</span> о проводимых конкурсах и грантах</h3>
				</div>
				<div class="col-4 align-top pad-med">
					<img src="<?= Yii::getAlias('@resource/img/community.png') ?>" alt="oreh">
					<h3 class="mox-center"><span style="font-size:1.5rem;">Помогает</span> в заполении заявок на гранты и конкурсы</h3>
				</div>
				
            </div>
        </div>
    </div>
</section>

<div class="mox-content">
<div class="oreh">
	<div class="mox-padd-20-vcenter"></div>


	<div class="row">
		<div class="col-12">
			<h3 class="head1">Наши резиденты</h3>
			<h3 class="head2">В настоящий момент в бизнес инкубаторе "Орех" <b>22</b> резидента</h3>
		</div>
	</div>
<link rel="<?= Yii::getAlias('@resource/liquidcarousel.css') ?>" />	
<script src="<?= Yii::getAlias('@resource/js/jquery.liquidcarousel.js') ?>"></script>
<script type="text/javascript">
	<!--
		$(document).ready(function() {
			$('#liquid1').liquidcarousel({height:450, duration:500, hidearrows:false});
		});
	-->
	</script>
	<div class="row">
		<div class="col-12 ">
																	<div id="liquid1" class="liquid">
																		<div class="previous"></div>
																		<div class="wrapper">
																			<ul>
																				<li>
																					<div class="resident">
																						<img src="<?= Yii::getAlias('@resource/residents/17.jpg') ?>" alt="oreh" width="100%">
																						<p class="mox-center col-12"><span>MixTeam</span><br> Автоматизация домашней электросети</p>
																					</div>
																				</li>
																				<li>
																					<div class="resident">
																						<img src="<?= Yii::getAlias('@resource/residents/19.jpg') ?>" alt="oreh" width="100%">
																						<p class="mox-center col-12"><span>Степанов Егор</span><br> Разработка мобильных приложений для детей</p>
																					</div>
																				</li>
																				<li>
																					<div class="resident">
																						<img src="<?= Yii::getAlias('@resource/residents/21.jpg') ?>" alt="oreh" width="100%">
																						<p class="mox-center col-12"><span>Романова Любовь</span> Упрощение поиска месторождений</p>
																					</div>
																				</li>
																				<li>
																					<div class="resident">
																						<img src="<?= Yii::getAlias('@resource/residents/22.jpg') ?>" alt="oreh" width="100%">
																						<p class="mox-center col-12"><span>Неустроев Мичил</span> Разработка приложения почтовой доставки "Колибри Пост"</p>
																					</div>
																				</li>
																				<li>
																					<div class="resident">
																						<img src="<?= Yii::getAlias('@resource/residents/1.jpg') ?>" alt="oreh" width="100%">
																						<p class="mox-center col-12"><span>Егоров Вячеслав</span> Проектирование автономного мобильного комплекса</p>
																					</div>
																				</li>
																				<li>
																					<div class="resident">
																						<img src="<?= Yii::getAlias('@resource/residents/20.jpg') ?>" alt="oreh" width="100%">
																						<p class="mox-center col-12"><span>Ноговицина Алла<br></span> Организация центра развития школьников "Архимед"</p>
																					</div>
																				</li>
																				<li>
																					<div class="resident">
																						<img src="<?= Yii::getAlias('@resource/residents/18.jpg') ?>" alt="oreh" width="100%">
																						<p class="mox-center col-12"><span>Сергучева Вероника</span> Разработка мобильных платок для Крайнего Севера</p>
																					</div>
																				</li>
																				<li>
																					<div class="resident">
																						<img src="<?= Yii::getAlias('@resource/residents/4.jpg') ?>" alt="oreh" width="100%">
																						<p class="mox-center col-12"><span>Филиппов Сергей</span> Автоматизация системы энерго-тепло снабжения </p>
																					</div>
																				</li>
																				<li>
																					<div class="resident">
																						<img src="<?= Yii::getAlias('@resource/residents/5.jpg') ?>" alt="oreh" width="100%">
																						<p class="mox-center col-12"><span>Николаев Арнольд<br></span> Разработка пассивного ретранслятора Wi-fi диапазона</p>
																					</div>
																				</li>
																				<li>
																					<div class="resident">
																						<img src="<?= Yii::getAlias('@resource/residents/6.jpg') ?>" alt="oreh" width="100%">
																						<p class="mox-center col-12"><span>Матул Глеб<br></span> Разработка и обслуживание SCADAсистем</p>
																					</div>
																				</li>
																				<li>
																					<div class="resident">
																						<img src="<?= Yii::getAlias('@resource/residents/7.jpg') ?>" alt="oreh" width="100%">
																						<p class="mox-center col-12"><span>Семенов Александр<br></span> Проведение электрических обследований</p>
																					</div>
																				</li>
																				<li>
																					<div class="resident">
																						<img src="<?= Yii::getAlias('@resource/residents/8.jpg') ?>" alt="oreh" width="100%">
																						<p class="mox-center col-12"><span>Борисова Нюргуяна<br></span> Организация Co-working центра "FOCUS"</p>
																					</div>
																				</li>
																				<li>
																					<div class="resident">
																						<img src="<?= Yii::getAlias('@resource/residents/9.jpg') ?>" alt="oreh" width="100%">
																						<p class="mox-center col-12"><span>Пинигина Валерия<br></span> Организация эклогических туров по Якутии</p>
																					</div>
																				</li>
																				<li>
																					<div class="resident">
																						<img src="<?= Yii::getAlias('@resource/residents/10.jpg') ?>" alt="oreh" width="100%">
																						<p class="mox-center col-12"><span>Баин Еремей<br></span> Организация музея оптических иллюзий</p>
																					</div>
																				</li>
																				<li>
																					<div class="resident">
																						<img src="<?= Yii::getAlias('@resource/residents/11.jpg') ?>" alt="oreh" width="100%">
																						<p class="mox-center col-12"><span>Казаков Петр<br></span> Разработка мобильных приложений</p>
																					</div>
																				</li>
																				<li>
																					<div class="resident">
																						<img src="<?= Yii::getAlias('@resource/residents/12.jpg') ?>" alt="oreh" width="100%">
																						<p class="mox-center col-12"><span>Семенов Семен<br></span> Разработка бытовых роботов</p>
																					</div>
																				</li>
																				<li>
																					<div class="resident">
																						<img src="<?= Yii::getAlias('@resource/residents/13.jpg') ?>" alt="oreh" width="100%">
																						<p class="mox-center col-12"><span>Скрябин Вячеслав<br></span> Разработка мобильной контрольно-измерительной платформы Ar.DAQ</p>
																					</div>
																				</li>
																				<li>
																					<div class="resident">
																						<img src="<?= Yii::getAlias('@resource/residents/14.jpg') ?>" alt="oreh" width="100%">
																						<p class="mox-center col-12"><span>Попов Иван</span> Разработка интерфейса «Мозг-Компьютер-Устройство»</p>
																					</div>
																				</li>
																				<li>
																					<div class="resident">
																						<img src="<?= Yii::getAlias('@resource/residents/15.jpg') ?>" alt="oreh" width="100%">
																						<p class="mox-center col-12"><span>Местников Николай</span> Создание сайта интернет-аукционов авиабилетов <a target="_blank" href="http://easylife.ru">easylife.ru</a></p>
																					</div>
																				</li>
																				<li>
																					<div class="resident">
																						<img src="<?= Yii::getAlias('@resource/residents/16.jpg') ?>" alt="oreh" width="100%">
																						<p class="mox-center col-12"><span>Семенова Сардаана</span> Разработка мобильного сервиса онлайн покупки и примерки ювелирных колец</p>
																					</div>
																				</li>
																			</ul>
																		</div>
																		<div class="next"></div>
																	</div>
			<div class="owl-carousel owl-theme">

			</div>
		</div>
	</div>
	<script>
	$(document).ready(function(){
	  $('.owl-carousel').owlCarousel();
	});
	</script>
	<div class="mox-padd-20"></div>

	
</div>
</div>



<section class="row patt-2">
    <div class=" mox-content">
        <div class="text parbase">
            <div class="vic-text">

					<div class="row">
						<div class="col-12">
							<h3 class="head1">Центр молодежного инновационного творчества «ОРЕХ» </h3>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="col-4 mox-padd-20-vcenter">
								<img src="<?= Yii::getAlias('@resource/img/oreh21.jpg') ?>" alt="oreh" width="100%">
							</div>
							<div class="col-8 mox-padd-20-vcenter">
								<p class="mox-justify">Это творческое пространство с современными оборудованиями для прототипирования технологичных проектов. В центре ведутся образовательные мероприятия в виде мастер-классов, хакатонов, интерактивных лекций и интенсивов, где участники могут узнать о передовых технологиях и тенденциях.</p>
								<p class="mox-justify">Основная аудитория ЦМИТ - школьники и студенты.</p>
							</div>
						</div>
					</div>

					
			</div>
		</div>
	</div>
</section>



<section class="row">
    <div class=" mox-content">
        <div class="text parbase">
            <div class="vic-text">


					<div class="row">
						<div class="col-12">
							<h3 class="head1">Идея на миллион</h3>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="col-4 mox-padd-20-vcenter">
								<img src="<?= Yii::getAlias('@resource/img/million.jpg') ?>" alt="oreh" width="100%">
							</div>
							<div class="col-8 mox-padd-20-vcenter">
								<p class="mox-justify">Ежегодная программа, которая проводится весной в целях продвижения предпринимательства среди студентов СВФУ. Участие в программе предполагает интенсивное обучение основам предпринимательства и доведение идеи до бизнес-проекта. Для молодых людей, желающих начать свой бизнес, это возможность глубже понять бизнес-процессы, научиться грамотно составлять бизнес-планы, разрабатывать стратегии развития компаний и поработать с потенциальными инвесторами.</p>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</section>


<section class="row patt-3">
    <div class=" mox-content">
        <div class="text parbase">
            <div class="vic-text">
					<div class="row">
						<div class="col-12">
							<h3 class="head1">Oreh ventures</h3>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="col-4 mox-padd-20-vcenter">
								<img src="<?= Yii::getAlias('@resource/img/dost_oreh.png') ?>" alt="oreh" width="100%">
							</div>
							<div class="col-8 mox-padd-20-vcenter">
								<p class="mox-justify">В июле 2015 г. была открыта первая в России студенческая венчурная компания «Oreh ventures», которая не имеет аналогов по всей стране. Организация, курируемая самими студентами, создана для финансирования лучших инновационных и экономически привлекательных студенческих проектов.</p>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</section>


<section class="row">
    <div class=" mox-content">
        <div class="text parbase">
            <div class="vic-text">


					<div class="row">
						<div class="col-12">
							<h3 class="head1">Коворкинг центр</h3>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="col-4 mox-padd-20-vcenter">
								<img src="<?= Yii::getAlias('@resource/img/covorcing.jpg') ?>" alt="oreh" width="100%">
							</div>
							<div class="col-8 mox-padd-20-vcenter">
								<p class="mox-justify">Это специальное пространство, созданное для тех, кто не хочет работать ни в офисе, ни дома. Помимо комфортного места для работы с wi-fi, здесь можно найти единомышленников, обменяться опытом и развить свои идеи. Коворкинг открыт для всех студентов с понедельника по субботу с 9:00 до 18:00.</p>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</section>


<section class="row">
    <div class=" mox-content">
        <div class="text parbase">
            <div class="vic-text">
					<div class="row">
						<div class="col-12">
							<h3 class="head1">Наши филиалы</h3>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<div id="YMapsID" style="width:100%;height:600px;"></div>
						</div>
					</div>
			</div>
		</div>
	</div>
</section>

<section class="row patt-4" id="elementtoScrollToID">
    <div class=" mox-content">
        <div class="text parbase">
            <div class="vic-text">
				<div class="row">
			        <div class="col-12">
			        <div class="mox-padd-20"></div>
			        <h3 class="head1 mox-center">Хочешь стать резидентом? Оставь заявку ONLINE</h3>
			            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
			                <?= $form->field($model, 'name') ?>
			                <?= $form->field($model, 'email') ?>
			                <?= $form->field($model, 'phone') ?>
			                <?= $form->field($model, 'subject') ?>
			                <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
			                <div class="form-group">
			                    <?= Html::submitButton($model->getAttributeLabel('ok'), ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
			                </div>
			            <?php ActiveForm::end(); ?>
			        </div>
				</div>
			</div>
		</div>
	</div>
</section>
