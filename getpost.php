<?php
// print_r($_GET);



// print_r($_POST);
// $password_1=$_POST['password'];
// $hash_password=md5($password_1);
// echo $hash_password;





// $login=$_POST['login'];
// $password=$_POST['password'];
// if($login==='admin' && $password==="123"){
//     echo 'Получен доступ к секретной странице';
// }
// else{
//     echo 'Неверный логин и пароль';
// }

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Задание 1.1 </h3>
    <form method="GET">
        <input type="text" name="text">
        <br>
        <textarea name="texter"></textarea>
        <br>
        <input type="checkbox" name="check" id="one" value="я звезда(Азалия)">
        <label for="one">я звезда(Азалия)</label>
        <br>
        <input type="checkbox" name="check" id="two" value="я тоже(Вика)">
        <label for="two">я тоже(Вика)</label>
        <br>
        <input type="checkbox" name="check" id="three"value="а я солнышко(Лера)">
        <label for="three">а я солнышко(Лера)</label>
        <br>
        <input type="radio" name="radio" id="one_r" value="ипхон">
        <label for="one_r">ипхон</label>
        <br>
        <input type="radio" name="radio" id="two_r" value="ипхон 6 plus">
        <label for="two_r">ипхон 6 plus</label>
        <br>
        <input type="radio" name="radio" id="three_r" value="ипхон 11 mini">
        <label for="three_r">ипхон 11 mini</label>
        <br>
        <input type="submit">
    </form> 
    <br><br><br>




    <h3>Задание 1.2 </h3>
    <form method="post">
        <input type="login" name="login" placeholder="логин">
        <br>
        <input type="password" name="password" placeholder="пароль" id='password'>
        <br>
        <input type="submit">
    </form>
    <br><br><br>




    <h3>Задание 1.3 </h3>
    <form method="post">
        <input type="login" name="login" placeholder="логин">
        <br>
        <input type="password" name="password" placeholder="пароль" id='password'>
        <br>
        <input type="submit">
    </form>
    <br><br><br>


    <h3>задание 1.4</h3>
    <form method='get'>
    <input type="text" name="year" id="year" required placeholder='год'>
    <br>
    <input type="text" name="month" id="month" required placeholder='месяц'>
    <br>
    <input type="text" name="day" id="day" required placeholder='день'>
    <br>
    <input type="submit" value="Отправить" onclick='window.weekday.showModal()'>
    <dialog id='weekday'>
        <input type='text' name='week' id='week' required placeholder='введите день недели в который вы родились'>
    </dialog>
    <br>
    
    </form>
    <?php
    $year = $_GET['year'];
    $month = $_GET['month'];
    $day = $_GET['day'];
    $week=$_GET['week'];
    print_r($_GET);
    ?>
    <br><br><br>


    <h3>задание 1.5</h3>
    <form method="GET">
    <select name="l" id="l">
  <option value="1" name='1'>Лаба1</option>
  <option value="2" name='2'>Лаба2</option>
  <option value="3" name='3'>Лаба3</option>
  <option value="4" name='4'>Лаба4</option>
</select>
<input type="submit" value="Сгенерировать">
<br>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['l'])) {
            $l = $_GET['l'];
            $url = 'mdk9.php?l=' . urlencode($l);
            echo '<a href="' . $url . '">' . $url . '</a>';
        }
    }
    ?>  
    </form>

    
    

    
<br><br><br>


<!-- <h3>задание 2.1</h3>
    <form method="POST" action="">
        <label>Год:</label>
        <input type="text" name="year" value="">
        <br>
        <label>Месяц:</label>
        <input type="text" name="month" value="">
        <br>
        <label>День:</label>
        <input type="text" name="day" value="">
        <br>
        <input type="submit" value="Отправить">
    </form>
    <?php
        // $currentDate = date('Y-m-d');
        // list($currentYear, $currentMonth, $currentDay) = explode('-', $currentDate);
        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //     $yearOne = $_POST['year'];
        //     $monthOne = $_POST['month'];
        //     $dayOne = $_POST['day'];
        //     $dateEntered = new DateTime("$yearOne-$monthOne-$dayOne");
        //     $newYear = new DateTime("$yearOne-12-31");
        //     $interval = $dateEntered->diff($newYear);
        //     echo "Количество дней от введенной даты ".$dateEntered->format('d.m.Y'). " до Нового года: ". $interval->days. " дней";
        // }
    ?> -->

    <h3>задание 2.2</h3>
    <form action="" method="POST">
        <label for="name">Введите ваше имя:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="checkbox">Отметьте флажок, если хотите быть приветствованы:</label>
        <input type="checkbox" name="checkbox" id="checkbox">
        <br>
        <input type="submit" value="Отправить">
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(isset($_POST['checkbox'])) {
          
            echo "Привет, ".$_POST['name']."!";
            } else {
            
            echo "Пока, ".$_POST['name']."!";
            }
        }
        ?>


<br><br><br>
    <h3>задание 2.3</h3>
    <form method="POST">
        <label>Ты уже взрослый, малыш?</label>
        <input type="checkbox" name="age" />

        <input type="submit" value="Подтвердить" />
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["age"])) {
                echo '<b>'."Добро пожаловать на наш сайт, пупсик)". '</b>';
            } else {
                echo '<b>'."Извините, доступ к сайту малышам нельзя".'</b>';
            }
        }
    ?>


<br><br><br>
    <h3>задание 2.4</h3>
    <form method="post" action='index_2.php'>
        <label for="language">Выберите язык:</label>
        <select name="language" id="language">
            <option value="ru" <?php if (isset($_REQUEST['language']) && $_REQUEST['language'] == 'ru') echo 'selected'; ?>>Русский</option>
            <option value="en" <?php if (isset($_REQUEST['language']) && $_REQUEST['language'] == 'en') echo 'selected'; ?>>English</option>
        </select>
        <input type="submit" value="Отправить">
    </form>




<br><br><br>
    <h3>задание 2.5</h3>
    <form method='get'>
    <input type="text" name="index" id="index" required placeholder='напишите цифру от 0 до 4'>
    <br>
    <input type="submit" value="Отправить">
    <?php
        $index = $_GET['index'];
        $array = ['a', 'b', 'c', 'd', 'e'];
        foreach ($array as $key => $value) {
            if ($key == $index) {
                echo '<br>';
                echo $value;
                break; 
            }
        }
    ?>
   
   </form>



   <form method="POST" action="">
    <h3>Задание 3.1</h3>
        <label for="login">Логин:</label> <br>
        <input type="text" name="login" id="login">
        <br>
        <label for="comment">Комментарий:</label> <br>
        <textarea name="comment" id="comment"></textarea> <br>
        <br>
        <button type="submit">Отправить</button>
      <?php
    $login = $_POST['login'];
    $comment = $_POST['comment'];

    $subject = 'Логин и комментарий';
    $message = "Логин: $login\nКомментарий: $comment";

    $to = "example@example.com";

    $headers = "From: yourzvesda@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Письмо успешно отправлено.";
    } else {
        echo "Ошибка при отправке письма.";
    }
    ?> 
    </form>

    <form method="POST" action="">
    <h3>Задание 3.2</h3>
        <label for="username">Имя пользователя:</label><br>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Пароль:</label><br>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" value="Войти">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_REQUEST['username'];
        $password = md5($_REQUEST['password']);

        
        // if ($en === md5('секретныйпароль')) {
        //     echo 'Авторизация успешна!';
        // } else {
        //     echo 'Неверные данные пользователя!';
        // }
        echo '<br>'."Имя пользователя: " . $username . "<br>";
        echo "Зашифрованный пароль: " . $password . "<br>";
        }
    ?>
    </form> 
    <h2> Анкета </h2>
    <form action="" method="post">
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required><br><br>

  <label for="question1"> 1. Вы любите мороженое?</label>
  <input type="radio" name="1" value="да" checked>Да
  <input type="radio" name="1" value="нет">Нет<br>

  <label for="question2"> 2. Вы любите готовить?</label>
  <input type="radio" name="2" value="да" checked>Да
  <input type="radio" name="2" name="question2" value="нет">Нет<br>

  <label for="question3"> 3. У вас есть психические растройства?</label>
  <input type="radio" name="3" value="да" checked>Да
  <input type="radio" name="3" name="question3" value="нет">Нет<br>

  <label for="question3"> 4. пользуетесь социальными сетями?</label>
  <input type="radio" name="4" value="да" checked> Да
  <input type="radio" name="4" name="question3" value="нет">Нет<br>

  <label for="question3"> 5. Любите читать книги?</label>
  <input type="radio" name="5" value="да" checked> Да
  <input type="radio" name="5" value="нет">Нет<br>

  <label for="question3"> 6. Вы агрессивны?</label>
  <input type="radio" name="6" value="да" checked> Да
  <input type="radio" name="6" value="нет">Нет<br>

  <label for="question3"> 7. Любите путешествовать?</label>
  <input type="radio" name="7" value="да" checked> Да
  <input type="radio" name="7" value="нет">Нет<br>

  <label for="question3"> 8. Вы общительны и легко заводите новых знакомых?</label>
  <input type="radio" name="8" value="да" checked> Да
  <input type="radio" name="8" name="question3" value="нет">Нет<br>
    
  <label for="question3"> 9. Есть ли у вас миллионы?</label>
  <input type="radio" name="9" value="да" checked> Да
  <input type="radio" name="9" value="нет">Нет<br>

  <label for="question3"> 10. Оплатишь мне корзину на вб?</label>
  <input type="radio" name="10" value="да" checked> Да
  <input type="radio" name="10" value="нет">Нет<br>

  <label for="question3"> 11. Вы пьете ежедневно?</label>
  <input type="radio" name="11" value="да" checked> Да
  <input type="radio" name="11" value="нет">Нет<br>

  <label for="question3"> 12. Играете в доту?</label>
  <input type="radio" name="12" value="да" checked> Да
  <input type="radio" name="12" value="нет">Нет<br>

  <label for="question3"> 13. Вы?</label>
  <input type="radio" name="13" value="да" checked> Да
  <input type="radio" name="13" name="question3" value="нет">Нет<br>

  <label for="question3"> 14. Выбьешь зуб подруге за 1000000$?</label>
  <input type="radio" name="14" value="да" checked> Да
  <input type="radio" name="14" value="нет">Нет<br>

  <label for="question3"> 15. Работаете? </label>
  <input type="radio" name="15" value="да" checked> Да
  <input type="radio" name="15" value="нет">Нет<br>

  <label for="question3"> 16. Часто ли вы ходите в рестораны? </label>
  <input type="radio" name="16" value="да" checked> Да
  <input type="radio" name="16" value="нет">Нет<br>

  <label for="question3"> 17. Спрыгните ли вы с крыши если прыгнет ваш друг? </label>
  <input type="radio" name="17" value="да" checked> Да
  <input type="radio" name="17" value="нет">Нет<br>

  <label for="question3"> 18. Часто ли вы посещаете кино или театр? </label>
  <input type="radio" name="18" value="да" checked> Да
  <input type="radio" name="18" value="нет">Нет<br>

  <label for="question3"> 19.  Do you speak English? </label>
  <input type="radio" name="19" value="да" checked> Да
  <input type="radio" name="19" value="нет">Нет<br>
   <br>
  <button type="submit">Отправить</button>

  <?php
     $answers = array(
        1 => "да", 2 => "да", 3 => "да", 4 => "да", 5 => "да", 6 => "да", 7 => "да", 8 => "да",
        9 => "да", 10 => "да", 11 => "да", 12 => "да", 13 => "да", 14 => "да", 15 => "да", 16 => "да",
        17 => "да", 18 => "да", 19 => "да"
    );
    $s = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($_POST as $question => $answer) {
            if ($answers[$question] == $answer) {
                // «да»
                if (in_array($question, [3, 9, 10, 13, 14, 19])) {
                    $s += 1;
                }
            } else {
                // «нет»
                if (in_array($question, [1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18])) {
                    $s += 1;
                }
            }
        }

        $name = $_POST["name"];
        echo "<h2>Результат анкетирования для $name:</h2>";

        if ($s > 15) {
            echo "<p>У Вас покладистый характер.</p>";
        } elseif ($s >= 8 && $s <= 15) {
            echo "<p>Вы не лишены недостатков, но с вами можно ладить.</p>";
        } else {
            echo "<p>Вашим друзьям можно посочувствовать.</p>";
        }
    }
  ?>
    </form>
</body>
</html>
