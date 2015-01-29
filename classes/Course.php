<?php

class Course
{

    function  __call($functionName, $arguments)
    {

        function __set($a, $b)
        {
            echo $a;
            echo $b;

        }

        echo "hello";
        var_dump($a);
        var_dump($b);

        }



}



































