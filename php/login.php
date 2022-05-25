<?php 
session_start();
$_SESSION['errors'] = true;
$_SESSION['errMsg'] = '';

if (count($_POST)){

    $extractJson = file_get_contents("../bazadedate/bdate.json");
    $userList = json_decode($extractJson);

    $useremail = isset($_POST['iemail']) ? $_POST['iemail'] : '';
    $userpassword = isset($_POST['ipassword']) ? $_POST['ipassword'] : '';

    foreach($userList as $value){

        echo "<script>console.log('# $value->Email');</script>";

        if($value->Email == $useremail && $value->Parola == $userpassword){
            $_SESSION['errors'] = false;
            $_SESSION['conUser'] = $useremail;
            echo "<script>
                alert('Logat cu succes!'); 
                document.location='../homepage.php';
                </script>";
            break;
        }
    }
    if($_SESSION['errors'] == true){
        $_SESSION['errMsg'] = 'Utilizator inexistent!';
        header("Location: ../site/login_page.php");
    }
}
?>