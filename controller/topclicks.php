<?php

require_once("../model/databaseconnection.php");

// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;

$columns = array( 
// datatable column index  => database column name
	0 =>'pointsClick', 
	1 => 'id',
	2=> 'fullname',
	3=> 'username',
	4 => 'email_address',
	5 => 'street_address',
	6 => 'city',
	7 => 'country',
	8 => 'gender',
);
$tablename = "sweep_draw_user_unencrypted";
$columns_str = "pointsClick,id,fullname,username,email_address,street_address,city,country,gender";
// getting total number records without any search
$sql = "SELECT ".$columns_str;
$sql.=" FROM ".$tablename;
$sql.=" ORDER BY pointsClick ASC ";
$query=mysqli_query($conn, $sql) or die("referers.php: get employees");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT ".$columns_str;
$sql.=" FROM ".$tablename." WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( country LIKE '".$requestData['search']['value']."%' ";    
	$sql.=" OR pointsClick LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR username LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR id LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR fullname LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR email_address LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR street_address LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR city LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR gender LIKE '".$requestData['search']['value']."%' )";
}
$query=mysqli_query($conn, $sql) or die("referers.php: get employees");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	

$query=mysqli_query($conn, $sql) or die("referers.php: get employees");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 
    foreach ($columns as $key => $value) {
        $nestedData[] = $row[$value];
    }
	$data[] = $nestedData;
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
