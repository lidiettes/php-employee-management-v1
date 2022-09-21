

<?php 
$error;
// He renombrado las variables del parámetro para poder chekear las condiciones
function loginAdmin($postUser, $postPass) {
        session_start();

        $usersJson = file_get_contents('../../resources/users.json');
        $jsonData = json_decode($usersJson,true)['users'];
    
        if ($postUser === '' || $postPass === ''){
            $error = 'nodata';

            header("Location: ../../index.php?error=$error");
            exit();      

        } else {
            foreach ($jsonData as $json) {
                // El User debería acceder con el email y el username(doble statement)
                if (($postUser === $json['name']) || 
                    ($postUser === $json['email'])) {
                    if (password_verify($postPass, $json['password'])){
                        echo json_encode('OK');

                        // Session Id para comprobar si la session está seteada(iniciada) o no
                        $userID = $json['userId'];
                        $_SESSION['user'] = $userID;

                        header("Location: ../dashboard2.php");
                    } else {
                        $error = 'incomplete';

                        header("Location: ../../index.php?error=$error");
                        exit();
                    }
                } else {
                    $error = 'incomplete';
                        header("Location: ../../index.php?error=$error");
                        exit();
                }
            }
    }
}

function userISSET() {
        if (!isset($_SESSION['user'])) {
            header('location: ../index.php');
        }
    }
?>
