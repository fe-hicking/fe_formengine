export default (function() {
	let formElements = document.querySelectorAll('[data-formengine-input-name]');

	for (let i = 0; i < formElements.length; i++) {
		let currentAttribute = formElements[i].getAttribute('data-formengine-input-name');

		// Match on all attributes named "[title]". Could be restricted also like "\[tt_content\].+\[title\]" to only
		// apply to tt_content. Could use any custom table.
		if (currentAttribute.match(/\[title\]/)) {
			formElements[i].addEventListener('blur', function(e) {
				alert('Blurred field. Validating!');
			});
		}
	}

	return true;
})();
