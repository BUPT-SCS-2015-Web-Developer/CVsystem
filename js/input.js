


 $(function(){ 
	
 	$("input").not("[type=submit]").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
			var record = new Object;
            record.name = $("input#name").val();
			record.gender = $("input#gender").val();
			record.subject = $("input#subject").val();
			record.university = $("input#university").val();
			record.major = $("input#major").val();
			record.college = $("input#college").val();
			record.education = $("input#education").val();
			record.phone = $("input#phone").val();
			record.email = $("input#email").val();
			record.schoolnum = $("input#schoolnum").val();
			record.position = $("input#position").val();
            
            

            $.ajax({
                url: "API/create.php",
				asyn:false,
                type: "POST",
                data: record,
				datatype: 'json',
                cache: false,
                success: function() {
                    $("#subSuc").slideDown(1000);
                    setTimeout("window.location.href = 'new.php'",3000);
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