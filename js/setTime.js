
 $(function(){ 
	
 	$("input").not("[type=submit]").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
			var times = new Object;
            times.time2 = $("input#time2").val();
			times.time3 = $("input#time3").val();
			times.time4 = $("input#time4").val();
            
            

            $.ajax({
                url: "API/getSetTime.php?id=<?php echo $id; ?>",
				asyn:false,
                type: "POST",
                data: times,
				datatype: 'json',
                cache: false,
                success: function() {
                    $("#subSuc").slideDown(1000);
					window.history.go(-1);
                    //setTimeout("window.location.href = '.php'",3000);
                },
                error: function() {
                    $("#subErr").slideDown(1000);
                },
            });
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });
	
	
	
});