$(document).ready(function () {
	$('#sidebarCollapseStudent').on('click', function () {
	$('#sidebarOrganization').hide();
	$('#sidebarStudent').show();
	$('#sidebarStudent').toggleClass('active');
	// $('#sidebarCollapse').hide();
	});
	$('#sidebarCollapseOrganization').on('click', function () {
	$('#sidebarStudent').hide();
	$('#sidebarOrganization').show();
	$('#sidebarOrganization').toggleClass('active');
	});
});