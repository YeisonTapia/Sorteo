$( document ).ready(function() {
	$.get('/department', function (data) {
		for (var i = 0; i < data.length; i++) {
			$('#departs').append('<option value="'+data[i].id+'">'+data[i].name+'</option>')
		}
	})
})

$('#departs').on('change', function() {
	var depart = $('#departs').val()
	$.get('/city/'+depart, function (data) {
		$('#cities').empty()
		for (var i = 0; i < data.length; i++) {
			$('#cities').append('<option value="'+data[i].id+'">'+data[i].name+'</option>')
		}
	})
})