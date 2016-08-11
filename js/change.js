

$(document).ready(function($){
    var $form_change = $('#change');
    $form_change.find('#submit').on('click', function(event) {
        var ok = 1;
        if ($('#oldpass').val() === '') {
            event.preventDefault();
            $('#oldpass').addClass('has-error');
            $('#erroru').addClass('is-visible');
            ok = 0;
        } else {
            $('#oldpass').removeClass('has-error');
            $('#erroru').removeClass('is-visible');
        }
        if ($('#newpass').val() === '') {
            event.preventDefault();
            $('#newpass').addClass('has-error');
            $('#errorp').addClass('is-visible');
            ok = 0;
        } else {
            $('#newpass').removeClass('has-error');
            $('#errorp').removeClass('is-visible');
        }
        if ($('#queren').val() === '') {
            event.preventDefault();
            $('#queren').addClass('has-error');
            $('#errorp').addClass('is-visible');
            ok = 0;
        } else {
            $('#queren').removeClass('has-error');
            $('#errorp').removeClass('is-visible');
        }
        if (!ok) return;
            $.ajax({
                type: 'post',
                url: 'API/getChange.php',
                data: {
                        oldpass:$('#oldpass').val(),
                        newpass:$('#newpass').val(),
                        queren:$('#queren').val()
                },
				dataType: 'json',
                success: function(json) {
                    if(json.status=="success")
                    {
                        if(json.msg)
                        {
                            alert(json.msg);
                            window.location.href='login.php';
                        }
                    }
                    else {
                        if(json.msg)
                        {
                            alert(json.msg);
                        }
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert("连接数据库失败，请联系管理员！");
                },
            });
        }
    );



});// JavaScript Document
