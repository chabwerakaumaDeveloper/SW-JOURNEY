<?php

include_once('template_version_1.0.1.php');

//instantiate the template object.

$site = new template();

//set up your external resources js/css files

$site->assets(array('js/jquery.js','js/bootstrap.min.js'),array('css/bootstrap.min.css'));

//create an element
//the first parameter: element name,second: class,third: id,fourth: type,fifth: src,sixth: type,seventh: eventType,eighth: eventValue

$site->add(array('input','form-control','t',"password",'','password','',''));

$site->add(array('input','form-control','t',"name",'','text','',''));

//close body

$site->end();

?>
