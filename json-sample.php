<?php
header('Content-Type: application/json');
$reply = array (
  array (
    "dealer" => "BMW of Minnetonka",
    "address" => "Minnetonka, MN",
    "distance" => 155,
    "distance_unit" => "miles",
    "dealerId" => 119
  ),
  array (
    "dealer" => "Motorwerks BMW",
    "address" => "Bloomington, MN",
    "distance" => 158,
    "dealerId" => 120
  ),
  array (
    "dealer" => "Park Place Motor Cars",
    "address" => "Rochester, MN",
    "distance" => 201,
    "dealerId" => 121
  ),
);
echo json_encode($reply);