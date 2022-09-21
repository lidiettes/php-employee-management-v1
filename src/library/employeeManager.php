<?php
    function getEmployee(){
    // TODO implement it
        return json_decode(file_get_contents('../resources/employees.json'), true);
    // echo '<pre>';
    //  var_dump($employJson);
    //  echo '</pre>';
    // exit;
    
    }

