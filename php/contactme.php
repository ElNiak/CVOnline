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

//TODO
//https://pear.php.net/package/Mail/download/1.4.0
///usr/local/pear/bin/pear
function send_mail_pear(){
    if(validation()){
	$path = '/usr/share/pear';
	set_include_path(get_include_path() . PATH_SEPARATOR . $path);
     // Pear Mail Library
    include('Mail.php');
    global $name,$email,$phone,$subject,$comment;
    $to = "<christophe.cr.dev@gmail.com>";
    $from = "<$email>";
    $headers = array(
        'From' => $from,
        'To' => $to,
        'Subject' => $subject
    );

    $smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465', //587
        'auth' => true,
        'username' => 'mail.crdev@gmail.com',
        'password' => 'clubdes3c'
    ));

	$emailtxt = "";
        $emailtxt .= "Name : $name\n";
        $emailtxt .= "Subject : $subject\n";
        $emailtxt .= "Phone : $phone\n";
	$emailtxt .= "Email : $email\n";
        $emailtxt .= "Message :\n\n $comment\n\n";


    $mail = $smtp->send($to, $headers, $emailtxt);

    if (PEAR::isError($mail)) {
        echo('<p>' . $mail->getMessage() . '</p>');
    } else {
    }   
    }
    else {
        echo('<p>Errors</p>');
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
        strlen($GLOBALS['comment']) > 3;
}

?>
