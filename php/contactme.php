<?php 

    $value = array("name"=>"",
                   "email"=>"",
                   "phone"=>"",
                   "subject"=>"",
                   "comment"=>"",
                  "success"=> false);
    
    $to = "christophe.cr.dev@gmail.com";
    $emailtxt = "";

    if($_SERVER['REQUEST_METHOD'] == "POST"){ //Si soumission des données
        $value["name"] = sanitize_input($_POST['name']);
        $value["email"] = sanitize_input($_POST['email']);
        $value["email"] = filter_var($value["email"], FILTER_SANITIZE_EMAIL);
        $value["phone"] = sanitize_input($_POST['phone']);
        $value["subject"] = sanitize_input($_POST['subject']);
        $value["comment"] = sanitize_input($_POST['comment']);
        $value["success"] = validation();
    }

    echo json_encode($value);

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
            global $value,$emailtxt,$to;
            $emailtxt .= "Name : ".$value["name"]."\n";
            $emailtxt .= "Subject :". $value["subject"]."\n";
            $emailtxt .= "Phone : ".$value["phone"]."\n";
            $emailtxt .= "Message :". $value["comment"]."\n";
            $emailtxt .= "Email :". $value["email"]."\n";
            $header = "From:".$value["name"] ." <".$value["email"].">\r\nReply-To:".$value["email"];
            mail($to,"MESSAGE CV",$emailtxt, $header);
            $value["name"] = $value["email"] = $value["phone"] = $value["subject"] = $value["comment"] = $emailtxt = "";
        }
    }

    function validation(){
        global $value;
        return !filter_var($value["email"] , FILTER_VALIDATE_EMAIL) === false and 
            !isHTML($_POST['name'])and 
            !isHTML($_POST['email'])and 
            !isHTML($_POST['phone'])and 
            !isHTML($_POST['subject'])and
            !isHTML($_POST['comment']) and 
            strlen($value["name"]) > 3 and
            strlen($value["name"]) < 25 and 
            strlen($value["comment"]) > 3; 
    }
?>
