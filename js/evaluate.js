
 $(function(){ 
	
 	$("input").not("[type=submit]").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
			var times = new Object;
            times.result1 = $("input#result1").val();
			times.remark2 = $("input#remark2").val();
			times.result2 = $("input#result2").val();
			times.remark3 = $("input#remark3").val();
			times.result3 = $("input#result3").val();
			times.result4 = $("input#result4").val();
            
            

            $.ajax({
                url: "API/getEvaluate.php?id=<?php echo $id; ?>",
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