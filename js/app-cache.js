$(document).ready(function() {
	//LOADING
	jQuery(window).load(function() {
		$(".main-container").show();
		$("#loader").hide('fadeOut');
		$(".main-container").addClass('page-loaded');
	});
	
	//OFFLINE
	if (navigator.onLine) {
	} else {
		$('#offline-page').toggleClass('activate');
		$('#corpo-app').toggleClass('hidden');
	}
});