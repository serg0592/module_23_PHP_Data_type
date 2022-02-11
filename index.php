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
                /*echo '<pre>';
                    print_r ($rndPerson);
                echo '</pre>';*/

                $rndPersonName = $rndPerson['fullname'];
                /*print_r ($rndPersonName);

                echo '<pre>';*/
                    $nameParts = getPartsFromFullName($rndPersonName);
                    /*print_r ($nameParts);
                echo '</pre>';

                $reName = getFullNameFromParts($nameParts['surName'], $nameParts['firstName'], $nameParts['patronymic']);
                print_r ($reName);
                
                echo '<pre>';
                    $shortName = getShortName($rndPersonName);
                    print_r ($shortName);
                echo '</pre>';

                $rndPersonGender = getGenderFromName($rndPersonName);
                print_r ($rndPersonGender);

                echo '<pre>';
                    $genderNum = getGenderDescription($example_persons_array);
                    print_r ($genderNum);
                echo '</pre>';*/

                getPerfectPartner($nameParts['surName'], $nameParts['firstName'], $nameParts['patronymic'], $example_persons_array);
            ?>
        </main>
        <footer class="footer"></footer>
    </body>

<script src="script.js"></script>
</html>