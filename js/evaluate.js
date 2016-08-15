$(document).ready(function($) {
    var $form_login = $('#evaluate');

    //错误提示
    $form_login.find('#submit').on('click', function(event) {
			var times = new Object;
            times.id = $("#id").val();
            times.result1 = $("#result1").val();
            times.remark1 = $("#remark1").val();
			times.result2 = $("#result2").val();
            times.remark2 = $("#remark2").val();
			times.result3 = $("#result3").val();
            times.remark3 = $("#remark3").val();
			times.result4 = $("#result4").val();
            times.remark4 = $("#remark4").val();

            $.ajax({
                type: "post",
                url: "API/getEvaluate.php",
                data: times,
                dataType: 'json',
                success: function(json) {
                    if(json.msg){
                        alert(json.msg);
                        window.location.href = "getDetail.php?id="+$("#id").val();
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
