<?php

require("../model/databaseconnection.php");
$cmd = $_POST['cmd'];
if ($cmd == 'getValidationData') {
    session_start();
    $_SESSION["validation_id"] = isset($_SESSION["validation_id"]) ? $_SESSION["validation_id"] : 0;
    $_SESSION["search_term_v"] = isset($_SESSION["search_term_v"]) ? $_SESSION["search_term_v"] : '';
    $_SESSION["validation_id"] = isset($_POST['validation_id']) ? $_POST['validation_id'] : $_SESSION["validation_id"];
    $_SESSION["search_term_v"] = isset($_POST['search_term_v']) ? $_POST['search_term_v'] : $_SESSION["search_term_v"];

    $serach_term = "'%" . $_SESSION["search_term_v"] . "%'";
    $validation_id = $_SESSION["validation_id"];

    if ($_SESSION['validation_id'] == 0) {
        $sql = "SELECT * FROM sweep_draw_contest WHERE url LIKE $serach_term or emailcontact LIKE $serach_term or ".
            "notes  LIKE $serach_term or title LIKE $serach_term or start_date LIKE $serach_term or end_date LIKE $serach_term or prize_value LIKE $serach_term or ".
            "sponsor LIKE $serach_term or sponsor_website LIKE $serach_term or description LIKE $serach_term or countries LIKE $serach_term or states LIKE $serach_term or ages LIKE $serach_term or excluding LIKE $serach_term or frequency LIKE $serach_term or frequency_period LIKE $serach_term or frequency_options LIKE $serach_term or types LIKE $serach_term or category LIKE $serach_term or prizes LIKE $serach_term or keywords LIKE $serach_term or entry_link LIKE $serach_term".
            " or rules_link LIKE $serach_term or winners_link LIKE $serach_term";

        $result = $conn->query($sql);
        if ($result->num_rows > 1) {
            // output data of each row
//            while ($row = $result->fetch_assoc()) {
//                echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
//            }
            $current = $result->fetch_assoc();
            $_SESSION["validation_id"] = $current['id'];
            $next = $result->fetch_assoc();
            $data = array('prev'=>null,'next'=>$next['id'],'data'=>$current);
            echo json_encode($data);die();
        }
        if ($result->num_rows == 1) {
            $current = $result->fetch_assoc();
            $_SESSION["validation_id"] = $current['id'];
            $data = array('prev'=>null,'next'=>null,'data'=>$current);
            echo json_encode($data);die();
        }
        if ($result->num_rows == 0) {
            $data = array('prev'=>null,'next'=>null,'data'=>null);
            echo json_encode($data);die();
        }
        $conn->close();
    } else {

        $sql = "SELECT * FROM sweep_draw_contest WHERE url LIKE $serach_term or emailcontact LIKE $serach_term or ".
            "notes  LIKE $serach_term or title LIKE $serach_term or start_date LIKE $serach_term or end_date LIKE $serach_term or prize_value LIKE $serach_term or ".
            "sponsor LIKE $serach_term or sponsor_website LIKE $serach_term or description LIKE $serach_term or countries LIKE $serach_term or states LIKE $serach_term or ages LIKE $serach_term or excluding LIKE $serach_term or frequency LIKE $serach_term or frequency_period LIKE $serach_term or frequency_options LIKE $serach_term or types LIKE $serach_term or category LIKE $serach_term or prizes LIKE $serach_term or keywords LIKE $serach_term or entry_link LIKE $serach_term".
            " or rules_link LIKE $serach_term or winners_link LIKE $serach_term";
        $result = $conn->query($sql);
        if ($result->num_rows > 1) {
            // output data of each row
            $next = null;
            $prev = null;
            $current = null;
            while ($row = $result->fetch_assoc()) {
                if ($row['id'] == $validation_id){
                    $current = $row;
                    $_SESSION["validation_id"] = $current['id'];
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
            $_SESSION["validation_id"] = $current['id'];
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
if ($cmd == 'saveValidationData') {
    $image = '';
    if (isset($_FILES['image'])){
        $sourcePath = $_FILES['image']['tmp_name'];       // Storing source path of the file in a variable
        $targetPath = "../uploads/".random_string(10).$_FILES['image']['name']; // Target path where file is to be stored
        $image = "'".$targetPath."'";
        move_uploaded_file($sourcePath,$targetPath) ;    // Moving Uploaded file
    }
    $sponsor_logo = '';
    if (isset($_FILES['sponsor_logo'])){
        $sourcePath = $_FILES['sponsor_logo']['tmp_name'];       // Storing source path of the file in a variable
        $targetPath = "../uploads/".random_string(10).$_FILES['sponsor_logo']['name']; // Target path where file is to be stored
        $sponsor_logo = "'".$targetPath."'";
        move_uploaded_file($sourcePath,$targetPath) ;    // Moving Uploaded file
    }

    $id = "'".$_POST['id']."'";
    $url ="'".$_POST['url']."'";
    $emailcontact = "'".$_POST['emailcontact']."'";
    $notes = "'".$_POST['notes']."'";
    $title = "'".$_POST['title']."'";
    $start_date = "'".$_POST['start_date']."'";
    $end_date = "'".$_POST['end_date']."'";
    $prize_value = "'".$_POST['prize_value']."'";
    $sponsor = "'".$_POST['sponsor']."'";
    $sponsor_website = "'".$_POST['sponsor_website']."'";
    $description = "'".$_POST['description']."'";
    $countries = "'".$_POST['countries']."'";
    $states = "'".$_POST['states']."'";
    $ages = "'".$_POST['ages']."'";
    $excluding = "'".$_POST['excluding']."'";
    $frequency = "'".$_POST['frequency']."'";
    $frequency_period = "'".$_POST['frequency_period']."'";
    $frequency_options = "'".$_POST['frequency_options']."'";
    $types = "'".$_POST['types']."'";
    $category = "'".$_POST['category']."'";
    $prizes = "'".$_POST['prizes']."'";
    $keywords = "'".$_POST['keywords']."'";
    $entry_link = "'".$_POST['entry_link']."'";
    $rules_link = "'".$_POST['rules_link']."'";
    $winners_link = "'".$_POST['winners_link']."'";

        $sql = "update sweep_draw_contest set url = $url,emailcontact = $emailcontact,notes  = $notes,title = $title,start_date = $start_date,end_date = $end_date,".
            " prize_value =$prize_value,sponsor = $sponsor,sponsor_website = $sponsor_website,description  = $description,countries = $countries,states = $states,ages = $ages,".
            " excluding =$excluding,frequency = $frequency,frequency_period = $frequency_period,frequency_options  = $frequency_options,types = $types,category = $category,prizes = $prizes,".
            " keywords =$keywords,entry_link = $entry_link,rules_link = $rules_link,winners_link  = $winners_link, image = $image,sponsor_logo = $sponsor_logo where id = $id";
    $result = $conn->query($sql);
    echo json_encode($result);die();
}
if ($cmd =='setApprove'){
    $id = $_POST['id'];
    $param = $_POST['param'];
    if ($param == 'approve'){
        $sql = "update sweep_draw_contest set votes =0 where id = $id";
    }else{
        $sql = "update sweep_draw_contest set votes =2 where id = $id";
    }
    $result = $conn->query($sql);
    echo json_encode($result);die();
}
if ($cmd =='deleteValidationData'){
    $id = $_POST['id'];
    $sql = "delete from sweep_draw_contest where id = $id";
    $result = $conn->query($sql);
    echo json_encode($result);die();
}
function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}
?>