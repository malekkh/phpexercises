<?php
function display_personal_details($personal_details) {
    foreach ($personal_details as $key => $value) {
        echo "$key = $value\n";
    }
}

$personal_details = array(
    "name" => "Rajesh Rao",
    "occupation" => "Engineer",
    "age" => 39,
    "country" => "India"
);

display_personal_details($personal_details);

?>
