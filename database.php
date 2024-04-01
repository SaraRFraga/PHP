<?php

//we are going to connect to the database
$db = mysqli_connect('localhost', 'root', '', 'appsalon');

if(!$db){ //checking if the connection was made
    echo "There was an error connecting to the database";
} else { echo "Connected successfully"; 
}
exit; //prevents execution of more code