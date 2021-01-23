<!DOCTYPE html> 
<html lang="en">
    <head>
        <title>Log/Monitor CV</title>
        <meta charset="uft-8">
        <!-- Important pour boostrap : permet d'adapter la taille de l'ecran a la page -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <!-- Pour glyphicon -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Font : --> 
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <!-- Local import : -->
        <link href="/css/style.css" rel="stylesheet">
        <link rel="shortcut icon" type="/image/png" href="/images/favicon.png"/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="/js/script.js"></script>
        <!-- TODO : Rajouter protection via alert dialog -->
    </head>
    <body id="top">
        <div class="text-center">
            <a id="up" href="#resume">
                <span class="fa fa-chevron-down"></span>
            </a>
            <h6>Resume</h6>
        </div >

        <br>
        <div class="row container" style="text-align: center;margin: 0 auto;">

            <div class="col-md-6">
                <h2> Access </h2>
                <?php
                $iptableEr = array();
                $iptable = array();

                function highlight($text,$mode) {
                    global $iptable,$iptableEr;
                    $reg_exIp = "/\b\d{0,255}\.\d{0,255}\.\d{0,255}\.\d{0,255}\b/";
                    if(preg_match($reg_exIp , $text, $ip)) {
                        if(!in_array($ip[0],$iptable) &&  $mode) 
                            $iptable[] = $ip[0];
                        else if(!in_array($ip[0],$iptableEr) && !$mode) 
                            $iptableEr[] = $ip[0];
                        echo preg_replace($reg_exIp, "<b>{$ip[0]}</b> ", $text);
                    } else {
                        echo $text;
                    }		
                }

                if ($fh = fopen('log/cv-access.log', 'r')) {
                    while (!feof($fh)) {
                        global $iptable,$finish;
                        $line =  fgets($fh);
                        //echo print_r($iptable);
                        if(strpos($line, "GET") === false) {
                            echo "<p class='req' style='text-align: left; color: red;'>";
                            highlight($line,true);
                            echo "<br></p>"; 
                        }
                        else  {
                            echo "<p class='req' style='text-align: left; color: green;'>";
                            highlight($line,true);
                            echo "<br></p>"; 
                        }

                    }
                    fclose($fh);
                }
                ?>
            </div>

            <div class="col-md-6">
                <h2> Errors  </h2>
                <?php //TODO : creer des cards bootstrap
                if ($fh = fopen('log/cv-error.log', 'r')) {
                    while (!feof($fh)) {
                        $line = fgets($fh);
                        echo "<p class='req' style='text-align: left; color: black;'>";
                        highlight($line,false);
                        echo "<br></p>"; 
                    }
                    fclose($fh);
                }
                ?>                             
            </div>
            <div class="col-md-12">
                <br>
                <h2> Resume :</h2>
            </div>


            <div class="col-md-6" id="resume">
                <br>
                <div class="card shadow">
                    <div class="card-header" style="font-weight: bold; font-size: 22px;">Last IP access</div>
                    <ul id="list" class="list-group list-group-flush"> 
                        <?php
                        foreach($iptable as &$value) {
			    $command = "curl http://api.db-ip.com/v2/free/".$value;
                            echo "<li class='list-group-item' style='text-align: center;'>".$value. "<br>". shell_exec($command) . "</li>";
                        }
                        ?>  
                    </ul> 
                </div>
            </div>
            
             <div class="col-md-6" id="resume">
                <br>
                <div class="card shadow">
                    <div class="card-header" style="font-weight: bold; font-size: 22px;">Last IP error</div>
                    <ul id="list" class="list-group list-group-flush"> 
                        <?php
                        foreach($iptableEr as &$value) {
			    $command = "curl http://api.db-ip.com/v2/free/".$value;
                            echo "<li class='list-group-item' style='text-align: center;'>".$value."<br>". shell_exec($command) ."</li>";
                        }
                        ?>  
                    </ul> 
                </div>
            </div>
        </div>

        <footer class="text-center">
            <a id="up" href="#top">
                <span class="fa fa-chevron-up"></span>
            </a>
            <h5>@ 2019 Crochet Christophe </h5>
            <h6>Run on RaspberryPi 2B+</h6>
        </footer>
        <script>
            $('body').on('click', function(){
                $('.navbar-collapse').collapse('hide');
            });
        </script>

    </body>
</html>