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


	if ($('.royalSlider').length){
		$('.royalSlider').css('display','block').royalSlider({
			// options go here
			// as an example, enable keyboard arrows nav
			keyboardNavEnabled: true,
			imageScaleMode: 'fit',
			fitInViewport: true,
			arrowsNav: true,
			//imgWidth: 1024,
			//imgHeight: 550,
			//autoScaleSlider: true,
			autoScaleSliderWidth: 1024,
			autoScaleSliderHeight: 687,
			imageScalePadding: 0,
			globalCaption: false,
			loop: true,
		});
	}



  },

  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
