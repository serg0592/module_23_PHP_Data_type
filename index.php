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

                //выбор случайного человека
                $rndPerson = $example_persons_array[rand(0, count($example_persons_array) - 1)];
                //выборка имени
                $rndPersonName = $rndPerson['fullname'];
                //разделение имени
                $nameParts = getPartsFromFullName($rndPersonName);
                //гендерный состав массива
                $genderNum = getGenderDescription($example_persons_array);
                echo '<pre>';
                    print_r ($genderNum);
                echo '</pre>';
                //идеальный партнер
                getPerfectPartner($nameParts['surName'], $nameParts['firstName'], $nameParts['patronymic'], $example_persons_array);
            ?>
        </main>
        <footer class="footer"></footer>
    </body>

<script src="script.js"></script>
</html>