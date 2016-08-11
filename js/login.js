$(document).ready(function($) {
    var $form_login = $('#login');

    //错误提示
    $form_login.find('#submit').on('click', function(event) {
        var ok = 1;
        if ($('#username').val() === '') {
            event.preventDefault();
            $('#username').addClass('has-error');
            $('#erroru').addClass('is-visible');
            ok = 0;
        } else {
            $('#username').removeClass('has-error');
            $('#erroru').removeClass('is-visible');
        }
        if ($('#inputPassword').val() === '') {
            event.preventDefault();
            $('#inputPassword').addClass('has-error');
            $('#errorp').addClass('is-visible');
            ok = 0;
        } else {
            $('#inputPassword').removeClass('has-error');
            $('#errorp').removeClass('is-visible');
        }
        if (!ok) return;
        $.ajax({
            type: 'post',
            url: 'API/reg.php',
            data: {
                user_ID: $('#username').val(),
                user_password: $('#inputPassword').val()
            },
            dataType: 'json',
            success: function(json) {
                if (json.msg) {
                    alert(json.msg);
                }
                if (json.url) {
                    window.location.href = json.url
                };
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert("与服务器交互有误，请联系管理员！");
            }
        });
    });

    //IE9 placeholder fallback
    //credits http://www.hagenburger.net/BLOG/HTML5-Input-Placeholder-Fix-With-jQuery.html
/*    if (!Modernizr.input.placeholder) {
        $('[placeholder]').focus(function() {
            var input = $(this);
            if (input.val() == input.attr('placeholder')) {
                input.val('');
            }
        }).blur(function() {
            var input = $(this);
            if (input.val() == '' || input.val() == input.attr('placeholder')) {
                input.val(input.attr('placeholder'));
            }
        }).blur();
        $('[placeholder]').parents('form').submit(function() {
            $(this).find('[placeholder]').each(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                }
            })
        });
    }*/
});


//credits http://css-tricks.com/snippets/jquery/move-cursor-to-end-of-textarea-or-input/
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
