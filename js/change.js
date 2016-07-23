


 $(function(){ 
	
 	$("input").not("[type=submit]").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
			var pass = new Object;
            pass.oldpass = $("input#oldpass").val();
			pass.newpass = $("input#newpass").val();
			pass.queren = $("input#queren").val();
           
            $.ajax({
                url: "API/changePass.php",
				asyn:false,
                type: "POST",
                data: pass,
				datatype: 'json',
                cache: false,
                success: function() {
                    $("#subSuc").slideDown(1000);
                    setTimeout("window.location.href = 'index.php'",3000);
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
	
	
	
});// JavaScript Document