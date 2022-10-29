<?php
    header('Content-type: application/json');
    $slackUsername = "Marshal";
    $backend = true;
    $age = (int) 26;
    $bio = "My name is Asubiojo Olujuwon, a backend PHP  developer with 3 years industrial experience in building  applications." ;


    $res = json_encode([
        'slackUsername' => $slackUsername,
        'backend' => $backend,
        'age' => $age,
        'bio' => $bio,
    ]);
        echo $res;

 

?>



