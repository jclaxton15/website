<?php
    include('db_connect.php');
    $SQL = "INSERT INTO forum (forum) VALUES ('test')";

    $result = mysql_query($SQL);
    ?>