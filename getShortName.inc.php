<?php
    include 'getPartsFromFullName.inc.php';
    function getShortName($fullName) {
        $shortFirstName = getPartsFromFullName['firstName'];
        $shortSurName = getPartsFromFullName['surName'][0];
        return $shortFirstName . '' . $shortSurName . '' . ".";
    }
?>