<?php

   $table = array(
    "header" => array(
        "student ID",
        "Lastname",
        "Middlename",
        "Firstname",
        "Course",
        "Section"

    ),
    "body" =>array(
        array(
            "Lastname"=>"Lastname",
            "Middlename"=>"Middlename",
            "Firstname"=>"Firstname",
            "Course"=>"BSCS/BSIT",
            "Section"=>"3A/3C",
        ),
        array(
            "Lastname"=>"Lastname",
            "Middlename"=>"Middlename",
            "Firstname"=>"Firstname",
            "Course"=>"BSCS/BSIT",
            "Section"=>"3A/3C",
        ),
        array(
            "Lastname"=>"Lastname",
            "Middlename"=>"Middlename",
            "Firstname"=>"Firstname",
            "Course"=>"BSCS/BSIT",
            "Section"=>"3A/3C",
        ),
        array(
            "Lastname"=>"Lastname",
            "Middlename"=>"Middlename",
            "Firstname"=>"Firstname",
            "Course"=>"BSCS/BSIT",
            "Section"=>"3A/3C",
        ),
        array(
            "Lastname"=>"Lastname",
            "Middlename"=>"Middlename",
            "Firstname"=>"Firstname",
            "Course"=>"BSCS/BSIT",
            "Section"=>"3A/3C",
        ),
        array(
            "Lastname"=>"Lastname",
            "Middlename"=>"Middlename",
            "Firstname"=>"Firstname",
            "Course"=>"BSCS/BSIT",
            "Section"=>"3A/3C",
        ),
        array(
            "Lastname"=>"Lastname",
            "Middlename"=>"Middlename",
            "Firstname"=>"Firstname",
            "Course"=>"BSCS/BSIT",
            "Section"=>"3A/3C",
        ),
        array(
            "Lastname"=>"Lastname",
            "Middlename"=>"Middlename",
            "Firstname"=>"Firstname",
            "Course"=>"BSCS/BSIT",
            "Section"=>"3A/3C",
        ),
        array(
            "Lastname"=>"Lastname",
            "Middlename"=>"Middlename",
            "Firstname"=>"Firstname",
            "Course"=>"BSCS/BSIT",
            "Section"=>"3A/3C",
        ),
        array(
            "Lastname"=>"Lastname",
            "Middlename"=>"Middlename",
            "Firstname"=>"Firstname",
            "Course"=>"BSCS/BSIT",
            "Section"=>"3A/3C",
        ),
    )
 
    );
    $studentID = 0;
    


    echo "<table border ='5'>";
    echo "<tr>";

    foreach ($table["header"] as $header){
        echo "<th>$header</th>";
    }
    echo "</tr>";
   
    foreach ($table["body"] as $row){
        echo "<tr>";
         echo "<td>".($studentID + 1)."</td>";
            $studentID++;
        foreach ($table["header"] as $header){
            if ($header !== "student ID"){
            $x = str_replace(' ', '', $header);
            echo "<td>{$row[$x]}</td>";
            }
        }
        
        echo "</tr>";

    }
 

?>
