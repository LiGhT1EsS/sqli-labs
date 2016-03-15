<?php

//including the Mysql connect parameters.
include("../sql-connections/db-creds.inc");
@error_reporting(0);
@$con = new mysqli($host,$dbuser,$dbpass);
// Check connection
if ($con->connect_error)
{
    echo "Failed to connect to MySQL: " . $con->connect_errno . ':' . $con->connect_error;
}


    $con->select_db($dbname);
    if ($con->error) {
        die("Unable to connect to the database: $dbname");
    }






$sql_connect = "SQL Connect included";
############################################
# For Less-24
$form_title_in="Please Login to Continue";
$form_title_ns="New User";
$feedback_title_ns="New User";
$form_title_ns= "Less-24";

############################################
# For Challenge series--- Randomizing the Table names.

?>




 
