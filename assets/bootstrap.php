<?php
#Fil som införskaffar alla filer som kan krävas vid körning samt startar session
#Man inkluderar alltså bootstrap i filer som t.ex. kräver nedan funk.
session_start();
require("/../php-funktioner/krypteringsfunktioner.php");
require("/../php-funktioner/dbfunktioner.php");
require("/../php-funktioner/formvalidering.php");
require("/../php-funktioner/funktioner.php");
?>
