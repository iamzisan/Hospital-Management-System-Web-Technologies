<?php

session_start();

session_unset();
session_destroy();

header("Location:../../controller/patient_controller/logout.php");

?>
