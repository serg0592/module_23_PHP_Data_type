<?php
    function getGenderDescription($personsArray) {
        $personsNum = count($personsArray);
        $man = 0;
        $woman = 0;
        $manWoman = 0;

        for ($i = 0; $i < count($personsArray); $i++) {
            $gender = getGenderFromName($personsArray[$i]['fullname']);

            if ($gender === 'Мужской') {
                $man++;
            } elseif ($gender === 'Женский') {
                $woman++;
            } else {
                $manWoman++;
            };
        };

        $manNum = (100 / $personsNum) * $man;
        $womanNum = (100 / $personsNum) * $woman;
        $manWomanNum = (100 / $personsNum) * $manWoman;

        return <<<GD
                Гендерный состав:
                -----------------
                Мужчины - $manNum%
                Женщины - $womanNum%
                Не удалось определить - $manWoman%
                GD;
    }
?>