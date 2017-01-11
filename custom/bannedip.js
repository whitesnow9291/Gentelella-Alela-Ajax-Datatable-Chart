$(document).ready(function () {
    $('.loading_progress').hide();
    $('#save_htaccess_tf').click(function(){
        saveHtaccessData();
    });
    getHtaccessData();
    function getHtaccessData() {
        $('.loading_progress')
            .bind('ajaxStart', function() {
                $(this).show();
            })
            .bind('ajaxComplete', function() {
                $(this).hide();
            });
        $.ajax({
            cache: true,
            dataType: 'json',
            success: function(json) {
            	if (json){
            		$("#htaccess_tf").text(json);
            	}
                
            },
            error: function(xhr, status, error) {
                alert('An error occurred: ' + error);
            },
            timeout: 60000, // Timeout of 60 seconds
            type: 'POST',
            data: { cmd : 'getHtaccessData' },
            url: 'controller/bannedip.php'
        }); // Close $.ajaxSetup()
    }
    function saveHtaccessData() {
        var data = $("#htaccess_tf").val();
        $('.loading_progress')
            .bind('ajaxStart', function() {
                $(this).show();
            })
            .bind('ajaxComplete', function() {
                $(this).hide();
            });
        $.ajax({
            cache: true,
            dataType: 'json',
            success: function(json) {
            	if (json){
            		new PNotify({
                    title: 'BannedIP Success',
                    text: 'Successfully saved.',
                    type: 'success',
                    hide: true,
                    styling: 'bootstrap3'
                });
            	}
                
            },
            error: function(xhr, status, error) {
                alert('An error occurred: ' + error);
            },
            timeout: 60000, // Timeout of 60 seconds
            type: 'POST',
            data: { cmd : 'saveHtaccessData','data' : data },
            url: 'controller/bannedip.php'
        }); // Close $.ajaxSetup()
    }

})
