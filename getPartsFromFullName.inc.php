<?php
    function getPartsFromFullName($fullName) {
        $partsArr = explode('', $fullName);
        $nameParts = [
            'surName',
            'firstName',
            'patronymic'
        ];
        return array_merge($nameParts, $partsArr);
    }
?>