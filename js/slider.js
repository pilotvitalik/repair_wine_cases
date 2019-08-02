let slider = document.querySelector('.opinion .opinionSlider div');//выбор эл-тов отзывов
let num_opin = document.querySelectorAll('.page span');//выбора номеров отзывов
let current = 0;
let left = 0;//начальный сдвиг отзывов
let timer;//автоматический запуск слайдера

start();//Функция автоматически добавляет классы номерам отзывам при запуске страницы
autoslider();//Автоматический запуск слайдера после запуска

function start(){
	for(let i = 0; i < num_opin.length; i++){
		num_opin[i].classList.add('smallText');
		num_opin[i].classList.remove('bigText');
	}
	num_opin[current].classList.add('bigText');
}

function autoslider(){
	timer  = setTimeout(function(){
			left = left - 100;
			if (left< -400){
				left = 0;
				clearTimeout(timer);
			}
			slider.style.left = left + '%';

			if(current+1 == num_opin.length){
				current = 0;
			}else{
				current++;
			}
			start();
			autoslider();
	}, 5000);
}