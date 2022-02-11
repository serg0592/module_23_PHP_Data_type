<?php
    function getGenderFromName($fullName) {
        $gender = 0;
        $nameParts = getPartsFromFullName($fullName);
        if (mb_substr($nameParts['patronymic'], -3) === 'вна') {
            $gender--;
        } elseif (mb_substr($nameParts['patronymic'], -3) === 'вич') {
            $gender++;
        };

        if (mb_substr($nameParts['firstName'], -1) === 'а') {
            $gender--;
        } elseif ((mb_substr($nameParts['firstName'], -1) === 'й') || 
                    (mb_substr($nameParts['firstName'], -1) === 'н')) {
            $gender++;
        };

        if (mb_substr($nameParts['surName'], -2) === 'ва') {
            $gender--;
        } elseif (mb_substr($nameParts['surName'], -1) === 'в') {
            $gender++;
        };

        if ($gender > 0) {
            echo '<pre>';
                print_r ('Мужской');
            echo '</pre>';
        } elseif ($gender < 0) {
            echo '<pre>';
                print_r ('Женский');
            echo '</pre>';
        } else {
            echo '<pre>';
                print_r ('Неопределено');
            echo '</pre>';
        };
    }
?>