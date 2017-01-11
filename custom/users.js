$(document).ready(function() {
	// initialize the validator function
	validator.message.date = 'not a real date';
	// validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
	$('form').on('blur', 'input[required], input.optional, select.required', validator.checkField).on('change', 'select.required', validator.checkField).on('keypress', 'input[required][pattern]', validator.keypress);

	$('.multi.required').on('keyup blur', 'input', function() {
		validator.checkField.apply($(this).siblings().last()[0]);
	});

	$('#birthday').daterangepicker({
		singleDatePicker : true,
		calender_style : "picker_4"
	}, function(start, end, label) {
		console.log(start.toISOString(), end.toISOString(), label);
	});
	$('.loading_progress').hide();
	$('#update_user').click(function() {
		saveUserData();
	});
	$('#search_user_bt').click(function() {
		getUserData(0, $('#search_user').val());
	});
	getUserData();
	function getUserData(user_id, search_term) {
		$('.loading_progress').bind('ajaxStart', function() {
			$(this).show();
		}).bind('ajaxComplete', function() {
			$(this).hide();
		});
		$.ajax({
			cache : true,
			dataType : 'json',
			success : function(data) {
				updateUserInfoView(data);
			},
			error : function(xhr, status, error) {
				alert('An error occurred: ' + error);
			},
			timeout : 60000, // Timeout of 60 seconds
			type : 'POST',
			data : {
				cmd : 'getUserData',
				'user_id' : user_id,
				'search_term' : search_term
			},
			url : 'controller/users.php'
		});
		// Close $.ajaxSetup()
	}


	$('#nextbtn').click(function() {
		getUserData($(this).attr('next_id'));
	});
	$('#prevbtn').click(function() {
		getUserData($(this).attr('prev_id'));
	});
	function updateUserInfoView(data) {
		if (data) {
			if (data.prev == null) {
				$("#prevbtn").hide();
				$("#prevbtn").attr('prev_id', 0);
			} else {
				$("#prevbtn").show();
				$("#prevbtn").attr('prev_id', data.prev);
			}
			if (data.next == null) {
				$("#nextbtn").hide();
				$("#nextbtn").attr('next_id', 0);
			} else {
				$("#nextbtn").show();
				$("#nextbtn").attr('next_id', data.next);
			}
			if (data.data == null) {
				$(".user_content").hide();
			} else {
				$(".user_content").show();
				var user = data.data;
				if (user.gender == 'male') {
					$("#genderM").parent().addClass('checked');
					$("#genderF").parent().removeClass('checked');
					$("#genderM").prop('checked', 'true');
					$("#genderF").prop('checked', 'false');

				} else {
					$("#genderM").parent().removeClass('checked');
					$("#genderF").parent().addClass('checked');
					$("#genderM").prop('checked', 'false');
					$("#genderF").prop('checked', 'true');
				}
				$("#user_id_title").text(user.id);
				$("#user_id_field").val(user.id);
				$("#full_name").val(user.fullname);
				$("#email").val(user.email_address);
				$("#birthday").val(user.birthday);
				$("#telephone").val(user.phone);
				$("#address").val(user.street_address);
				$("#city").val(user.city);
				$("#provincestate").val(user.state);
				$("#postalzipcode").val(user.zip);
				$("#country").val(user.country);
				$("#current_password").val(user.password);
				$("#password").val('');
				$("#password2").val('');
			}
		}

	}

	function saveUserData() {
		if ($("#password").val() != '' && $("#password").val() != $("#password2").val()) {
			alert("Password don't match!");
			return;
		}
		var data = $("#user_form").serializeObject();
		var dateAr = data.birthday.split('/');
		var newDate = dateAr[2] + '-' + dateAr[0] + '-' + dateAr[1];
		data.birthday = newDate;
		$('.loading_progress').bind('ajaxStart', function() {
			$(this).show();
		}).bind('ajaxComplete', function() {
			$(this).hide();
		});
		$.ajax({
			cache : true,
			dataType : 'json',
			success : function(json) {
				new PNotify({
					title : 'User update Success',
					text : 'Successfully updated.',
					type : 'success',
					hide : true,
					styling : 'bootstrap3'
				});
			},
			error : function(xhr, status, error) {
				alert('An error occurred: ' + error);
			},
			timeout : 60000, // Timeout of 60 seconds
			type : 'POST',
			data : {
				cmd : 'saveUserData',
				'data' : data
			},
			url : 'controller/users.php'
		});
		// Close $.ajaxSetup()
	}

})
$.fn.serializeObject = function() {
	var o = {};
	var a = this.serializeArray();
	$.each(a, function() {
		if (o[this.name] !== undefined) {
			if (!o[this.name].push) {
				o[this.name] = [o[this.name]];
			}
			o[this.name].push(this.value || '');
		} else {
			o[this.name] = this.value || '';
		}
	});
	return o;
}; 