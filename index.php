<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>PHP 23</title>
    </head>
    <body class="body">
        <header class="header"></header>
        <main class="main">
            <?php
                include 'examplePersonsArray.inc.php';
                include 'getFullNameFromParts.inc.php';
                include 'getPartsFromFullName.inc.php';
                include 'getShortName.inc.php';
                include 'getGenderFromName.inc.php';
                include 'getGenderDescription.inc.php';
                include 'getPerfectPartner.inc.php';

                $rndPerson = $example_persons_array[rand(0, count($example_persons_array) - 1)];
                $rndPersonName = $rndPerson['fullname'];
                $nameParts = getPartsFromFullName($rndPersonName);
                $genderNum = getGenderDescription($example_persons_array);
                print_r ($genderNum);
                getPerfectPartner($nameParts['surName'], $nameParts['firstName'], $nameParts['patronymic'], $example_persons_array);
            ?>
        </main>
        <footer class="footer"></footer>
    </body>

<script src="script.js"></script>
</html>