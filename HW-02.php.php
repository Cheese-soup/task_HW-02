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

function getPartsFromFullname($fullname){
    $exploded = explode(" ",$fullname);
    $separated = [
        'surname' => $exploded[0],
        'name' => $exploded[1],
        'patronymic' => $exploded[2],
    ];
    return $separated;
};

function getFullnameFromParts($surname, $name, $patronymic){
    $fullName = [$surname, $name, $patronymic];
    return implode(' ', $fullName);
};

function getShortName($fullName){
    $separated = getPartsFromFullname($fullName);
    $shortName = $separated["name"] . ' ' . mb_substr($separated["surname"],0,1) . ".";

    return $shortName;
};

function getGenderFromName($fullName){
    $separated = getPartsFromFullname($fullName);
    $gender = 0;

    if (mb_substr($separated["surname"],-2,2) == "ва"){
        $gender = -1;
    } elseif (mb_substr($separated["surname"],-1,1) == "в"){
        $gender = 1;
    } else {
        $gender = 0;
    }
    
    $genderName = mb_substr($separated["name"],-1,1);

    if ($genderName == "a"){
        $gender = -1;
    } elseif ($genderName == "й" || $genderName == "н"){
        $gender = 1;
    } else {
        $gender = 0;
    }

    if (mb_substr($separated["patronymic"],-3,3) == "вна"){
        $gender = -1;
    } elseif (mb_substr($separated["patronymic"],-2,2) == "ич"){
        $gender = 1;
    } else {
        $gender = 0;
    }

    if (($gender <=> 0) === 1){
        return "Male";
    } elseif (($gender <=> 0) === -1){
        return "Female";
    } else {
        return "Undefined";
    }

}



?>