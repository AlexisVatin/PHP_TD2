<?php
    $pwd=$_POST['pwd'];
    $verifPwd=$_POST['verifPwd'];
    $action=$_POST['action'];
    $mail=$_POST['mail'];
    $id=$_POST['id'];


    if($action == 'mailer')
    {
        if ($pwd == $verifPwd) {
            $message1 .= 'Voici vos identifiants d\'inscription :' . PHP_EOL;
            $message2 .= 'Id : ' . $id . PHP_EOL;
            $message3 .= 'Email : ' . $mail . PHP_EOL;
            $message4 .= 'Mot de passe : ' . PHP_EOL . $pwd;
            echo '  <br/><strong>' . $message1 . '</strong><br/>
               <br/><strong>' . $message2 . '</strong><br/>
               <br/><strong>' . $message3 . '</strong><br/>
               <br/><strong>' . $message4 . '</strong><br/>
               <br /><a href="index.php"> Revenir au formulaire </a> <br />';
        }
        else {
            session_start();
            $_SESSION['erreur'] = true;
            header('Location: index.php');
        }
    }
    else
    {
        echo '<br/><strong>Bouton non géré !</strong><br/>';
    }



?>