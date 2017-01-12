<?php
require_once("../model/databaseconnection.php");
$cmd = $_POST['cmd'];
if($cmd == 'getStatisticData'){

    $start_date = isset($_POST['start_date'])?$_POST['start_date']:'0000-00-00';
    $end_date = isset($_POST['end_date'])?$_POST['end_date']:'9999-12-31';
    if ($start_date>$end_date){
        $temp = $start_date;
        $start_date = $end_date;
        $end_date = $temp;
    }

	$sql = "SELECT total.l_day AS 'day',IF (reg.registered_num IS NULL, 0, reg.registered_num) AS registered_num, 
               IF (unreg.unregistered_num IS NULL, 0, unreg.unregistered_num) AS unregistered_num FROM ";
$sql .="(SELECT DATE(dateTime) AS l_day FROM userLogins  GROUP BY DATE(dateTime) ) AS total LEFT JOIN ";
$sql .=" (SELECT COUNT(DISTINCT userID) AS registered_num ,DATE(dateTime) AS l_day FROM userLogins WHERE ('userID'>'0') GROUP BY DATE(dateTime)) AS reg ON( total.l_day = reg.l_day) LEFT JOIN  ";
$sql .=" (SELECT COUNT(DISTINCT ipAddress) AS unregistered_num ,DATE(dateTime) AS l_day FROM userLogins WHERE ('userID'='0') GROUP BY DATE(dateTime))AS unreg ON( total.l_day = unreg.l_day) ";
$sql .=" WHERE DATE(total.l_day)>='".$start_date."' AND DATE(total.l_day)<='".$end_date."'";
    
	//$sql = "SELECT COUNT(*) as num,DATE(dateTime) as date FROM `userLogins`  WHERE DATE(dateTime)>='".$start_date."' AND DATE(dateTime)<='".$end_date."' and fullname='' GROUP BY DATE(dateTime) ORDER BY DATE(dateTime)";
    $result = $conn->query($sql);
    $labels =array();
    $registered_data = array();
    $unregistered_data = array();
    
    while ($row = $result->fetch_assoc()) {
        $labels[] = $row['day'];
        $registered_data[] = $row['registered_num'];
        $unregistered_data[] = $row['unregistered_num'];
    }
    echo json_encode(array('labels'=>$labels,'registered_data'=>$registered_data,
	'unregistered_data'=>$unregistered_data));die();
}
if($cmd == 'getMostRecentSearchTermsData'){

    $sql = "SELECT * from userSearches";
    $result = $conn->query($sql);
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);die();
}
if($cmd == 'getTopClickData'){

    $sql = "SELECT * from sweep_draw_user_unencrypted ORDER BY pointsClick ASC ";
    $result = $conn->query($sql);
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);die();
}
if($cmd == 'getActiveUserData'){

    $sql = "SELECT COUNT(*) as lognum,autoID,userID,fullname,ipAddress,dateTime,http_referer,userDevice FROM userLogins GROUP BY userID";
    $result = $conn->query($sql);
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);die();
}
if($cmd == 'getReferersData'){

    $sql = "SELECT http_referer,autoID,userID,fullname,ipAddress,dateTime,http_referer,userDevice FROM userLogins";
    $result = $conn->query($sql);
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);die();
}
if($cmd == 'getUsersForDate'){
    // $date_param = $_POST['date_param'];
    // $sql = "SELECT * FROM userLogins where DATE(dateTime) LIKE '".$date_param."'";
    // $result = $conn->query($sql);
    // $data = array();
    // while ($row = $result->fetch_assoc()) {
        // $data[] = $row;
    // }
    // echo json_encode($data);die();
    if (isset($_POST['date_param'])){
    	$date_cond =  " DATE(dateTime) LIKE '".$_POST['date_param']."'";
    }else{
    	$date_cond = " 1 == 0 ";
    }
	//$date_cond = " DATE(dateTime) LIKE '2016-11-19'";
	$requestData= $_REQUEST;

$columns = array( 
// datatable column index  => database column name
	0 =>'autoID', 
	1 => 'userID',
	2=> 'fullname',
	3=> 'ipAddress',
	4 => 'dateTime',
	5 => 'userDevice',
	6 => 'http_referer'
);
$tablename = "userLogins";
$columns_str = "autoID,userID,fullname,ipAddress,dateTime,userDevice,http_referer";
// getting total number records without any search
$sql = "SELECT ".$columns_str;
$sql.=" FROM ".$tablename;
$sql.=" WHERE ".$date_cond;
$query=mysqli_query($conn, $sql) or die("referers.php: get employees");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.

$sql = "SELECT ".$columns_str;
$sql.=" FROM ".$tablename." WHERE 1=1";
$sql.=" AND (".$date_cond.") ";    
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND (autoID LIKE '".$requestData['search']['value']."%' ";    
	$sql.=" OR userID LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR fullname LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR ipAddress LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR dateTime LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR userDevice LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR http_referer LIKE '".$requestData['search']['value']."%' )";
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

echo json_encode($json_data);  die();// send data as json format
}

?>