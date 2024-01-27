<?php
// ДЗ 3 Задание 1
// Создать массив из 50 пользователей, закинуть его в json, декодировать этот же json и применить некоторые операции к декодированному файлу
function task1()
{
    $arr = [];
    $names = ['Ivan', 'Dmitriy', 'Natalya', 'Yuriy', 'Roman'];
    // Создаём пользователей с помощь. цикла for
    for ($i = 0; $i <= 50; $i++) {
        $name = mt_rand(0, 4);
        $age = mt_rand(18, 45);
        $arr[$i] = [
            'id' => $i,
            'name' => $names[$name],
            'age' => $age,
        ];
    }
    // Записываем закодированный в json массив и записываем в файл, а затем выполняем обратное
    file_put_contents('./users.json', json_encode($arr));
    $usersJson = file_get_contents('./users.json');
    $users = json_decode($usersJson, true);
    $ivanCount = 0;
    $dmitriyCount = 0;
    $natalyaCount = 0;
    $yuriyCount = 0;
    $romanCount = 0;
    $totalAge = 0;
    // Подсчитываем количество пользователей с определёнными именами и средний возраст
    for ($i = 0; $i <= 50; $i++) {
        switch ($users[$i]['name']) {
            case 'Ivan':
                $ivanCount++;
                break;
            case 'Dmitriy':
                $dmitriyCount++;
                break;
            case 'Natalya':
                $natalyaCount++;
                break;
            case 'Yuriy':
                $yuriyCount++;
                break;
            case 'Roman':
                $romanCount++;
                break;
        }
        $totalAge += $users[$i]['age'];
    }

    $avgAge = $totalAge / 50;

    echo 'Количество пользователей с именем: <br>Иван: ' . $ivanCount . '<br>Дмитрий: ' . $dmitriyCount . '<br>Наталья: ' . $natalyaCount . '<br>Юрий: ' . $yuriyCount . '<br>Роман: ' . $romanCount . '<br>';
    echo 'Средний возраст пользователей: ' . $avgAge . '<br><br>';
}
