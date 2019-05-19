<?php
#Funktion som returnerar salt i form av 22 slumpmässiga tecken
function salt(){
  return substr(sha1(mt_rand()),0,22);
}
 ?>
