
jQuery(document).ready(function($) {
    var $form_login = $('#settime');

    //错误提示
    $form_login.find('#submit').on('click', function(event) {
			var record = new Object;
            record.id = $("input#id").val();
			record.time1 = $("input#time1").val();
			record.time2 = $("input#time2").val();
			record.time3 = $("input#time3").val();
			record.time4 = $("input#time4").val();

            $.ajax({
                type: "post",
                url: "API/getSetTime.php",
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
