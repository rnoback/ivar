//import '../components/Navigation';

export default {
  init() {
    // JavaScript to be fired on all pages
	const eToggle = document.querySelector('.js-hamburger-toggle');
	const eInner = document.querySelector('.js-hamburger-inner');
	const eBanner = document.querySelector('.js-banner');

	if (typeof(eToggle) != 'undefined' && eToggle != null) {

		eToggle.addEventListener('click', function() {
			//console.error('paard ', evt.target.querySelector('.hamburger-inner'));
			eInner.classList.toggle('animate');
			eBanner.classList.toggle('is-visible');
		});
	}

	$('.js-slick-slider').slick({
		//slidesToShow: 3,
		//slidesToScroll: 1,
		//asNavFor: '.slider-for',
		dots: true,
		adaptiveHeight: true,
		//centerMode: true,
		//focusOnSelect: true,
	});



	// if ($('.royalSlider').length){
	// 	$('.royalSlider').css('display','block').royalSlider({
	// 		// options go here
	// 		// as an example, enable keyboard arrows nav
	// 		keyboardNavEnabled: true,
	// 		imageScaleMode: 'fit',
	// 		// controlNavigation: 'none',
	// 		fitInViewport: true,
	// 		arrowsNav: false,
	// 		//imgWidth: 100,
	// 		//imgHeight: 500,
	// 		//autoScaleSlider: false,
	// 		//autoScaleSliderWidth: '100%',
	// 		//autoScaleSliderHeight: 500,
	// 		// imageScalePadding: 0,
	// 		// globalCaption: false,
	// 		loop: true,
	//
	// 	});
	//
	//
	// }
	// console.log('PAaRD', $('.royalSlider'));



  },

  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
