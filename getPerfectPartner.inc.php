<?php
    function getPerfectPartner($surName, $firstName, $patronymic, $personsArray) {
        $regSurName = mb_convert_case($surName, MB_CASE_TITLE_SIMPLE);
        $regFirstName = mb_convert_case($firstName, MB_CASE_TITLE_SIMPLE);
        $regPatronymic = mb_convert_case($patronymic, MB_CASE_TITLE_SIMPLE);

        foreach ($personsArray as $value) {
            $value['fullname'];
        };
    }
?>