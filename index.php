<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap" rel="stylesheet">
    <title>Lab 9</title>
</head>
<body>
    <header>
        <div class="header">
            <h3>Лабораторная работа №9, Саркисова Варвара, 211-362, Вариант 6 </h3>
            <img src="logoMosPoly.png" alt="Логотип" height = 50px text-align = right >
        </div>
    </header>
    <main>
        <div class= "functions">
            <?php
            $num = 0;
            $encounting = 1000;
            $step = 1;
            $type = "A";
            $result;
            $max = PHP_INT_MIN;
            $min = PHP_INT_MAX;
            $sum = 0;
            $average;

            function f1 ($num) {
                return (($num * $num)*0.33)+ 4;}
            function f2 ($num) {
                return (18*$num) - 3;}
            function f3 ($num) {
                return 1/(($num*0.1)-2);}

            for ($i = 0; $i < $encounting; $i++, $num += $step) {
                if ($num==20){
                    $result = "error";
                }else {
                    if ($num<=10) {$result = f1 ($num);}
                    else if ($num > 10 && $num <= 20) {$result = f2 ($num);}
                    else if ($num > 20) {$result = f3 ($num);}
                }

                if ($type == 'A') {
                    echo 'f(' . $num . ') = ' . $result;
                    if( $i < $encounting-1 ) echo '<br>';
                }

                if ($result == "error"){
                    $result = 0;
                }
                else {
                    if ($result > $max) $max = $result;
                    if ($result < $min) $min = $result;
                    $sum += $result;
                    $average = $sum / $encounting;
                }
            }
            ?>
        </div>
    </main>
    <footer>
        <div><?php echo 'Максимум: ' . $max ?></div>
        <div><?php echo 'Минимум: ' . $min ?></div>
        <div><?php echo 'Среднее значение: ' . $average ?></div>
        <div><?php echo 'Сумма: ' . $sum ?></div>
        <div><?php echo 'Тип верстки: ' . $type ?></div>
    </footer>
</body>
</html>