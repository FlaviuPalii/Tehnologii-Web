<?php 
session_start();

if (count($_POST)){

    $extractJson = file_get_contents("../bazadedate/bdate.json");
    $userList = json_decode($extractJson);

    $useremail = isset($_POST['iemail']) ? $_POST['iemail'] : '';
    $userpassword = isset($_POST['ipassword']) ? $_POST['ipassword'] : '';

    foreach($userList as $value){
        if($value->Email == $useremail){
            echo true;
            return;
        }
    }

    $userList[] = ['Email' => $useremail, 'Parola' => $userpassword];
    $extractJson = json_encode($userList);
    file_put_contents('../bazadedate/bdate.json', $extractJson);
    echo false;
}
?>