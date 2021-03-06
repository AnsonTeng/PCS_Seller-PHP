(function () {
	// Slide In Panel - by CodyHouse.co
	var panelTriggers = document.getElementsByClassName('js-sea-panel-trigger');
	if (panelTriggers.length > 0) {
		for (var i = 0; i < panelTriggers.length; i++) {
			(function (i) {
				var panelClass = 'js-sea-panel-' + panelTriggers[i].getAttribute('data-panel'),
					panel = document.getElementsByClassName(panelClass)[0];
				// open panel when clicking on trigger btn
				panelTriggers[i].addEventListener('click', function (event) {
					event.preventDefault();
					addClass(panel, 'sea-panel--is-visible');
				});
				//close panel when clicking on 'x' or outside the panel
				// panel.addEventListener('click', function (event) {
				panel.addEventListener('mousedown', function (event) {
					if (hasClass(event.target, 'js-sea-close') || hasClass(event.target, panelClass)) {
						event.preventDefault();
						removeClass(panel, 'sea-panel--is-visible');
					}
				});
			})(i);
		}
	}

	//class manipulations - needed if classList is not supported
	//https://jaketrent.com/post/addremove-classes-raw-javascript/
	function hasClass(el, className) {
		if (el.classList) return el.classList.contains(className);
		else return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
	}

	function addClass(el, className) {
		if (el.classList) el.classList.add(className);
		else if (!hasClass(el, className)) el.className += " " + className;
	}

	function removeClass(el, className) {
		if (el.classList) el.classList.remove(className);
		else if (hasClass(el, className)) {
			var reg = new RegExp('(\\s|^)' + className + '(\\s|$)');
			el.className = el.className.replace(reg, ' ');
		}
	}
})();

//購買人資訊 V
$(".addBtn_buyerInfo").click(function () {
	$(".addBtn_buyerInfo").toggleClass("addBox");
	$(".buyerInfoBox").slideToggle();
});