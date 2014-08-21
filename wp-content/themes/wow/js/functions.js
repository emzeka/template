function ajax() { //Ajax отправка формы
    var msg = $("#form").serialize();
    $.ajax({
        type: "POST",
        url: "../send.php",
        data: msg,
        success: function(data) {
            $("#results").html(data);
        },
        error:  function(xhr, str){
            alert("Возникла ошибка!");
        }
    });
}

jQuery.fn.notExists = function() { //Проверка на существование элемента
    return $(this).length == 0;
}

$(document).ready(function(){ //Валидация формы
    $(".send").validation(
        $(".validate").validate({
            test: "blank letters",
            invalid: function(){
                $(this).css('background-color', '#ffcdc3');
            },
            valid: function(){
                $(this).css('background-color', '#fff');
            }
        }),
        $(".phone").validate({
            test: "blank",
            invalid: function(){
                $(this).css('background-color', '#ffcdc3');
            },
            valid: function(){
                $(this).css('background-color', '#fff');
            }
        }),
        $(".email").validate({
            test: "blank email",
            invalid: function(){
                $(this).css('background-color', '#ffcdc3');
            },
            valid: function(){
                $(this).css('background-color', '#fff');
            }
        })
    );
});