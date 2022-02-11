<?php
    function getShortName($fullName) {
        $nameParts = getPartsFromFullName($fullName);
        $shortFirstName = $nameParts['firstName'];
        $shortSurName = mb_substr($nameParts['surName'], 0, 1);
        return $shortFirstName . ' ' . $shortSurName . ".";
    }
?>