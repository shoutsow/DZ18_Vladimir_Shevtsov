<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZ18</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            color: darkblue;
        }
        .title {
            text-align: center;
            text-decoration: underline;
            font-weight: bold;
            color: darkred;
        }
    </style>
</head>
<body>

    <?php

        echo '<p class="title">Домашняя работа №3.</p>';

        echo '1. Сделайте функцию, которая возвращает куб числа. Число передается
        параметром.<br><br>';
        function cube($num) {
            return $num ** 3;
        }

        echo 'Вызываем функцию с аргументом "5" и получаем возврат: ' . cube(5) . '<br><hr>';


        echo '2. Сделайте функцию, которая возвращает сумму двух чисел. Числа
        передаются параметрами функции.<br><br>';
        function sum($a, $b) {
            return $a + $b;
        }

        echo 'Вызываем функцию с аргументами "13" и "7". Получаем возврат: ' . sum(13, 7) . '<br><hr>';


        echo '3. Сделайте функцию, которая принимает параметром число от 1 до 7, а
        возвращает день недели на русском языке.<br><br>';
        function dayOfWeek($day) {
            switch ($day) {
                case 1:
                    return 'Сегодня Понедельник';
                case 2:
                    return 'Сегодня Вторник';
                case 3:
                    return 'Сегодня Среда';
                case 4:
                    return 'Сегодня Четверг';
                case 5:
                    return 'Сегодня Пятница';
                case 6:
                    return 'Сегодня Суббота';
                case 7:
                    return 'Сегодня Воскресенье';
                default:
                    return 'День не определён';
            }
        }

        echo 'Вызываем функцию с аргументом "4" и получаем возврат: ' . dayOfWeek(4) . '<br><hr>';


        echo '4. Сделайте функцию, которая параметром принимает число и проверяет -
        отрицательное оно или нет. Если отрицательное - пусть функция вернет true,
        а если нет - false.<br><br>';
        function posNeg($num) {
            if (!is_numeric($num)) {
                return 'Это вообще не число!';
            }
            else if ($num < 0) {
                return 'true';
            } else {
                return 'false';
            }
        }

        echo 'Вызываем функцию с аргументом "-7" и получаем возврат: ' . posNeg(-7) . '<br><hr>';


        echo '5. Сделайте функцию getDigitsSum (digit - это цифра), которая параметром
        принимает целое число и возвращает сумму его цифр.<br><br>';
        function getDigitsSum($digit) {
            $digit .= '';
            $res = 0;
            if (is_numeric(+$digit) && !is_float(+$digit)) {
                for ($i = 0; $i < strlen($digit); $i++) {
                    $res += +$digit[$i];
                }
            } else {
                return 'Что-то не так с аргументом. Возможно он не является целым числом.';
            }
            return $res;
        }

        echo 'Вызываем функцию с аргументом "12345" и получаем возврат: ' . getDigitsSum(12345) . '<br><hr>';


        echo '6. Найдите все года от 1 до 2020, сумма цифр которых равна 13. Для этого
        используйте вспомогательную функцию getDigitsSum из предыдущей задачи.<br><br>';

        echo 'Вызываем функцию поиска указанных лет: ' . '<br>';
        function allYears13() {
            for ($i = 1; $i <= 2020; $i++) {
                if (getDigitsSum($i) == 13) {
                    echo $i . '&ensp;';
                }
            }
        }
        allYears13();

        echo '<br><hr>';


        echo '7. Сделайте функцию isEven() (even - это четный), которая параметром
        принимает целое число и проверяет: четное оно или нет. Если четное - пусть
        функция возвращает true, если нечетное - false.<br><br>';
        function isEven($num) {
            if (!is_numeric($num)) {
                return 'Похоже это вовсе не число!';
            }
            else if ($num % 2 == 0) {
                return 'true';
            } else {
                return 'false';
            }
        }

        echo 'Вызываем функцию с аргументом "228" и получаем возврат: ' . isEven(228) . '<br><hr>';


        echo '8. Сделайте функцию, которая принимает строку на русском языке, а
        возвращает ее транслит.<br><br>';
        function transLit($str) {
            $tarns = [
                "А"=>"A","Б"=>"B","В"=>"V","Г"=>"G",
                "Д"=>"D","Е"=>"E","Ж"=>"J","З"=>"Z","И"=>"I",
                "Й"=>"Y","К"=>"K","Л"=>"L","М"=>"M","Н"=>"N",
                "О"=>"O","П"=>"P","Р"=>"R","С"=>"S","Т"=>"T",
                "У"=>"U","Ф"=>"F","Х"=>"H","Ц"=>"TS","Ч"=>"CH",
                "Ш"=>"SH","Щ"=>"SCH","Ъ"=>"","Ы"=>"YI","Ь"=>"",
                "Э"=>"E","Ю"=>"YU","Я"=>"YA","а"=>"a","б"=>"b",
                "в"=>"v","г"=>"g","д"=>"d","е"=>"e","ж"=>"j",
                "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
                "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
                "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
                "ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
                "ы"=>"yi","ь"=>"'","э"=>"e","ю"=>"yu","я"=>"ya",
            ];
            return strtr($str, $tarns);
	    }

        echo 'Вызываем функцию с аргументом "Привет. Как дела, Трансцендентный Инфудибулум?" 
        и получаем возврат: ' . transLit('Привет. Как дела, Трансцендентный Инфудибулум?') . '<br><hr>';


        echo "9. Сделайте функцию, которая возвращает множественное или единственное
        число существительного. Пример: 1 яблоко, 2 (3, 4) яблока, 5 яблок. Функция
        первым параметром принимает число, а следующие 3 параметра — форма
        для единственного числа, для чисел два, три, четыре и для чисел, больше
        четырех, например, func(3, 'яблоко', 'яблока', 'яблок').<br><br>";
        function nounForm($num) {
            if (!is_numeric($num)) {
                return 'Это вообще не число!';
            }
            $num .= '';
            if ($num[strlen($num) - 1] == 1) {
                return $num . ' груша';
            }
            else if (($num[strlen($num) - 1] == 2) || ($num[strlen($num) - 1] == 3)
                    || ($num[strlen($num) - 1] == 4)) {
                return $num . ' груши';
            }
            else if (($num[strlen($num) - 1] == 0) || ($num[strlen($num) - 1] == 5)
                || ($num[strlen($num) - 1] == 6) || ($num[strlen($num) - 1] == 7)
                || ($num[strlen($num) - 1] == 8) || ($num[strlen($num) - 1] == 9)) {
                return $num . ' груш';
            }
            return 0;
        }

        echo 'Вызываем функцию с аргументом "1" 
        и получаем возврат: ' . nounForm(1) . '<br>';
        echo 'Вызываем функцию с аргументом "3" 
        и получаем возврат: ' . nounForm(3) . '<br>';
        echo 'Вызываем функцию с аргументом "8" 
        и получаем возврат: ' . nounForm(8) . '<br><hr>';


        echo '10. Дан массив с числами. Выведите последовательно его элементы
        используя рекурсию и не используя цикл.<br><br>';

        echo 'Вызываем функцию с аргументами $arr = "[34, 56, 12, 3, 7, 96, 36, "Вова"]" 
        и i = "0". Получаем: ' . '<br>';
        function func($arr, $i) {
            if ($i == count($arr)) {
                return;
            }
            if ($i == (count($arr) - 1)) {
                echo $arr[$i];
            } else {
            echo $arr[$i] . '<br>';
            }
            func($arr, $i + 1);
        }

        echo func([34, 56, 12, 3, 7, 96, 36, 'Вова'], 0) . '<br><hr>';


        echo '11. Дано число. Сложите его цифры. Если сумма получилась более 9-ти, опять сложите его цифры.
        (чего?? может цифры получившейся суммы дальше складвать? Какой смысл, опять складывать цифры того же числа??) 
        И так, пока сумма не станет однозначным число (9 и менее).<br><br>';

        echo 'Вызываем функцию с аргументом "77777777777777":' . '<br>';
        function sumUntil1dgt($num) {
            $num .= '';
            $sum = 0;
            for ($i = 0; $i < strlen($num); $i++) {
                $sum += +$num[$i];
            }
            if ($sum < 9) {
                echo $sum;
            } else {
                echo $sum . '<br>';
            }
            if ($sum > 9) {
                $num = $sum;
                sumUntil1dgt($num);
            }
        }

        echo sumUntil1dgt(77777777777777) . '<br><hr>';


        echo '12. Рассчитайте скорость движения машины и выведите её в удобочитаемом
        виде. Осуществить возможность вывода в км/ч, м/c. Представить решение
        задачи с помощью одной функции.<br><br>';
        function velocity($dist, $time) {
            $vel = $dist / $time;
            $vms = $vel / 3.6;
            echo 'Вызываем функцию с аргументами $dist = 300 км. и $time = 4 ч. ' . 'и получаем скорость равную ' .
            $vel . ' км/ч или ' . $vms . ' м/с.' . '<br><hr>';
        }
        velocity(300, 4);


        echo '13. Даны 2 слова, определить можно ли из 1ого слова составить 2ое, при
        условии что каждую букву из строки 1 можно использовать только один раз.<br><br>';
        function strFromStr($str1, $str2) {
            $chr1 = count_chars(mb_strtolower($str1));
            $chr2 = count_chars(mb_strtolower($str2));
            for ($i = 0; $i < count($chr1); $i++) {
                $res = $chr1[$i] - $chr2[$i];
                if ($res < 0) {
                    return "Слово составить нельзя";
                } else if ((count($chr1) - $i) == 1) {
                    return "Слово составить можно";
                }
            }
            return 0;
        }

        echo 'Вызываем функцию с аргументами $str1 = "УЛьТрАфиолЕТ" 
        и $str1 = "туалет". Получаем: ' . strFromStr('УЛьТрАфиолЕТ', 'туалет') . '<br><hr>';


        echo '14. Палиндромом называют последовательность символов, которая читается
        как слева направо, так и справа налево. Напишите функцию по определению
        палиндрома по переданному параметру.<br><br>';
        function isPal($str) {
            function mb_strrev($str){
                $rev = '';
                for ($i = mb_strlen($str); $i >= 0; $i--) {
                    $rev .= mb_substr($str, $i, 1);
                }
                return $rev;
            }
            if (mb_strtolower($str) == mb_strrev(mb_strtolower($str))) {
                return 'Да, строка - палиндром';
            } else {
                return 'Нет, строка - не палиндром';
            }
        }

        echo 'Вызываем функцию с аргументом "Наворован" и получаем возврат: ' . isPal('Наворован') . '<br><hr>';

    ?>


    15. Создайте функцию создания таблицы умножения в HTML-документе в
    виде таблицы с использованием соотв. тегов.<br><br>

        <table align="left" border="1" cellpadding="3" cellspacing="0">

        <?php
            function multTable() {
                for ($i = 1; $i <= 10; $i++) {
                    echo '<tr>';
                    for ($j = 1; $j <= 10; $j++) {
                        echo "<td> $i * $j = " . $i * $j . '</td>';
                    }
                    echo '</tr>';
                }
            }
        multTable();
        ?>

        </table>

    <?php

        echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>';


        echo '16. Дана строка с текстом. Напишите функцию определения самого длинного
        слова.<br><br>';
        function getLongestWord($text) {
            $arr = explode(" ", $text);
            $max = $arr[0];
            for ($i = 0; $i < count($arr); $i++) {
                if (mb_strlen($arr[$i]) > mb_strlen($max)) {
                    $max = $arr[$i];
                }
            }
            return $max;
        }

        echo 'Вызываем функцию с аргументом "16. Дана строка с текстом. 
        Напишите функцию определения самого длинного слова" и получаем возврат: ' .
        getLongestWord('16. Дана строка с текстом. Напишите функцию определения самого длинного слова') .
        '<br><hr>';


        echo '17. Напишите функцию определения суммарного количества единиц в числах
        от 1 до 100.<br><br>';
        function quantOf1() {
            $quant = 0;
            for ($i = 1; $i < 100; $i++) {
                $si = $i;
                $si .= '';
                for ($j = 0; $j < strlen($si); $j++) {
                    if ($si[$j] == '1') {
                        $quant = $quant + 1;
                    }
                }
            }
            return $quant;
        }

        echo 'Вызываем функцию и получаем возврат: ' . quantOf1() . '<br><hr>';


        echo '18. Напишите функцию, которая разбивает длинную строку тегами &lt;br&gt; так,
        чтобы длина каждой подстроки была не более N символов. Новая подстрока
        не должна начинаться с пробела.<br><br>';
        function textBreak($text, $n) {
            return wordwrap($text, $n, "<br>", false);
        }

        echo 'Вызываем функцию с аргументом $text = "18. Напишите функцию, которая разбивает длинную строку тегами 
        &lt;br&gt; так, чтобы длина каждой подстроки была не более N символов. Новая подстрока
        не должна начинаться с пробела." и $n = "40". Получаем возврат: ' . '<br>' .
        textBreak('18. Напишите функцию, которая разбивает длинную строку тегами &lt;br&gt; так,
        чтобы длина каждой подстроки была не более N символов. Новая подстрока
        не должна начинаться с пробела.', 40) .
        '<br><hr>';

    ?>
    
</body>
</html>