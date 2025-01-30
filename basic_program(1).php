<?php

$dbhost = "localhost";
$dbuser = "<your_user_name>";
$dbpass = "<your_password>";
$dbname = '<your_database_name>';

/* connect to the database */
$sql_link = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

/* check connection */
if ($sql_link->connect_errno) {
    printf("Connect failed: %s\n", $sql_link->connect_error);
    exit();
}

/* run query */
$q = $sql_link->query("SELECT * FROM <your_table>");

/* process result through associative array */
while ($row = $q->fetch_array(MYSQLI_ASSOC))
{
    printf("%s %s</BR>\n", $row["<your_field_no1>"], $row["your_field_no2"]);
};

mysqli_close($sql_link);

?>
