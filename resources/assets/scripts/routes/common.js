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
  },

  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
