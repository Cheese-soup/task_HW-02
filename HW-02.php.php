<?php  

$example_persons_array = [
    [
        'fullname' => 'Иванов Иван Иванович',
        'job' => 'tester',
    ],
    [
        'fullname' => 'Степанова Наталья Степановна',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Пащенко Владимир Александрович',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Громов Александр Иванович',
        'job' => 'fullstack-developer',
    ],
    [
        'fullname' => 'Славин Семён Сергеевич',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Цой Владимир Антонович',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Быстрая Юлия Сергеевна',
        'job' => 'PR-manager',
    ],
    [
        'fullname' => 'Шматко Антонина Сергеевна',
        'job' => 'HR-manager',
    ],
    [
        'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Бардо Жаклин Фёдоровна',
        'job' => 'android-developer',
    ],
    [
        'fullname' => 'Шварцнегер Арнольд Густавович',
        'job' => 'babysitter',
    ],

];


function getPartsFromFullname(){
    global $example_persons_array;
    foreach ($example_persons_array as $fullnameAndJob){
        $expd = explode(' ',$fullnameAndJob['fullname']);
        $surname = $expd[0];
        $name = $expd[1];
        $patr = $expd[2];
        echo "Фамилия: " . $surname . "<br>";
        echo "Имя: " . $name . "<br>";
        echo "Отчество: " . $patr . "<br>";
        echo "<em>---------</em><br>";
    };
};

getPartsFromFullname();


function getFullnameFromParts(){
    global $example_persons_array;
    foreach ($example_persons_array as $fullnameAndJob){
        $expd = explode(' ',$fullnameAndJob['fullname']);
        $surname = $expd[0];
        $name = $expd[1];
        $patr = $expd[2];
        echo "ФИО: " . $surname . " " . $name . " " . $patr . "<br>";
        echo "<em>---------</em><br>";
    };
};

getFullnameFromParts();

function getShortName(){
    global $example_persons_array;
    foreach ($example_persons_array as $fullnameAndJob){
        $expd = explode(' ',$fullnameAndJob['fullname']);
        $surname = $expd[0];
        $name = $expd[1];
        echo $name . " " . mb_substr($surname, 0, 1) . "." . "<br>";
    };
};

getShortName();

?>