<?php

require 'vendor/autoload.php';

// require "functions/helpers.php";

$produto = new app\jobs\Register;
echo $produto->register();

dd($produto->register());
