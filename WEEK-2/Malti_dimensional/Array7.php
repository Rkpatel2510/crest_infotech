<?php
// Multidimensional array
$superheroes= [
    "spider-man" => ["name" => "Peter Parker", "email" => "peterparker@mail.com"],
    "black-widow" => ["name" => "Scarlett Johansson", "email" => "scarlettjohansson@mail.com"],
    "iron-man" => ["name" => "Tony Stark", "email" => "tonystark@mail.com"],
];
 
echo "<h2>Input</h2>";
echo "<pre>";
print_r($superheroes);


// Printing all the keys and values one by one
 echo "<h2>Output</h2>";
$keys = array_keys($superheroes);
    //print_r($keys);
for($i = 0; $i < count($superheroes); $i++) {
    echo $keys[$i] . "{<br>";
    foreach($superheroes[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "}<br>";
}
?>