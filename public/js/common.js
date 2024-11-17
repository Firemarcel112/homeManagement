var common = {

	setLocalStorage: function (key, value) {
		if (typeof Storage !== 'undefined') {
			localStorage.setItem(key, value);
		}
	},
	getLocalStorage: function (key, default_key) {
		if (typeof Storage !== 'undefined') {
			return localStorage.getItem(key) ?? default_key;
		}
		else {
			return default_key
		}
	},
	lightNightSwitch: function (trigger = false) {
		var body = $('body');
		body.attr('data-bs-theme', common.getLocalStorage('theme', app_global.theme));
		var current_theme = common.getLocalStorage('theme', app_global.theme);
		console.log(current_theme);
		if (trigger) {
			if (current_theme == 'dark') {
				current_theme = 'light';
			}
			else {
				current_theme = 'dark';
			}
		}
		body.attr('data-bs-theme', current_theme == 'dark' ? 'dark' : 'light');
		common.setLocalStorage('theme', current_theme == 'dark' ? 'dark' : 'light');
	}
};


$(document).ready(function () {

	common.lightNightSwitch();
	$(".app-js-switch-theme").on('click', function () {
		console.log('click');
		common.lightNightSwitch(true)
	})


	const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
	const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
});
