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
        if($value->Email == $useremail){
            $_SESSION['errors'] = true;
            $_SESSION['errMsg'] = 'Utilizator existent!';
            echo "<script>
            document.location='../site/register.php';
            </script>";
            return;
        }
    }

    $userList[] = ['Email' => $useremail, 'Parola' => $userpassword];
    $extractJson = json_encode($userList);
    file_put_contents('../bazadedate/bdate.json', $extractJson);
    $_SESSION['errors'] = false;

    echo "<script>
        alert('Inregistrat cu succes');
        document.location='../site/login_page.php';
        </script>";
}
?>