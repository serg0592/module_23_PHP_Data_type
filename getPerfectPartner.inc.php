<?php
    function getPerfectPartner($surName, $firstName, $patronymic, $personsArray) {
        $regSurName = mb_convert_case($surName, MB_CASE_TITLE_SIMPLE);
        $regFirstName = mb_convert_case($firstName, MB_CASE_TITLE_SIMPLE);
        $regPatronymic = mb_convert_case($patronymic, MB_CASE_TITLE_SIMPLE);

        $fullName = getFullNameFromParts($regSurName, $regFirstName, $regPatronymic);
        $gender = getGenderFromName($fullName);

        do {
            $rndPerson = $personsArray[rand(0, count($personsArray) - 1)];
            $rndPersonName = $rndPerson['fullname'];
            $rndPersonGender = getGenderFromName($rndPersonName);
        }
        while ($gender === $rndPersonGender);

        $personShort_1 = getShortName($fullName);
        $personShort_2 = getShortName($rndPersonName);
        $lovePercent = rand(50, 99) + rand(0, 100) / 100;

        echo <<<LP
            $personShort_1 + $personShort_2 = <br>
            \u{2661} Идеально на $lovePercent% \u{2661}
            LP;
    }
?>