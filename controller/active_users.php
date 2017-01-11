<?php

require_once("../model/databaseconnection.php");


/* Database connection end */

// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;
$columns = array( 
// datatable column index  => database column name
	0 =>'lognum',
	1 =>'http_referer', 
	2 => 'autoID',
	3=> 'userID',
	4 => 'fullName',
	5 => 'ipAddress',
	6 => 'dateTime',
	8 => 'userDevice'
);
$tablename = "userLogins";
$columns_str = " COUNT(*) as lognum,autoID,userID,fullName,ipAddress,dateTime,http_referer,userDevice ";
// getting total number records without any search
$sql = "SELECT ".$columns_str;
$sql.=" FROM ".$tablename;
$sql.=" GROUP BY userID";
$query=mysqli_query($conn, $sql) or die("referers.php: get employees");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT ".$columns_str;
$sql.=" FROM ".$tablename." WHERE 1=1";

if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( http_referer LIKE '".$requestData['search']['value']."%' ";    
	// $sql.=" OR autoID LIKE '".$requestData['search']['value']."%' ";

	$sql.=" OR userID LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR fullName LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR ipAddress LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR dateTime LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR http_referer LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR userDevice LIKE '".$requestData['search']['value']."%' )";
}
$sql.=" GROUP BY userID";
$query=mysqli_query($conn, $sql) or die("referers.php: get employees");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("referers.php: get employees");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 
    $nestedData[] = $row["lognum"];
	$nestedData[] = $row["http_referer"];
	$nestedData[] = $row["autoID"];
	$nestedData[] = $row["userID"];
	$nestedData[] = $row["fullName"];
	$nestedData[] = $row["ipAddress"];
	$nestedData[] = $row["dateTime"];
	$nestedData[] = $row["userDevice"];
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

