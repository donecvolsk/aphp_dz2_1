<?php
declare(strict_types=1);

// require_once 'Temperature.php';
include 'autoloader.php';
spl_autoload_register('autoloader');
$a = [];//массив с сотрудниками
$salary_summ = 0; // сумма зарплат
$employees_sunn = 0; //количество сотрудников

$programmer = new Programmer();
$programmer->add_employee('Алексей', 'Донец', 50000);//Имя, Фамилия, зарплата
$programmer->applicationDevelopment('пишет код');// разработка приложений
$programmer-> conductWebinars('вебинары по php');// тема вебинаров
$a[] = $programmer->add_list();

$programmer->add_employee('Степан', 'Собакин', 70000);
$programmer->applicationDevelopment('верстает страницы');
$programmer-> conductWebinars('вебинары по HTML');
$a[] = $programmer->add_list();

$director = new Director();
$director->add_employee('Владлимир', 'Путин', 550000);//Имя, Фамилия, зарплата
$director->manage('Россия');//руководить
$a[] = $director->add_list();

$manager = new Manager();
$manager->add_employee('Михаил', 'Мишустин', 350000);//Имя, Фамилия, зарплата
$manager->manage('Министерство');//руководить
$a[] = $manager->add_list();

$manager = new Tester();
$manager->add_employee('Билл', 'Гейтс', 33);//Имя, Фамилия, зарплата
$manager->applicationDevelopment('тестирует');
$manager-> conductWebinars('вебинары по тестированию');
$a[] = $manager->add_list();



//перебор массива с сотрудниками
foreach ($a as $value){
    if($value['Должность'] == " позиция: директор," || $value['Должность'] == " позиция: менеджер,"){
    echo $value['Фамилия'] . ' ' . $value['Имя'] . ',' . $value['Должность'] . ' зарплата: '  . $value['Зарплата'] . ' попугаев, ' . $value['Отдел'] . PHP_EOL;
    } elseif($value['Должность'] == " позиция: програмист," || $value['Должность'] == " позиция: тестировщик,"){
        echo $value['Фамилия'] . ' ' . $value['Имя'] . ',' . $value['Должность'] . ' зарплата: ' . $value['Зарплата'] . ' попугаев, ' . $value['Приложения'] . $value['Вебинар'] . PHP_EOL;
    }

    $salary_summ += $value['Зарплата'];
} 
echo PHP_EOL;
echo 'Общее количество сотрудников: ' . count($a) . '.' . PHP_EOL;
echo 'Общая сумма зарплат: ' . $salary_summ . ' попугаев.' .  PHP_EOL;

