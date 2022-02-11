<?php
    function getGenderDescription($personsArray) {
        $personsNum = count($personsArray);
        $man = 0;
        $woman = 0;
        $manWoman = 0;

        foreach ($personsArray as $value) {
            $gender = getGenderFromName($value['fullname']);

            if ($gender === 'Мужской') {
                $man++;
            } elseif ($gender === 'Женский') {
                $woman++;
            } else {
                $manWoman++;
            };
        };

        $manNum = round((100 / $personsNum) * $man, $precision = 1, $mode = PHP_ROUND_HALF_UP);
        $womanNum = round((100 / $personsNum) * $woman, $precision = 1, $mode = PHP_ROUND_HALF_UP);
        $manWomanNum = round((100 / $personsNum) * $manWoman, $precision = 1, $mode = PHP_ROUND_HALF_UP);

        return <<<GD
                Гендерный состав:
                -----------------
                Мужчины - $man ($manNum%)
                Женщины - $woman ($womanNum%)
                Не удалось определить - $manWoman ($manWomanNum%)
                GD;
    }
?>