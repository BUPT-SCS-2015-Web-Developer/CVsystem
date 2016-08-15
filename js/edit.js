
jQuery(document).ready(function($) {
    var $form_login = $('#edit');

    //错误提示
    $form_login.find('#submit').on('click', function(event) {
			var record = new Object;
            record.id= $("input#id").val();
            record.name = $("input#name").val();
			record.gender = $("input#gender").val();
			record.subject = $("input#subject").val();
			record.university = $("input#university").val();
			record.major1 = $("input#major1").val();
			record.college = $("input#college").val();
            record.major2 = $("input#major2").val();
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
                type: "post",
                url: "API/getEdit.php",
                data: record,
				dataType: 'json',
                success: function(json) {
                    if(json.msg){
                        alert(json.msg);
                        window.location.href = "getDetail.php?id="+$("input#id").val();
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert("连接数据库失败，请联系管理员！");
                }
            });
        });
});

jQuery.fn.putCursorAtEnd = function() {
    return this.each(function() {
        // If this function exists...
        if (this.setSelectionRange) {
            // ... then use it (Doesn't work in IE)
            // Double the length because Opera is inconsistent about whether a carriage return is one character or two. Sigh.
            var len = $(this).val().length * 2;
            this.setSelectionRange(len, len);
        } else {
            // ... otherwise replace the contents with itself
            // (Doesn't work in Google Chrome)
            $(this).val($(this).val());
        }
    });
};
