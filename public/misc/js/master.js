/** master js file **/

$(document).ready(function() {
	console.log(navigator);


	var WIMS = {
		windowWidth: null,
		windowHeight: null,

		// init
		init: function() {
			// current viewport
			this.updateCurrentViewport();
			$(window).resize(function() {
				WIMS.updateCurrentViewport();
			});

			// screen resolution
			this.setDataToBox('ib_screen-resolution', screen.width + 'x' + screen.height);

			// available windowsize
			this.setDataToBox('ib_available-windowsize', screen.availWidth + 'x' + screen.availHeight);

			// color depth
			this.setDataToBox('ib_color-depth', screen.colorDepth + ' bit');

			// cookies enabled
			var cookieIcon = (navigator.cookieEnabled) ? this.renderGlyphIcon('ok') : this.renderGlyphIcon('remove');
			this.setDataToBox('ib_cookies-enabled', cookieIcon);

			// operating system
			this.setDataToBox('ib_operating-system', navigator.oscpu);

			// get external ip address
			this.updateBoxViaAjax('getExternalIp', 'ib_external-ip');
		},

		// update current viewport
		updateCurrentViewport: function() {
			this.windowWidth = $(window).width();
			this.windowHeight = $(window).height();
			this.setDataToBox('ib_current-viewport', this.windowWidth + 'x' + this.windowHeight);
		},

		// render glyph-icon
		renderGlyphIcon: function(icon) {
			return '<span class="wims-icon glyphicon glyphicon-' + icon + '" aria-hidden="true"></span>';
		},

		// set data to infoboxes
		setDataToBox: function(boxId, contentString) {
			$('#' + boxId + ' .infotext .inner').html(contentString);
		},

		// update box via ajax
		updateBoxViaAjax: function(action, boxId) {
			$.ajax({
				url: "ajax.php",
				data: {
					act: action
				}
			}).done(function(data) {
				WIMS.setDataToBox(boxId, data);
			});
		}
	};

	WIMS.init();
});