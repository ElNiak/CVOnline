<?php 

    $name = $email = $phone = $subject = $comment = "";

    if($_SERVER['REQUEST_METHOD'] == "POST"){ //Si soumission des données
        $name = sanitize_input($_POST['name']);
        $email = sanitize_input($_POST['email']);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $phone = sanitize_input($_POST['phone']);
        $subject = sanitize_input($_POST['subject']);
        $comment = sanitize_input($_POST['comment']);
    }

    function sanitize_input($var){
        $var = trim($var); //enleve tout caractere speciaux e.g \n \t ...
        $var = stripcslashes($var); //retire tous les '\'
        $var = filter_var($var, FILTER_SANITIZE_STRING);
        $var = htmlspecialchars($var); //evite que l'input devienne de l'htmlentities
        return $var;
    }
    
    function isHTML($string){
        return $string != strip_tags($string) ? true:false;
    }

    function send_mail(){
        global $name,$email,$phone,$subject,$comment;
        if(validation()){
            $to = "christophe.cr.dev@gmail.com";
            $emailtxt = "";
            $emailtxt .= "Name : $name\n";
            $emailtxt .= "Subject : $subject\n";
            $emailtxt .= "Phone : $phone\n";
            $emailtxt .= "Message : $comment\n";
            $emailtxt .= "Email : $email\n";
            $header = "From:$name <$email>\r\nReply-To:$email";
            mail($to,"MESSAGE CV",$emailtxt, $header);
            $name = $email = $phone = $subject = $comment = "";
        }
    }

    function validation(){
        return !filter_var($GLOBALS['email'], FILTER_VALIDATE_EMAIL) === false and 
            !isHTML($_POST['name'])and 
            !isHTML($_POST['email'])and 
            !isHTML($_POST['phone'])and 
            !isHTML($_POST['subject'])and
            !isHTML($_POST['comment']) and 
            strlen($GLOBALS['name']) > 3 and
            strlen($GLOBALS['name']) < 25 and 
            strlen($GLOBALS['comment']) > 3 and 
            strlen($GLOBALS['comment']) < 25;
    }
?>
