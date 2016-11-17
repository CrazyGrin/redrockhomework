$(document).ready(function() {
	$("#left_add").click(function() {
		var text = $("#input_num").val();
		if (text == "") {
			return;
		};
		$("#queue").prepend('<div class="demo">' + text + '</div>');
	});
	$("#left_remove").click(function() {
		var remove_div = $("#queue div:first-child").remove();
	});
	$("#right_add").click(function() {
		var text = $("#input_num").val();
		if (text == "") {
			return;
		};
		$("#queue").append('<div class="demo">' + text + '</div>');
	});
	$("#right_remove").click(function() {
		var remove_div = $("#queue div:last-child").remove();
	});
});