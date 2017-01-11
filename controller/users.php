<?php
require("../model/databaseconnection.php");
$cmd = $_POST['cmd'];
if ($cmd == 'getUserData') {
    session_start();
    $_SESSION["user_id"] = isset($_SESSION["user_id"]) ? $_SESSION["user_id"] : 0;
    $_SESSION["search_term"] = isset($_SESSION["search_term"]) ? $_SESSION["search_term"] : '';
    $_SESSION["user_id"] = isset($_POST['user_id']) ? $_POST['user_id'] : $_SESSION["user_id"];
    $_SESSION["search_term"] = isset($_POST['search_term']) ? $_POST['search_term'] : $_SESSION["search_term"];

    $serach_term = "'%" . $_SESSION["search_term"] . "%'";
    $user_id = $_SESSION["user_id"];

    if ($_SESSION['user_id'] == 0) {
        $sql = "SELECT * FROM sweep_draw_user_unencrypted WHERE gender LIKE $serach_term or fullname LIKE $serach_term or ".
            "email_address  LIKE $serach_term or birthday LIKE $serach_term or phone LIKE $serach_term or street_address LIKE $serach_term or city LIKE $serach_term or ".
            "state LIKE $serach_term or zip LIKE $serach_term or country LIKE $serach_term";
        $result = $conn->query($sql);
        if ($result->num_rows > 1) {
            // output data of each row
//            while ($row = $result->fetch_assoc()) {
//                echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
//            }
            $current = $result->fetch_assoc();
            $_SESSION["user_id"] = $current['id'];
            $next = $result->fetch_assoc();
            $data = array('prev'=>null,'next'=>$next['id'],'data'=>$current);
            echo json_encode($data);die();
        }
        if ($result->num_rows == 1) {
            $current = $result->fetch_assoc();
            $_SESSION["user_id"] = $current['id'];
            $data = array('prev'=>null,'next'=>null,'data'=>$current);
            echo json_encode($data);die();
        }
        if ($result->num_rows == 0) {
            $data = array('prev'=>null,'next'=>null,'data'=>null);
            echo json_encode($data);die();
        }
        $conn->close();
    } else {

        $sql = "SELECT * FROM sweep_draw_user_unencrypted WHERE gender LIKE $serach_term or fullname LIKE $serach_term or ".
            "email_address  LIKE $serach_term or birthday LIKE $serach_term or phone LIKE $serach_term or street_address LIKE $serach_term or city LIKE $serach_term or ".
            "state LIKE $serach_term or zip LIKE $serach_term or country LIKE $serach_term";
        $result = $conn->query($sql);
        if ($result->num_rows > 1) {
            // output data of each row
            $next = null;
            $prev = null;
            $current = null;
            while ($row = $result->fetch_assoc()) {
                if ($row['id'] == $user_id){
                    $current = $row;
                    $_SESSION["user_id"] = $current['id'];
                    break;
                }
                $prev = $row;
            }
            $next = $result->fetch_assoc();
            $prev_id = isset($prev)?$prev['id']:null;
            $next_id = isset($next)?$next['id']:null;
            $data = array('prev'=>$prev_id,'next'=>$next_id,'data'=>$current);
            echo json_encode($data);die();
        }
        if ($result->num_rows == 1) {
            $current = $result->fetch_assoc();
            $_SESSION["user_id"] = $current['id'];
            $data = array('prev'=>null,'next'=>null,'data'=>$current);
            echo json_encode($data);die();
        }
        if ($result->num_rows == 0) {
            $data = array('prev'=>null,'next'=>null,'data'=>null);
            echo json_encode($data);die();
        }
        $conn->close();
    }
}
if ($cmd == 'saveUserData') {
    $data = $_POST['data'];
    $id = $data['id'];
    $gender ="'".$data['gender']."'";
    $fullname ="'".$data['full_name']."'";
    $email ="'".$data['email']."'";
    $birthday = "'".$data['birthday']."'";
    $phone ="'".$data['phone']."'";
    $address ="'".$data['address']."'";
    $city ="'".$data['city']."'";
    $provincestate = "'".$data['provincestate']."'";
    $postalzipcode = "'".$data['postalzipcode']."'";
    $country = "'".$data['country']."'";
    $password = "'".$data['password']."'";
    if ($password !=''){
        $sql = "update sweep_draw_user_unencrypted set gender =$gender,fullname = $fullname,email_address = $email,birthday  = $birthday,phone = $phone,street_address = $address,state = $provincestate,".
            " zip = $postalzipcode,country = $country,password = $password, city = $city where id = $id";
    }else{
        $sql = "update sweep_draw_user_unencrypted set gender =$gender,fullname = $fullname,email_address = $email,birthday  = $birthday,phone = $phone,street_address = $address,state = $provincestate,".
            " zip = $postalzipcode,country = $country, city = $city where id = $id";
    }
    $result = $conn->query($sql);
    echo json_encode($result);die();
}
?>