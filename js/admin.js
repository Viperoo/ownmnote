function ocOwnmnoteUrl(url) {
	var newurl = OC.linkTo("ownmnote",url).replace("apps/ownmnote","index.php/apps/ownmnote");
	return newurl;
}

$(document).ready(function() {
	$('#ownmnote-folder').change(function() {
		var val = $(this).val();
	        $.post(ocOwnmnoteUrl("api/v0.2/ajaxsetval"), { field: 'folder', value: val }, function (data) {
			 console.log('response', data);
        	});
	});
	$('#ownmnote-type').change(function() {
		var val = $(this).val();
		if (val == "") {
			$('#ownmnote-folder').val('');
			$('#shorten-folder-settings').css('display', 'none');
			$.post(ocOwnmnoteUrl("api/v0.2/ajaxsetval"), { field: 'folder', value: '' }, function (data) {
				console.log('response', data);
			});
		} else
			$('#shorten-folder-settings').css('display', 'block');
	});
	$('#ownmnote-disableannouncement').change(function() {
		var da = "";
		var c = $(this).is(':checked');
		if (c)
			da = "checked";
	        $.post(ocOwnmnoteUrl("api/v0.2/ajaxsetval"), { field: 'disableAnnouncement', val: da }, function (data) {
			 console.log('response', data);
        	});
	});
});

