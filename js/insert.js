
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


/*            $.ajax({
                type: 'post',
                url: "API/getInsert.php",
                data: {
                    username: $('#username').val(),
                    inputPassword: $('#inputPassword').val()
                },
                dataType: 'json',
                success: function(json) {
                    if (json.msg) {
                        document.getElementById("login-info").innerHTML = json.msg;
                        $('#login-info').addClass('is-visible');
                    }
                    if (json.url) { window.location.href = json.url };
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    $('#login-info').addClass('is-visible');
                }
            });*/

            $.ajax({
                url: "API/getInsert.php",
                type: "post",
                data: record,
				datatype: 'json',
                cache: false,
                success: function(json) {
                    if (json.msg) {
                        $('#login-info').innerHTML = json.msg;
                    }
                    if (json.url) { window.location.href = json.url };
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    $('#login-info').innerHTML = json.msg;
                }
            });
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });



});
