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

    function getFullNameFromParts($surName, $firstName, $patronymic) {
        return $surName . '' . $firstName . '' . $patronymic;
    }

    function getPartsFromFullName($fullName) {
        $partsArr = explode('', $fullName);
        $nameParts = [
            'surName',
            'firstName',
            'patronymic'
        ];
        return array_merge($nameParts, $partsArr);
    }

    function getShortName($fullName) {
        $shortFirstName = getPartsFromFullName['firstName'];
        $shortSurName = getPartsFromFullName['surName'][0];
        return $shortFirstName . '' . $shortSurName . '' . ".";
    }

    function getGenderFromName($fullName) {
        
    }
?>