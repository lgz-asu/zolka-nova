/*
    Авторизация
 */

$('.login-btn').click(function (e) { //отслуживает нажатия кнопки по классу
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val();

    $.ajax({
        url: 'vendor/signin.php',
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            password: password
        },
        success (data) {

            if (data.status) {
                document.location.href = '/zolka-nova/main.php';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg').removeClass('none').text(data.message);
            }

        }
    });

});

/*
    Получение аватарки с поля
 */

let avatar = false;

$('input[name="avatar"]').change(function (e) {
    avatar = e.target.files[0];
});

/*
    Регистрация
 */

$('.register-btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val(),
        full_name = $('input[name="full_name"]').val(),
        email = $('input[name="email"]').val(),
        password_confirm = $('input[name="password_confirm"]').val();

    let formData = new FormData();
    formData.append('login', login);
    formData.append('password', password);
    formData.append('password_confirm', password_confirm);
    formData.append('full_name', full_name);
    formData.append('email', email);
    formData.append('avatar', avatar);


    $.ajax({
        url: 'vendor/signup.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                document.location.href = '/index.php';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg').removeClass('none').text(data.message);

            }

        }
    });

});

// Таймер обратного отсчета

function submitPrice()
    {
        var $pricesubmitted = document.getElementById("inputvalue");
        document.getElementById("submittedprice").innerText = $pricesubmitted.value;
    }
    function startAuction(){
    		var msgElement = document.getElementById("showMessage"); 
	    	msgElement.innerText = "Count Down Started..";
        var _el = document.getElementById("inputvalue");
        var $startingprice = parseInt(_el.value);
        var $bidcountdown = setInterval(function(){
        		msgElement.innerText = "Count Value "+$startingprice;
            $startingprice--; 
            msgElement.innerText = $startingprice;
            if($startingprice < 0) {
            	msgElement.innerText = "Count Down ends ...";
            	clearInterval($bidcountdown);
             } 
        }, 10000);
    }