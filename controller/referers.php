<?php

require_once("../model/databaseconnection.php");


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;

$columns = array( 
// datatable column index  => database column name
	0 =>'http_referer', 
	1 => 'autoID',
	2=> 'userID',
	3 => 'fullname',
	4 => 'ipAddress',
	5 => 'DATETIME',
	6 => 'userDevice'
);
$tablename = "userLogins";
$columns_str = "http_referer,autoID,userID,fullname,ipAddress,DATETIME,userDevice";
// getting total number records without any search
$sql = "SELECT ".$columns_str;
$sql.=" FROM ".$tablename;
$query=mysqli_query($conn, $sql) or die("referers.php: get employees");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT ".$columns_str;
$sql.=" FROM ".$tablename." WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( http_referer LIKE '".$requestData['search']['value']."%' ";    
	$sql.=" OR autoID LIKE '".$requestData['search']['value']."%' ";

	$sql.=" OR userID LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR fullname LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR ipAddress LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR DATETIME LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR userDevice LIKE '".$requestData['search']['value']."%' )";
}
$query=mysqli_query($conn, $sql) or die("referers.php: get employees");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("referers.php: get employees");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["http_referer"];
	$nestedData[] = $row["autoID"];
	$nestedData[] = $row["userID"];
	$nestedData[] = $row["fullname"];
	$nestedData[] = $row["ipAddress"];
	$nestedData[] = $row["DATETIME"];
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
