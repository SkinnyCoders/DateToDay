<?php 
//post data
$id = $_POST['id'];

//convert date to day format
$hari = DateTime::createFromFormat('m/d/Y', $id)->format('l');

//prepare the data
$data = [
'hari' => $hari
];

//formating json
echo json_encode($data);

// Follow me at IG @rzkrsnt :) te Amo
 ?>