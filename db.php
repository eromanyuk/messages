<?php
    //$pass = 'A)bpPepu0&cA';

    //set the database access information as constants:
    DEFINE ('DB_USER', 'eromanyu_dbUser');
    DEFINE ('DB_PASSWORD', 'A)bpPepu0&cA');
    DEFINE ('DB_HOST', 'localhost');
    DEFINE ('DB_NAME', 'eromanyu_it328');

    //Make the connection:
    $dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connec_error());

    //set the encoding...
    mysqli_set_charset($dbc, 'utf8');

?>
