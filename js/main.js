
/***********************
100vh BEGIN
***********************/
let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);
window.addEventListener('resize', () => {
	let vh = window.innerHeight * 0.01;
	document.documentElement.style.setProperty('--vh', `${vh}px`);
});
/***********************
100vh END
***********************/


/***********************
 fancybox BEGIN
 ***********************/
$.fancybox.defaults.backFocus = false;
$.fancybox.defaults.autoFocus = false;
$.fancybox.defaults.lang = 'ru';
$.fancybox.defaults.i18n =
	{
		'ru': {
			CLOSE: 'Закрыть',
			NEXT: 'Дальше',
			PREV: 'Назад',
			ERROR: 'Не удается загрузить. <br/> Попробуйте позднее.',
			PLAY_START: 'Начать слайдшоу',
			PLAY_STOP: 'Остановить слайдшоу',
			FULL_SCREEN: 'На весь экран',
			THUMBS: 'Превью'
		}
	};

function initFancy() {
	$('.fancy').fancybox({
		buttons: ['close']
	});
	$('.fancy-modal').fancybox({
		selector: '',
		touch: false
	});
	$('.fancy-map').fancybox({
		toolbar: false,
		smallBtn: true,
		defaultType: "iframe"
	});
	$('.fancy-video').fancybox({
		toolbar: false,
		smallBtn: true,
		youtube: {
			controls: 1,
			showinfo: 0,
			autoplay: 1
		}
	});
}

$(function () {
	initFancy();
});
/***********************
 fancybox END
 ***********************/


/***********************
header menu BEGIN
***********************/
$(function($){
	const burger = $('.burger');
	const header = $('.olla-header');

	burger.on('click',function (e) {
		e.preventDefault();
		header.toggleClass('opened');
		$('body').toggleClass('stopped');
	});

	$(document).on('click touchstart', function (e) {
		const div = $(".olla-header");
		if (!div.is(e.target) && div.has(e.target).length === 0) {
			header.removeClass('opened');
			$('body').removeClass('stopped');
		}
	});

	$(window).on('scroll',function () {
		let scrollTop = window.scrollY;
		if (scrollTop > 0){
			header.addClass('olla-header--scrolled');
		} else {
			header.removeClass('olla-header--scrolled');
		}
	})

});
/***********************
header menu END
***********************/


/***********************
rest BEGIN
***********************/
$(function($){
	$('.rest-slider').flickity({
		cellAlign: 'center',
		prevNextButtons: false,
		groupCells: true
	});

	$('.rest__nav a').on('click',function (e) {
		e.preventDefault();
		const needTab = $($(this).attr('href'));
		$('.rest__nav a').removeClass('active');
		$(this).addClass('active');
		$('.rest__tab').removeClass('active');
		needTab.addClass('active');
	})
});
/***********************
rest END
***********************/


/***********************
 Geo BEGIN
 ***********************/
function initRestMap() {
	const mapTag = document.querySelector('#restmap');
	const coords = mapTag.dataset.coords.split(",");
	const normalIcon = {
		url: '/img/rest/pin.svg',
		scaledSize: new google.maps.Size(25, 31)
	};
	const mapOptions = {
		center: new google.maps.LatLng(coords[0], coords[1]),
		zoom: 14,
		disableDefaultUI: true,
		zoomControl: true,
		zoomControlOptions: {
			position: google.maps.ControlPosition.LEFT_CENTER
		},
		scrollwheel: false,
	};
	const geomap = new google.maps.Map(document.getElementById("restmap"), mapOptions);

	const marker = new google.maps.Marker({
		position: new google.maps.LatLng(coords[0], coords[1]),
		map: geomap,
		icon: normalIcon,
		optimized: false,
		zIndex: 1,
		activeState: false
	});
}
/***********************
 Geo END
 ***********************/


/***********************
rest order BEGIN
***********************/
$(function($){
	const transferInput = $('[name=has-transfer]');
	const transferToggleBlock = $('.transfer-toggle-block');

	transferInput.on('change',function () {
		console.log(transferInput);
		if (transferInput[0].checked === true){
			transferToggleBlock.slideDown();
		} else {
			transferToggleBlock.slideUp();
		}
	})
});
/***********************
rest order END
***********************/