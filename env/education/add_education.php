<?php

use APP\Support\Validate\Errors;
use APP\Support\Validate\Validator;
use APP\Support\Database\DB;

require("../../config/Validate.php");
require("../../config/Errors.php");
require("../../config/DB.php");


$University = Validator::clean($_POST["University"]);
$Start = Validator::clean($_POST["Start"]);
$End = Validator::clean($_POST["End"]);
$Summary = Validator::clean($_POST["Summary"]);

$errors =array();

array_push($errors,Validator::validate_text($University,"University"));
array_push($errors,Validator::validate_text($Summary,"Summary"));


if(Errors::check_error($errors)){
    $result = DB::create("insert into education
    (university_title, start_in, end_in, summary)
     VALUES ('$University','$Start','$End','$Summary')");

     if($result == true){
        echo "Success";
     }
     else{
        echo "Fail";
     }

     var_dump($result);
}

