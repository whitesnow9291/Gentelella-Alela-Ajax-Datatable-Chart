$(document).ready(function() {
	
	var now = new Date();
	var start_d;
	var year = now.getFullYear()-1;
	var month = now.getMonth() + 1;
	var day = now.getDate();
	var lineChart = null;
	if ((month - 1) != 0) {
		start_d = year + "-" + (month - 1) + "-" + day;
	} else {
		start_d = (year - 1) + "-12" + "-" + day;
	}

	var end_d = year + "-" + month + "-" + day;
	var user_date = null;
	var chart_labels = null;
	var chart_data_reg = null;
	var chart_data_unreg = null;
	function dateTypeChange(d) {
		var newdate = d.substring(0, 10);
		return newdate;
	}


	//$('.loading_progress').hide();

	var start_datepicker = $('#start_date').daterangepicker({
		singleDatePicker : true,
		singleClasses : "picker_3"
	}, function(start, end, label) {
		console.log(start.toISOString(), end.toISOString(), label);
		start_d = dateTypeChange(start.toISOString());
		getStatisticData(start_d, end_d);
	});
	var end_datepicker = $('#end_date').daterangepicker({
		singleDatePicker : true,
		singleClasses : "picker_3"
	}, function(start, end, label) {
		console.log(start.toISOString(), end.toISOString(), label);
		end_d = dateTypeChange(start.toISOString());
		getStatisticData(start_d, end_d);
	});
	getStatisticData(start_d, end_d);
	function getStatisticData(start_date, end_date) {
		// $('.loading_progress').bind('ajaxStart', function() {
			// $(this).show();
		// }).bind('ajaxComplete', function() {
			// $(this).hide();
		// });
		$.ajax({
			cache : true,
			dataType : 'json',
			success : function(json) {
				$('.overlay').hide();
				console.log(json);
				if (json) {
					chart_labels = json.labels;
					chart_data_reg = json.registered_data;
					chart_data_unreg = json.unregistered_data;
					$('#end_date').val(end_date);
					$('#start_date').val(start_date);
					chartViewUpdate(chart_labels);
				}
			},
			error : function(xhr, status, error) {
				alert('An error occurred: ' + error);
			},
			timeout : 60000, // Timeout of 60 seconds
			type : 'POST',
			data : {
				cmd : 'getStatisticData',
				'start_date' : start_date,
				'end_date' : end_date
			},
			url : 'controller/statistic.php'
		});
		// Close $.ajaxSetup()
	}

	function getUsersForDate(date_param) {
		$("#user_date").val(date_param);
		user_datatable.ajax.reload();
	}

	function chartViewUpdate(chart_labels) {

		Chart.defaults.global.legend = {
			enabled : false
		};
		// Line chart
		var ctx = document.getElementById("lineChart");
		var chart_label_temp;
		chart_label_temp = chart_labels;
		if (lineChart){
			lineChart.destroy();
		}
			
		lineChart = new Chart(ctx, {
			type : 'line',
			data : {
				labels : chart_labels,
				datasets : [{
					label : "Registered users",
					backgroundColor : "rgba(38, 185, 154, 0.31)",
					borderColor : "rgba(38, 185, 154, 0.7)",
					pointBorderColor : "rgba(38, 185, 154, 0.7)",
					pointBackgroundColor : "rgba(38, 185, 154, 0.7)",
					pointHoverBackgroundColor : "#fff",
					pointHoverBorderColor : "rgba(220,220,220,1)",
					pointBorderWidth : 1,
					data : chart_data_reg,

				}, {
					label : "Unregistered users num",
					backgroundColor : "#bdc3c7",
					borderColor : "#465361",
					pointColor : "#465361",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(151,187,205,1)",
					data : chart_data_unreg,

				}],

			},
			options : {
				animation : false,
				onClick : function(mouseEvent, chart) {
					if (chart.length > 0) {

						var chart_label = chart_label_temp[chart[0]._index];
						getUsersForDate(chart_label);
					}

				}
			}
		});
	}

	//database
	var user_datatable = $('#employee-grid').DataTable({
		"processing" : true,
		"serverSide" : true,
		"ajax" : {
			url : "controller/statistic.php", // json datasource
			type : "post", // method  , by default get

			"data" : function(d) {
				d.cmd = "getUsersForDate";
				d.date_param = $("#user_date").val();
				// d.custom = $('#myInput').val();
				// etc
			},
			error : function() {// error handling
				$(".employee-grid-error").html("");
				$("#employee-grid").append('<tbody class="employee-grid-error"><tr><th colspan="7">No data found in the server</th></tr></tbody>');
				$("#employee-grid_processing").css("display", "none");

			},
			// success: function(json){  // error handling
			// console.log(json);
			//
			// }
		}
	});
});
