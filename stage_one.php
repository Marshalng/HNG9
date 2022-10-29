<?php
 
    $slackUsername = (string) "Marshal";
    $backend = (boolean) true;
    $age = (int) 26;
    $bio = (string) "My name is Asubiojo Olujuwon, a backend PHP  developer with 3 years industrial experience in building  applications." ;


    $res = json_encode([
        'slackUsername' => $slackUsername,
        'backend' => $backend,
        'age' => $age,
        'bio' => $bio,
    ]);
        echo $res;

 

?>



