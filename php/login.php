<?php 
session_start();

if (count($_POST)){

    $extractJson = file_get_contents("../bazadedate/bdate.json");
    $userList = json_decode($extractJson);

    $useremail = isset($_POST['iemail']) ? $_POST['iemail'] : '';
    $userpassword = isset($_POST['ipassword']) ? $_POST['ipassword'] : '';

    foreach($userList as $value){
        if($value->Email == $useremail && $value->Parola == $userpassword){
            $_SESSION['conUser'] = $useremail;
            echo false;
            return;
        }
    }
    echo true;
}
?>