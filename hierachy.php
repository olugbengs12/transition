<?php
$e360_staff = array(
    "Abayomi Elebute" => array(
        "position" => "Chief Executive Officer",
        "gender" => "male"),
    "Yewande Jinadu" => array(
        "position" => "HR Lead",
        "gender" => "female"),
    "Idaraesit Micheal" => array(
        "position" => "Product Manager",
        "gender" => "female"),
    "Fatungase Taiwo" => array(
        "position" => "Project/Admin Manager",
        "gender" => "male"),
    "Nwabueze Miracle" => array(
        "position" => "Tech Lead",
        "gender" => "male"),
    "Isaac Akanni" => array(
        "position" => "Technology Support Lead",
        "gender" => "male"),
    "Adefehinti Michael" => array(
        "position" => "Accountant",
        "gender" => "male"),
    "Rahman Solanke" => array(
        "position" => "Software Engineer",
        "gender" => "male"),
    "Nonso Ngbechi" => array(
        "position" => "Software Engineer",
        "gender" => "male"),
    "Gbenga Owoeye" => array(
        "position" => "Project/ Technical support engineer",
        "gender" => "male"),
    "Aghagha Michealla" => array(
        "position" => "Tech support",
        "gender" => "female"),
    "Onuoha Ugochukwu" => array(
        "position" => "Business Development",
        "gender" => "male"),
    "Ogoru Vanessa" => array(
        "position" => "Admin Officer", 
        "gender" => "female"),
 );
 echo "Energy360 is an IT company digitalizing the fuel space with the creation of amazing products \n aimed at helping fuel retailer to minimize loss, reduce cost and make decisions based on data.\n\n";
 foreach($e360_staff as $name => $details){
     echo $name . " who is a ". $details['gender'] . " is the " . $details['position'] . " at energy360 africa.\n";
 }
?>