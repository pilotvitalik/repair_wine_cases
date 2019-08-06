<?php get_header();?>

<body>
	<div class='wrapper'>
		<div class='header'>
			<div>
					<h4>Сервиcный центр 24 часа</h4>
					<p>Ремонт и обслуживание винных шкафов</p>
			</div>
			<div class='menu'>
				<div class='mobMenu'>
					<div>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<ul class='navmenu'>
						<a href='#'><li>Главная</li></a>
						<a href='#'><li>О нас</li></a>
						<a href='#'><li>Услуги</li></a>
						<a href='#'><li>Акции</li></a>
						<a href='#'><li>Контакты</li></a>
						<a href='#'><li>Прайс-лист</li></a>
					</ul>
				</div>
				<div class='call'>
					<a href='#'><p>8 (812) 345 67 90</p></a>
					<a href='#'><p>Заказать звонок</p></a>
				</div>
			</div>
			<h4>РЕМОНТ И ОБСЛУЖИВАНИЕ</h4>
			<h3>ВИННЫХ ШКАФОВ <br>И ВИННОТЕК</h3>	
			<h5>Мы работаем круглосуточно. По всей Москве и Московской области.<br>Доверьте свою технику профессионалам!</h5>
			<button type='button' href='#feedback_click'>ВЫЗВАТЬ МАСТЕРА</button>
		</div>
		<div class='common'>
          <form class='order1' action="<?php get_template_directory(); ?>/../../../order.php" method='post'>
				<h3>Хотите узнать причину<br> поломки?</h3>
				<p>Закажите бесплатную диагностику!</p>
				<label>
					<input class='input' type='text' name='name' placeholder='Ваше имя'>
				</label>
				<label>
					<input class='input' type='tel' name='phone' placeholder='Телефонный номер'>
				</label>
				<label>
					<textarea class='input' name='message' placeholder='Сообщение'></textarea>
				</label>
				<button class='button' type='submit' name='order'>Заказать диагностику</button>
			</form>
			<div class='whyWe'>
				<h3>Почему мы?</h3>
					<div class='whyWeDescription'>
						<img src="<?php bloginfo('template_directory');?>/img/guarantee.png" alt='Гарантия'>
						<h4>Гарантия на работу</h4>
						<p>Мы гарантируем качество предоставляемых услуг в течении 6-12 месяцев (зависит от типа и состояния ремонтируемой техники).</p>
					</div>
					<div class='whyWeDescription'>
                      <img src="<?php bloginfo('template_directory');?>/img/service.png" alt='Сервис'>
						<h4>Гарантия на запасные<br>части</h4>
						<p>Используем оригинальные запасные части от завода - изготовителя. Гарантируем подлинность и бесперебойную работу в течении 6-12 месяцев.</p>
					</div>
					<div class='whyWeDescription'>
						<img src="<?php bloginfo('template_directory');?>/img/price.png" alt='Цена'>
						<h4>Гарантия цены</h4>
						<p>Не меняем цены в процессе. Сообщаем точную стоимость сразу после диагностики оборудования. Никаких дополнительных сборов!</p>
					</div>
			</div>
			<div class='price'>
				<h4>Основные неисправности <br>и стоимость работ</h4>
				<div>
					<div class='colorTable'>
						<p>Неисправность холодильника</p>
						<p>Стоимость ремонта</p>
					</div>
					<div class='colorTable'>
						<p>Выезд мастера на<br>объект</p>
						<p>0 руб.</p>
					</div>
					<div class='colorTable colorTable-dark'>
						<p>Диагностика холодильника при последующем ремонте</p>
						<p>0 руб.</p>
					</div>
					<div class='colorTable'>
						<p>Стоимость выезда мастера за пределы КАД</p>
						<p>от 150 руб.</p>
					</div>
					<div class='colorTable colorTable-dark'>
						<p>Стоимость вызова мастера и диагностика холодильника</p>
						<p>500 руб.</p>
					</div>
					<div class='colorTable'>
						<p>Засор слива воды в холодильнике</p>
						<p>от 1150 руб.</p>
					</div>
					<div class='colorTable colorTable-dark'>
						<p>Устранение утечки хладагента</p>
						<p>от 1600 руб.</p>
					</div>
					<div class='colorTable'>
						<p>Заправка холодильника фреоном</p>
						<p>от 2500 руб.</p>
					</div>
					<div class='colorTable colorTable-dark'>
						<p>Устранение засора капилярной трубки, ее замена</p>
						<p>от 1700 руб.</p>
					</div>
					<div class='colorTable'>
						<p>Установка или ремонт испарителя</p>
						<p>от 3200 руб.</p>
					</div>
					<div class='colorTable colorTable-dark'>
						<p>Замена сенсорных датчиков</p>
						<p>от 3800 руб.</p>
					</div>
					<div class='colorTable'>
						<p>Ремонт электронных плат</p>
						<p>от 2250 руб.</p>
					</div>
					<div class='colorTable colorTable-dark'>
						<p>Замена вентилятора</p>
						<p>от 1200 руб.</p>
					</div>
				</div>
				<button class='button buttonText' type='submit'>Вызвать мастера</button>
			</div>
			<div class='opinion'>
				<h4>Отзывы наших клиентов</h4>		
				<div class='opinionSlider'>
					<div class='slider'>
						<div id='p1'>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu metus non ligula tempor tristique. Proin sed tincidunt eros. Curabitur condimentum mattis mauris, vitae laoreet est aliquet sed. Maecenas ullamcorper ipsum nec molestie varius. Quisque bibendum eros nec finibus lacinia. Mauris dignissim diam in purus fermentum gravida. Nulla tempor tempor interdum. Integer nulla leo, tristique vel mauris a, auctor viverra tortor. Proin in elit non augue accumsan bibendum vel vel est. Aliquam id dictum metus. Pellentesque scelerisque lacus ut aliquam tempus. Integer molestie ut mi in aliquet. Donec finibus pulvinar ipsum vitae ultricies. Fusce facilisis efficitur odio, sit amet rutrum purus maximus malesuada.</p>
							<p>Lorem Ipsum 1</p>
						</div>
						<div id='p2'>
							<p>Quisque porttitor convallis purus elementum aliquam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut non eleifend nulla. Morbi varius metus ac sapien varius, et fringilla nulla hendrerit. Nam ultricies, quam in ultricies gravida, augue diam vehicula eros, a venenatis nisi arcu id dui. Praesent congue, sem sed ultrices maximus, quam mauris ultricies lorem, sit amet sollicitudin lectus lacus euismod lectus. Etiam in orci id massa rutrum gravida eu eget ligula. Duis eu tellus et libero consectetur tincidunt at non libero. Sed faucibus sagittis cursus. Donec posuere odio rutrum mattis ullamcorper. Vivamus eu fringilla ipsum, elementum convallis ante. Maecenas in velit ante.</p>
							<p>Lorem Ipsum 2</p>
						</div>
						<div id='p3'>
							<p>Понадобилась срочная уборка, так как собирались приехать родственники. Нашел в поисковике фирму, позвонил. Ответили сразу. Сначала сказали, что не могут выслать бригаду, потом попросили повисеть на линии, сказали, что приедут. Приехали за полчаса, хотя были пробки, судя по Яндекс.Картам. Быстро все убрали: протерли пыль, отмыли фасады шкафа, пропылесосили, пятно с ковра удалили, помыли полы. Справились за 1,5 часа. Работой и в целом отношением сотрудников доволен, но вот собранный мусор они не забрали с собой, а в мусорное ведро положили.</p>
							<p>Оксана Николаевна</p>
						</div>
						<div id='p4'>
							<p>Nullam at dolor eget urna tempor congue eu id velit. Mauris metus eros, molestie vitae mauris vitae, fringilla consectetur nulla. Suspendisse potenti. Donec ac diam a odio consectetur lacinia vitae et dui. Sed finibus magna maximus volutpat vehicula. Nullam eu risus pretium libero vestibulum egestas ac eget nibh. Integer aliquam nisi leo, non accumsan mi fringilla non. Pellentesque sodales varius vulputate. Etiam posuere et mauris vel tempor. Sed nulla nibh, sollicitudin at tellus vitae, vehicula convallis felis. Vivamus at mollis lectus. Nullam semper velit tortor, vel faucibus felis fermentum a. Praesent in quam justo.</p>
							<p>Lorem Ipsum 4</p>
						</div>
						<div id='p5'>
							<p>Nulla facilisi. Curabitur vestibulum rutrum vulputate. Duis nec dapibus massa, id feugiat felis. Donec ac eleifend dolor, eget lobortis turpis. Phasellus id elementum erat. Fusce efficitur, lacus eu porttitor interdum, leo arcu iaculis tellus, sed efficitur libero tortor sed erat. Pellentesque et efficitur nisl, ut luctus libero. Cras rhoncus eros id dictum varius. Quisque nec semper nibh. Quisque egestas hendrerit enim, a eleifend eros faucibus et. Suspendisse ultrices magna non mi feugiat, at finibus erat venenatis. Suspendisse tempor neque lorem, in auctor neque congue et. Nullam tincidunt massa eu risus malesuada, blandit faucibus elit lacinia.</p>
							<p>Lorem Ipsum 5</p>
						</div>
					</div>
				</div>

				<div class='page'>
					<span class='bigText'>01</span>
					<span class='bigText'>02</span>
					<span class='bigText'>03</span>
					<span class='bigText'>04</span>
					<span class='bigText'>05</span>
				</div>
			</div>
			<div class='brand'>
				<h4>Бренды, с которыми мы<br>работаем</h4>
				<div>
					<img class='border-right border-down border-top border-left' src="<?php bloginfo('template_directory');?>/img/brand_desktop/vineCold.png" alt='vineCold'>
					<img class='border-right border-down border-top' src="<?php bloginfo('template_directory');?>/img/brand_desktop/cavanova.png" alt='Cavanova'>
					<img class='border-right border-down border-top' src="<?php bloginfo('template_directory');?>/img/brand_desktop/AEG.png" alt='AEG'>
					<img class='border-right border-down border-left border-left' src="<?php bloginfo('template_directory');?>/img/brand_desktop/vestfrost.png" alt='vestfrost'>
					<img class='border-right border-down' src="<?php bloginfo('template_directory');?>/img/brand_desktop/miele.png" alt='Miele'>
					<img class='border-right border-down' src="<?php bloginfo('template_directory');?>/img/brand_desktop/liebherr.png" alt='Liebherr'>
					<img class='border-right border-down  border-left' src="<?php bloginfo('template_directory');?>/img/brand_desktop/Kuppersbush.png" alt='Kuppersbush'>
					<img class='border-down border-rightI' src="<?php bloginfo('template_directory');?>/img/brand_desktop/industry.png" alt='Industry'>
					<img class='border-right border-downI' src="<?php bloginfo('template_directory');?>/img/brand_desktop/indel.png" alt='Indel'>
					<img class='border-right border-downI  border-left' src="<?php bloginfo('template_directory');?>/img/brand_desktop/ariston.png" alt='Ariston'>
					<img class='border-right border-downI' src="<?php bloginfo('template_directory');?>/img/brand_desktop/gaggenau.png" alt='gaggenau'>
					<img class='border-right border-downI' src="<?php bloginfo('template_directory');?>/img/brand_desktop/fulgor.png" alt='fulgor'>
					<img class='border-right border-downI border-left' src="<?php bloginfo('template_directory');?>/img/brand_desktop/dunavox.png" alt='dunavox'>
					<img class='border-right border-downI' src="<?php bloginfo('template_directory');?>/img/brand_desktop/eurocave.png" alt='eurocave'>
					<img class='border-right border-downI' src="<?php bloginfo('template_directory');?>/img/brand_desktop/enofrigo.png" alt='enofrigo'>
					<img class='border-rightI border-downI border-left' src="<?php bloginfo('template_directory');?>/img/brand_desktop/dometic.png" alt='dometic'>
				</div>
			</div>
			<div class='answers'>
				<h4>Ответы на частые вопросы</h4>
				<div class='answers-preview heigthAuto'  id='t4'>
					<div class='test heigthAuto' id='t3'>
						<p>01</p>
						<p class='quest' data-num='0'>Сколько стоит выезд<br> мастера?</p>
						<p class='answer displayNone' id='t2'>Sed ac mauris nec nisi fringilla tincidunt. Phasellus mattis auctor elit, eget aliquam urna dignissim sed. Pellentesque a gravida arcu, a maximus mi. Quisque et condimentum urna. Mauris est ligula, rutrum et tempor vitae, tincidunt in tellus. Phasellus semper ipsum mi, vitae pulvinar nisi fermentum eu. In id lorem sit amet eros vulputate commodo in eu orci. Sed condimentum augue convallis, blandit risus a, molestie elit. Pellentesque facilisis laoreet sagittis. Nulla vulputate eget arcu vitae pharetra. </p>
					</div>
					<div class='test heigthAuto'>
						<p>02</p>
						<p class='quest' data-num='1'>Какой гарантийный срок на произведенный ремонт?<p>
						<p class='answer displayNone'>
							Sed volutpat hendrerit orci vitae vehicula. Pellentesque aliquet, odio at maximus porttitor, lorem magna gravida eros, a condimentum sem odio vitae elit. Quisque porttitor accumsan ullamcorper. Pellentesque luctus sollicitudin quam, quis luctus erat laoreet quis. Sed ut justo vel massa ultrices vehicula ac malesuada erat. Praesent mauris leo, rutrum vitae pellentesque sit amet, molestie a tortor. Duis fringilla enim sit amet consectetur sollicitudin. Phasellus ultrices magna orci, in scelerisque dolor commodo ut.
						</p>
					</div>
					<div class='test heigthAuto'>
						<p>03</p>
						<p class='quest'  data-num='2'>Как быстро приедет мастер?</p>
						<p class='answer displayNone'>Donec a pellentesque felis. In nec auctor libero. Nulla nibh elit, posuere varius enim a, ultricies sodales neque. Pellentesque consequat metus interdum ultricies congue. Integer venenatis cursus molestie. Proin pellentesque erat nulla, at vehicula ligula dictum et. Donec nibh nibh, scelerisque vitae dui nec, consequat tincidunt neque. Maecenas quis quam urna. Vivamus scelerisque tincidunt ultrices. Cras scelerisque lacus magna, et vehicula nulla rutrum nec. Quisque eleifend bibendum euismod. Donec sed efficitur elit. Pellentesque aliquam fringilla molestie.</p>
					</div>
					<div class='test heigthAuto'>
						<p>04</p>
						<p class='quest'  data-num='3'>По какому алгоритм проходит визит мастера?</p>
						<p class='answer displayNone'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sit amet pretium est. Donec scelerisque fringilla efficitur. Praesent feugiat maximus lectus, non volutpat metus rutrum non. Suspendisse non quam nec diam interdum sagittis. Proin aliquet lacus vitae tincidunt blandit. Proin iaculis ligula vitae justo pharetra tincidunt. Aenean posuere lacus ante, sed blandit nibh laoreet et.</p>
					</div>
					<div class='heigthAuto'>
						<p>05</p>
						<p class='quest '  data-num='4'>В каких случаях проводить ремонт нерентабельно, и<br>проще купить новую технику?</p>
						<p class='answer displayNone'>Ремонт проводить рентабельно всегда. Раньше технику собирали с запасом на хорошую<br>ремонтопригодность в будущем. Сейчас производители бытовой техники среднего ценового сегмента<br>зачастую устанавливают запчасти заведомо низкого качества, вместо хороших деталей, которые<br>использовались в моделях постарше. Наши инженеры при ремонте подбирают фирменные запчасти<br>высокого уровня надежности, тем самым увеличивая срок службы бытовой техники.</p>
					</div>
					<div class='test heigthAuto'>
						<p>06</p>
						<p  class='quest'  data-num='5'>Как правильно ухаживать за винным шкафом?</p>
						<p class='answer displayNone'>In et odio ut neque dictum dapibus ac in sem. Nullam eu libero dui. Vivamus pretium dolor quis nibh sagittis tempus. In consequat euismod lacinia. Suspendisse quis sapien non justo tempus commodo lacinia sed ante. Pellentesque urna urna, sollicitudin et dapibus vel, laoreet eu libero. Aliquam augue neque, efficitur nec interdum vitae, porttitor ut purus. Proin pretium maximus velit, at hendrerit massa. Suspendisse potenti. In eu accumsan nibh. Phasellus non ex efficitur, pulvinar.</p>
					</div>
				</div>
				<button class='button buttonText' type='submit'>Задать вопрос</button>
			</div>
			<form class='order2' action='order_down.php' method='post' id='feedback_click'>
				<h3>Оставьте заявку и мы<br> вам перезвоним!</h3>
				<div>
					<label>
						<input class='input' type='text' name='name' placeholder='Ваше имя' id='feedback_name'>
					</label>
					<label>
						<input class='input' type='tel' name='phone' placeholder='Телефонный номер'>
					</label>
					<label>
						<input class='input' type='text' name='maker' placeholder='Производитель'>
					</label>
				</div>
				<div>
					<label>
						<textarea class='input' name='message' placeholder='Опишите поломку'></textarea>
					</label>
					<button class='button order2_button' type='submit'>Отправить заявку</button>
				</div>
				<input type='checkbox' name='promise'>
				<label for='maker'>	Соглашение об обработке персональных данных
				</label>
			</form>
		</div>
              
<?php get_footer();?>