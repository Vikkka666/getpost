

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    <?php
        $year = $_GET['year'];
        $month = $_GET['month'];
        $day = $_GET['day'];
        $week=$_get['week'];
        print_r($_GET);
    ?>
    </form>
    
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
</body>
</html>