<?php
function __autoload($class_name){

    include_once("classes/".$class_name.".php");



}
$bkiict=new Bkiict();

$student=new Student();

$course = new Course();

//echo $course->title;

$course->title = 'Course title';

echo $course->title;

//echo "<br>";

$course->getCredits('hello','hi');
$course->getLessons('jip','hello');


//var_dump($course);