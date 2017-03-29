 <?php
        //Host Name: "127.0.0.1"
    //Username: israelandrade22
        //Password: ""
        //Database name: "Otter_Express"
        //Port 3306
        $host = "127.0.0.1";
        $user = "israelandrade22";
        $pass = "";
        $db = "test";
        $port = 3306;
        $connection = mysqli_connect($host, $user, $pass, $db, $port) or die(mysql_error());
?>