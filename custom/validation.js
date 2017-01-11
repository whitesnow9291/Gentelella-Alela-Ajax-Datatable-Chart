$(document).ready(function() {
	// initialize the validator function
	$('.loading_progress').hide();
	$('#update_validation').click(function() {
		saveValidationData();
	});
	$('#delete_validation').click(function() {
		deleteValidationData();
	});
	$('#approve_validation').click(function() {
		approveOrDisapproveValidationData('approve');
	});
	$('#disapprove_validation').click(function() {
		approveOrDisapproveValidationData('disapprove');
	});
	function deleteValidationData() {
		var id = $("#id").val();
		$('.loading_progress').bind('ajaxStart', function() {
			$(this).show();
		}).bind('ajaxComplete', function() {
			$(this).hide();
		});
		if (confirm("Are you sure to delete?")) {
			$.ajax({
				cache : true,
				dataType : 'json',
				success : function(data) {
					if (data) {
						new PNotify({
							title : "Success",
							text : 'Successfully deleted.',
							type : 'success',
							hide : true,
							styling : 'bootstrap3'
						});
						getValidationData(0, $('#search_validation').val());
					}
				},
				error : function(xhr, status, error) {
					alert('An error occurred: ' + error);
				},
				timeout : 60000, // Timeout of 60 seconds
				type : 'POST',
				data : {
					cmd : 'deleteValidationData',
					'id' : id
				},
				url : 'controller/validations.php'
			});
			// Close $.ajaxSetup()
		}

	}

	function approveOrDisapproveValidationData(param) {
		var id = $("#id").val();
		$('.loading_progress').bind('ajaxStart', function() {
			$(this).show();
		}).bind('ajaxComplete', function() {
			$(this).hide();
		});
		$.ajax({
			cache : true,
			dataType : 'json',
			success : function(data) {
				if (data) {
					new PNotify({
						title : param + " Success",
						text : 'Successfully updated.',
						type : 'success',
						hide : true,
						styling : 'bootstrap3'
					});
				}

			},
			error : function(xhr, status, error) {
				alert('An error occurred: ' + error);
			},
			timeout : 60000, // Timeout of 60 seconds
			type : 'POST',
			data : {
				cmd : 'setApprove',
				'param' : param,
				'id' : id
			},
			url : 'controller/validations.php'
		});
		// Close $.ajaxSetup()
	}


	$('#search_validation_bt').click(function() {
		getValidationData(0, $('#search_validation').val());
	});
	getValidationData();
	function getValidationData(validation_id, search_term) {
		$('.loading_progress').bind('ajaxStart', function() {
			$(this).show();
		}).bind('ajaxComplete', function() {
			$(this).hide();
		});
		$.ajax({
			cache : true,
			dataType : 'json',
			success : function(data) {
				updateValidationInfoView(data);
			},
			error : function(xhr, status, error) {
				alert('An error occurred: ' + error);
			},
			timeout : 60000, // Timeout of 60 seconds
			type : 'POST',
			data : {
				cmd : 'getValidationData',
				'validation_id' : validation_id,
				'search_term_v' : search_term
			},
			url : 'controller/validations.php'
		});
		// Close $.ajaxSetup()
	}


	$('#nextbtn').click(function() {
		getValidationData($(this).attr('next_id'));
	});
	$('#prevbtn').click(function() {
		getValidationData($(this).attr('prev_id'));
	});
	function updateValidationInfoView(data) {
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
				$(".validation_content").hide();
			} else {
				$(".validation_content").show();
				var validation = data.data;

				$("#id_title").val(validation.id);
				$("#id").val(validation.id);
				$("#url").val(validation.url);
				$("#emailcontact").val(validation.emailcontact);
				$("#notes").val(validation.notes);
				$("#title").val(validation.title);
				$("#start_date").val(validation.start_date);
				$("#end_date").val(validation.end_date);
				$("#prize_value").val(validation.prize_value);
				$("#sponsor").val(validation.sponsor);
				$("#sponsor_website").val(validation.sponsor_website);
				$("#description").val(validation.description);
				$("#countries").val(validation.countries);
				$("#states").val(validation.states);
				$("#ages").val(validation.ages);
				$("#excluding").val(validation.excluding);
				$("#frequency").val(validation.frequency);
				$("#frequency_period").val(validation.frequency_period);
				$("#frequency_options").val(validation.frequency_options);
				$("#types").val(validation.types);
				$("#category").val(validation.category);
				$("#prizes").val(validation.prizes);
				$("#keywords").val(validation.keywords);
				$("#entry_link").val(validation.entry_link);
				$("#rules_link").val(validation.rules_link);
				$("#winners_link").val(validation.winners_link);
				$("#image_img").attr('src', window.location + "/" + validation.image);
				$("#sponsor_logo_img").attr('src', window.location + "/" + validation.sponsor_logo);
			}
		}

	}

	function saveValidationData() {
		var form_data = new FormData($("#validation_form")[0]);
		form_data.append('cmd', 'saveValidationData');
		$('.loading_progress').bind('ajaxStart', function() {
			$(this).show();
		}).bind('ajaxComplete', function() {
			$(this).hide();
		});
		$.ajax({
			url : 'controller/validations.php',
			type : 'POST',
			data : form_data,
			async : false,
			success : function(data) {
				if (data) {
					new PNotify({
						title : 'Validation update Success',
						text : 'Successfully updated.',
						type : 'success',
						hide : true,
						styling : 'bootstrap3'
					});
				} else {
					new PNotify({
						title : 'Validation update error',
						text : 'Woop,error occured.',
						type : 'error',
						hide : true,
						styling : 'bootstrap3'
					});
				}

			},
			cache : false,
			contentType : false,
			processData : false
		});
	}


	$("#image").change(function() {
		readURL("image_img", this);
	});
	$("#sponsor_logo").change(function() {
		readURL("sponsor_logo_img", this);
	});
	function readURL(img_id, input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$("#" + img_id).attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

});
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