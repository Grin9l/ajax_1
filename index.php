<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Технология AJAX</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" rel="script">
        $(document).ready (function(){                     //при загрузке страницы будет выполняться эта функция
           $("#done").bind('click',function(){             //при нажатии на кнопку лоад будет выполняться эта функция
                $.ajax ( {                                 // которая проверяет свободно ли данное имя или логин
                    url:"check.php",                      //НА КАКУЮ СТРАНИЦУ ОТПРАВЛЯЮТСЯ ДАННЫЕ
                    type:"POST",                          //КАКИМ МЕТОДОМ ПЕРЕДОВАТЬ
                    data: ({name:$("#name").val()}),      // ЗДЕСЬ МОЖЕМ ПЕРЕДАВАТЬ ПЕРЕМЕННЫЕ
                    dataType: "html",                     //можно выбирать тип текста html или просто text
                    beforeSend: function(){                 //выполняется пока грузится документ
                        $("#info").text ("Ожидание данных...");
                    },
                    success:function(data) {                 //выполняется при успешном завершении
                        if(data == 'fail'){
                            alert('Имя Занято');
                        } else{
                            $("#info").text (data);
                        }
                    }
                });
            });
        } );

    </script>
</head>
<body class="container">
    <p id="load">Загрузка данных</p>
    <div id="info"></div>
    <form action="" id="form1" >
        <input type="text" id="name" placeholder="Введите имя">
        <input type="button" id="done" value="Готово">
    </form>

</body>
</html>
