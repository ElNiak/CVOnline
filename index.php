<?php include("php/contactme.php"); ?>
<!DOCTYPE html> 
<html lang="en">
    <head>
        <title>Curriculum vitae Crochet Christophe</title>
        <meta charset="uft-8">
        <!-- Important pour boostrap : permet d'adapter la taille de l'ecran a la page -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="wot-verification" content="5464c50f79eeae8b561f"/>
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
        <script>
            $('body').on('click', function(){
                $('.navbar-collapse').collapse('hide');
            });
        </script>
    </head>
    <body data-spy="scroll" data-target=".navbar">
        <?php include("navbar.php"); ?>
        <section id="aboutme" class="container-fluid">
            <div class="col-xs-8 col-md-4 profile-pict">
                <img alt="Me"  src="/images/profil.jpg" class="img-fluid rounded-circle">
            </div>
            <div class="heading">
                <h1 style="color: white">Crochet Christophe</h1>
                <h3 style="text-transform: uppercase">Computer scientist</h3>
                <hr class="divider">
                <a href="/docs/CV.pdf"  target="_blank" class="button1">Download CV</a>
            </div>
        </section>
        <section id="skills" class="container">
            <div class="container">
                <div class="heading">
                    <hr class="divider" style="border-top: 1px solid  #d82c2e;">
                    <h2>Main skills</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 90% ">
                                <p class="justify-content-center d-flex position-absolute w-100">Java</p> 
                            </div>
                        </div>
                        <br>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%">
                                <p class="justify-content-center d-flex position-absolute w-100">Android Dev</p>
                            </div>
                        </div>
                        <br>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%">
                                <p class="justify-content-center d-flex position-absolute w-100">SQL</p></div>
                        </div>
                        <br>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 70%">
                                <p class="justify-content-center d-flex position-absolute w-100">C</p>
                            </div>
                        </div>
                        <br>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%">
                                <p class="justify-content-center d-flex position-absolute w-100">JS</p>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%">
                                <p class="justify-content-center d-flex position-absolute w-100">Python</p>
                            </div>
                        </div>
                        <br>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 70%">
                                <p class="justify-content-center d-flex position-absolute w-100">Scala</p>
                            </div>
                        </div>
                        <br>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%">
                                <p class="justify-content-center d-flex position-absolute w-100" style="color: black">CSS/HTML</p>
                            </div>
                        </div>
                        <br>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%">
                                <p class="justify-content-center d-flex position-absolute w-100" style="color: black">BootStrap v3-4</p>
                            </div>
                        </div>
                        <br>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%">
                                <p class="justify-content-center d-flex position-absolute w-100">PHP</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="heading">
                    <h5>What can I do ?</h5>
                </div>
                <div class="container">
                    <div class="card-deck">
                        <div class="card border-danger sm-6 mb-4 mx-auto" style="max-width: 18rem;">
                            <div class="card-header">Android Apps</div>
                            <div class="card-body text-danger">
                                <p class="card-text">
                                    From instance, I produce two Android Apps as project for univertity and some others from myself. I really enjoy producing and designing smart and elegant apps
                                </p>
                            </div>
                        </div>
                        <div class="card border-danger sm-6 mb-4 mx-auto" style="max-width: 18rem;">
                            <div class="card-header">Web Dev/Full Stack</div>
                            <div class="card-body text-danger">
                                <p class="card-text">
                                    I took some course to produce web site (simple design or Bootstrap) from A to Z, including front-end (HTML/CSS/JS/jQuery) and back-end (PHP/SQL/MongoDB and bases of NodeJS). I also know how to bascally configure an Apache2 server.
                                </p>
                            </div>
                        </div>
                        <div class="card border-danger sm-6 mb-4 mx-auto" style="max-width: 18rem;">
                            <div class="card-header">Software Design/OOP</div>
                            <div class="card-body text-danger">
                                <p class="card-text">
                                    Pattern design and maintainable code concepts are now part of me. I can design software, including the databases and all the services asked using skills learn such as diagrams.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-deck">
                        <div class="card border-danger sm-6 mb-4 mx-auto" style="max-width: 18rem;">
                            <div class="card-header">Software Quality</div>
                            <div class="card-body text-danger">
                                <p class="card-text">
                                    Produce efficient tests in order to check the correctness of a software and can use calculabilty theory. I know all about unit test, mutation testing, pairwise testing, structural testing, etc. All of this in mind can reduce the cost for a project.
                                </p>
                            </div>
                        </div>
                        <div class="card border-danger sm-6 mb-4 mx-auto" style="max-width: 18rem;">
                            <div class="card-header">Mobile and Embedded computing</div>
                            <div class="card-body text-danger">
                                <p class="card-text">
                                    Know all the bases for IoT, microcontrollers and related protocols. I'm quite familiar with Z1 nodes, RaspberryPi and Arduino.
                                </p>
                            </div>
                        </div>
                        <div class="card border-danger sm-6 mb-4 mx-auto" style="max-width: 18rem;">
                            <div class="card-header">Software Security</div>
                            <div class="card-body text-danger">
                                <p class="card-text">
                                    Able to produce robust code against attacks. Avoid as possible the usage of vulnerable function and know all the good stuff to prevent attacks such as SQL injection, DDOS, XSS, etc. I also know all basis about the usage of encryption.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="heading">
                    <h5>Teamwork</h5>
                </div>
                <div class="container">
                    <div class="card-deck">
                        <div class="card border-danger sm-6 mb-4 mx-auto" style="max-width: 18rem;">
                            <div class="card-header">Waterfall model</div>
                        </div>
                        <div class="card border-danger sm-6 mb-4 mx-auto" style="max-width: 18rem;">
                            <div class="card-header">V model</div>
                        </div>
                        <div class="card border-danger sm-6 mb-4 mx-auto" style="max-width: 18rem;">
                            <div class="card-header">Agile</div>
                        </div>
                    </div>
                </div>  
            </div>
        </section>
        <section id="career">
            <div class="container">
                <div class="heading">
                    <hr class="divider" style="border-top: 1px solid  white;">
                    <h2 style="color: white">Education and Career</h2>
                </div>  
                <ul class="timeline">
                    <li>
                        <div class="time-badge">
                            <span class="fa fa-briefcase"></span>
                        </div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>High School</h3>
                                    <h4>Student</h4>
                                    <p class="text-muted">
                                        <small class="fa fa-calendar-check-o">
                                            2009 - 2012
                                        </small>
                                    </p>
                                </div>
                                <div class="timeline-body">
                                    <a target="_blank" class="link" href="http://www.stben.be/">Communaut&#233; scolaire Saint-Beno&#238;t</a>
                                    <p>From 1st to 5th year</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="time-badge">
                            <span class="fa fa-briefcase"></span>
                        </div>
                        <div class="timeline-panel-container-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>High School</h3>
                                    <h4>Student</h4>
                                    <p class="text-muted">
                                        <small class="fa fa-calendar-check-o">
                                            2012 - 2015
                                        </small>
                                    </p>
                                </div>
                                <div class="timeline-body">
                                    <a target="_blank" class="link" href="https://www.isjcarlsbourg.com/">Institut Saint-Joseph Carlsbourg</a>
                                    <p>5th and 6th years</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="time-badge">
                            <span class="fa fa-briefcase"></span>
                        </div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3><a style="color:black" href="docs/diplomebac.pdf" target="_blank">Bachelor in Computer Science <small class="fa fa-download"></small> </a></h3>
                                    <h4>Student</h4>
                                    <p class="text-muted">
                                        <small class="fa fa-calendar-check-o">
                                            2015 - 2018
                                        </small>
                                    </p>
                                </div>
                                <div class="timeline-body">
                                    <a class="link" href="https://uclouvain.be/fr/index.html" target="_blank">Universit&#233; catholique de Louvain | UCLouvain</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="time-badge">
                            <span class="fa fa-briefcase"></span>
                        </div>
                        <div class="timeline-panel-container-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Master in Computer Science</h3>
                                    <h4>Student</h4>
                                    <p class="text-muted">
                                        <small class="fa fa-calendar-check-o">
                                            Since 2018
                                        </small>
                                    </p>
                                </div>
                                <div class="timeline-body">
                                    <a class="link" href="https://uclouvain.be/fr/index.html" target="_blank">Universit&#233; catholique de Louvain | UCLouvain</a>
                                    <p>Option Software Engineering and Networking</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="time-badge">
                            <span class="fa fa-briefcase"></span>
                        </div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>To be continued ...</h3>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <br>
            </div>
        </section>
        <section id="portolio">
            <div class="container">
                <div class="heading">
                    <hr class="divider" style="border-top: 1px solid  #d82c2e;">
                    <h2>Portofio</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card bigger" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <img class="card-img-top" src="/images/image.jfif" alt="Card image cap">
                            <br>
                            <h5 class="card-title">EZMeal <br> <small class="text-muted">2016</small></h5>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                                <div  class="card-body toggled">
                                    <p class="card-text">The project consist in an Android App for cooking. This contain many features such as listing ingredient for a recipe and cooking it. This project was very interresting for all the design part.</p>
                                    <p class="card-text"><small class="text-muted">Java/SQLite/Sofware design</small></p>
                                    <a  href="/docs/EZMeal.zip"   target="_blank" class="btn btn-social-icon btn-github">
                                        <span class="fa fa-github git"></span>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <br>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bigger" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <img class="card-img-top" src="/images/image.jfif" alt="Card image cap">
                            <br>
                            <h5 class="card-title">The Accountant <br> <small class="text-muted">2017</small></h5>
                            <div id="collapse2" class="collapse" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <p class="card-text">As before, very interesting design project. This app is supposed to help people with their finance such that they remember debts that they might have.</p>
                                    <p class="card-text"><small class="text-muted">Java/SQLite/Firebase and other google modules</small></p>
                                    <a  href="/docs/P4-TheAccountant-master.zip"   target="_blank" class="btn btn-social-icon btn-github">
                                        <span class="fa fa-github git"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bigger" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            <img class="card-img-top" src="/images/canvas.png" alt="Card image cap">
                            <br>
                            <h5 class="card-title">DSL Canvas <br> <small class="text-muted">2018</small></h5>
                            <div id="collapse3" class="collapse" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <p class="card-text">The purpose of this project was to create a DSL for a subset of the Canvas standard library from Javascript in Scala.</p>
                                    <p class="card-text"><small class="text-muted">Scala/HTML/JS</small></p>
                                    <a  href="https://github.com/ElNiak/DSLCanvas.git"   target="_blank" class="btn btn-social-icon btn-github">
                                        <span class="fa fa-github git"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bigger" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            <img class="card-img-top" src="/images/mqtt_publisher_subscriber-1.png" alt="Card image cap">
                            <br>
                            <h5 class="card-title">MQTT/Z1 nodes <br> <small class="text-muted">2018</small></h5>
                            <div id="collapse4" class="collapse" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <p class="card-text">From Z1 Node and raspberrypi broker or a pc, we implemented the MQTT(-SN) protocol and RPL in order to send sensor data from IoT devices to MQTT subscribers.</p>
                                    <p class="card-text"><small class="text-muted">ContikiOS, Java (for mosquitto), C</small></p>
                                    <a  href="https://github.com/ElNiak/LINGI2146-GroupM.git"   target="_blank" class="btn btn-social-icon btn-github">
                                        <span class="fa fa-github git"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bigger" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            <img class="card-img-top" src="/images/archive_details.png" alt="Card image cap">
                            <br>
                            <h5 class="card-title">SuperForm <br> <small class="text-muted">2018</small></h5>
                            <div id="collapse5" class="collapse" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <p class="card-text">SuperForm is a data sharing manager that lets users insert information in a single input form to then share it on multiple channels (Facebook,Mail,Twitter,RSS,...). This project is a web application written in Python and use the framework Flask. SuperForm is currently used at UCLouvain and was made by all the student of the course.</p>
                                    <p class="card-text"><small class="text-muted">Python/JS/Flask/HTML</small></p>
                                    <a  href="https://github.com/bastinjul/LINGI2255-2018-Superform-BD.git"   target="_blank" class="btn btn-social-icon btn-github">
                                        <span class="fa fa-github git"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bigger" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            <img  style="object-fit: contain;" class="card-img-top" src="/images/LogoJobSearch.png" alt="Card image cap">
                            <br>
                            <h5 class="card-title">JobSearch <br> <small class="text-muted">2016</small></h5>
                            <div id="collapse6" class="collapse" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <p class="card-text">With our platform JobSearch, we create a website from scratch that can be used by people to get a job as fast as possible. People can say kind of work they want and society what kind of workers they are looking for.</p>
                                    <p class="card-text"><small class="text-muted">NodeJS/Express/CSS/BootStrap</small></p>
                                    <a  href="https://github.com/mihien/JobSearch.git"   target="_blank" class="btn btn-social-icon btn-github">
                                        <span class="fa fa-github git"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bigger" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                            <img  style="object-fit: contain;" class="card-img-top" src="/images/UML_Soft_maint_GR_E_1b.png" alt="Card image cap">
                            <br>
                            <h5 class="card-title">Prototype of Home automation system <br> <small class="text-muted">2018</small></h5>
                            <div id="collapse7" class="collapse" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <p class="card-text">Design and implement a prototype which allows you to play around with the configuration of such a home automation system. The prototype should allow you to dene what your house looks like (how is the house structured, how many rooms, how are they connected, where are the doors and windows) what kind of automated devices it has (window blinds, door locks, central heating, air conditioning, lights, sprinklers, audio-video material) and how they can react (turned on or off, increase or decrease) to external conditions (temperature, presence and activities of habitants, time of day)</p>
                                    <p class="card-text"><small class="text-muted">Java/Design Pattern/Framework/Reflexion/Maintainability</small></p>
                                    <a  href="https://github.com/ElNiak/LINGI2252---Groupe-E.git"   target="_blank" class="btn btn-social-icon btn-github">
                                        <span class="fa fa-github git"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bigger" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse7">
                            <img  style="object-fit: contain;" class="card-img-top" src="/images/cv.jpg" alt="Card image cap">
                            <br>
                            <h5 class="card-title">My Curriculum vitae<br> <small class="text-muted">2019</small></h5>
                            <div id="collapse8" class="collapse" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <p class="card-text">This project was very good to learn new stuff and moreover very usefull since I made my "online CV". It use some good theory for web development including front-end and back-end.</p>
                                    <p class="card-text"><small class="text-muted">PHP/Bootstrap/CSS/HTML/JS/Apache2</small></p>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <h2 style="margin: 0 auto;"></h2>
                </div>
            </div>
            <br>
        </section>
        <section id="moreme">
            <div class="container">
                <div class="heading">
                    <hr class="divider" style="border-top: 1px solid  white;">
                    <h2 style="color: white">More about me</h2>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card shadow">
                            <div class="card-header" style="font-weight: bold; font-size: 22px;">My work expectations for now</div>
                            <div class="card-body">
                                <p class="card-text">
                                    Learning and experimenting with other computer scientists is one of the expectations I have of the world of work. 
                                </p>
                                <p  class="card-text">I am at a point in my life where I need to learn more about the professional world in order to be ready for the future.</p>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-4">
                        <div class="card shadow">
                            <div class="card-header" style="font-weight: bold; font-size: 22px;">Spoken language</div>
                            <div class="card-body">
                                <p class="card-text">Mother tongue <br> <strong>French</strong></p>
                                <p class="card-text"><a style="color:black" href="/docs/CertificateChristopheCrochet.pdf" target="_blank"> Upper-Intermediate/B2 <small class="fa fa-download"></small></a><br> <strong>English</strong>  </p>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-4">
                        <div class="card shadow">
                            <div class="card-header" style="font-weight: bold; font-size: 22px;">Details</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><small class="fa fa-phone"></small> 0478 12 48 46</li>
                                <li class="list-group-item"><small class="fa fa-inbox"></small> christophe.cr.dev@gmail.com</li>
                                <li class="list-group-item"><small class="fa fa-birthday-cake"></small> 31 October 1997</li>
                                <li class="list-group-item"><small class="fa fa-address-card"></small> Belgium, Louvain-La-Neuve</li>
                            </ul>
                        </div>
                        <br>
                    </div>
                                        <!-- Ajouter background informatique bachelier -->
                    <div class="col-sm-12">
                        <div class="card shadow">
                            <div class="card-header" style="font-weight: bold; font-size: 22px;">Bachelor Background</div>
                            <div class="row container card-body" style="text-align: left">
                                <div class="col-md-6">
                                    <p class="card-text">LSINF1101 : Introduction à la programmation (Java)<br> <strong>Pecheur Charles (coordinateur), Bonaventure Olivier</strong> <small class="text-muted">2015 - 2016</small></p>
                                    <p class="card-text">LSINF1102 : Résolution informatique de problèmes<br> <strong>Schauss Pierre </strong> <small class="text-muted">2015 - 2016</small></p>
                                    <p class="card-text">LSINF1103 : Introduction à l'algorithmique<br> <strong>Dupont Pierre</strong> <small class="text-muted">2015 - 2016</small></p>
                                    <p class="card-text">LSINF1140 : Bases électroniques de l'informatique<br> <strong>Legat Jean-Didier</strong> <small class="text-muted">2015 - 2016</small></p>
                                    <p class="card-text">LMAT1111E/F : Mathématiques générales I/II<br> <strong>Dos Santos Santana Forte Vaz Pedro, Ponce Augusto, Gran Marino</strong> <small class="text-muted">2015 - 2016</small></p>
                                    <p class="card-text">LBIR1203 : Probabilités et statistiques I<br> <strong>Bogaert Patrick </strong> <small class="text-muted">2016 - 2017</small></p>
                                    <p class="card-text">LFSAB1402 : Informatique 2 (Oz and paradigm)<br> <strong>Van Roy Peter </strong> <small class="text-muted">2016 - 2017</small></p>
                                    <p class="card-text">LINGE1322 : Informatique - Analyse et conception de systèmes d'information<br> <strong>Vanderdonckt Jean</strong> <small class="text-muted">2016 - 2017</small></p>
                                    <p class="card-text">LSINF1113 : Algorithmique numérique<br> <strong>Sadre Ramin </strong> <small class="text-muted">2016 - 2017</small></p>
                                    <p class="card-text">LSINF1212 : Projet d'approfondissement en informatique<br> <strong>Gonzalez Montesinos Sebastian Andres </strong> <small class="text-muted">2016 - 2017</small></p>
                                    <p class="card-text">LSINF1225 : Conception orientée objet et gestion de données<br> <strong>Mens Kim </strong> <small class="text-muted">2016 - 2017</small></p>
                                    <p class="card-text">LSINF1252 : Systèmes informatiques 1<br> <strong>Bonaventure Olivier </strong> <small class="text-muted">2016 - 2017</small></p>
                                    <br>
                                </div>
                                <div class="col-md-6">
                                    <p class="card-text">LSINF1250 : Mathématiques pour l'informatique<br> <strong>Saerens Marco </strong> <small class="text-muted">2016 - 2017</small></p>
                                    <p class="card-text">LINGI1341 : Réseaux informatiques<br> <strong>Bonaventure Olivier </strong> <small class="text-muted">2017 - 2018</small></p>
                                    <p class="card-text">LELEC1930 : Introduction aux télécommunications<br> <strong>Louveaux Jérôme</strong> <small class="text-muted">2017 - 2018</small></p>
                                    <p class="card-text">LFSAB1509 : Projet 4 (en Informatique)<br> <strong>Lainez Marc </strong> <small class="text-muted">2017 - 2018</small></p>
                                    <p class="card-text">LINGI1101 : Logique et structure discrètes<br> <strong>Van Roy Peter </strong> <small class="text-muted">2017 - 2018</small></p>
                                    <p class="card-text">LINGI1122 : Méthodes de conception de programmes<br> <strong>Pecheur Charles </strong> <small class="text-muted">2017 - 2018</small></p>
                                    <p class="card-text">LINGI1123 : Calculabilité<br> <strong>Yves Deville </strong> <small class="text-muted">2017 - 2018</small></p>
                                    <p class="card-text">LINGI1131 : Computer language concepts<br> <strong>Van Roy Peter </strong> <small class="text-muted">2017 - 2018</small></p>
                                    <p class="card-text">LLSMF2013 : Data Analytics applied in Business (Names from A to K)<br> <strong>Saerens Marco </strong> <small class="text-muted">2017 - 2018</small></p>
                                    <p class="card-text">LPSP1209 : Probabilités et statistique II<br> <strong>Bogaert Patrick  </strong> <small class="text-muted">2017 - 2018</small></p>
                                    <p class="card-text">LSINF1121 : Algorithmique et structures de données<br> <strong>Schauss Pierre </strong> <small class="text-muted">2017 - 2018</small></p>
                                    <p class="card-text">LSINF1210 : Systèmes d'information et gestion de projets informatiques<br> <strong>Kolp Manuel </strong> <small class="text-muted">2017 - 2018</small></p>
                                    <p class="card-text">LFSAB1402 : Human-computer interaction<br> <strong>Vanderdonckt Jean </strong> <small class="text-muted">2017 - 2018</small></p>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-12">
                        <div class="card shadow">
                            <div class="card-header" style="font-weight: bold; font-size: 22px;">Master Background</div>
                            <div class="row container card-body" style="text-align: left">
                                <div class="col-md-6">
                                    <p class="card-text">LINGI2142 : Computer networks: configuration and management<br> <strong>Bonaventure Olivier</strong> <small class="text-muted">2018 - 2019</small></p>
                                    <p class="card-text">LINGI2251 : Software Quality Assurance<br> <strong>Pecheur Charles</strong> <small class="text-muted">2018 - 2019</small></p>
                                    <p class="card-text">LINGI2132 : Languages and translators<br> <strong>Schauss Pierre</strong> <small class="text-muted">2018 - 2019</small> </p>
                                    <p class="card-text">LINGI2146 : Mobile and Embedded Computing<br> <strong>Sadre Ramin</strong> <small class="text-muted">2018 - 2019</small> </p>
                                    <p class="card-text">LINGI2172 : Databases<br> <strong>Nijssen Siegfried</strong> <small class="text-muted">2018 - 2019</small> </p>
                                    <p class="card-text">LINGI2241 : Architecture and performance of computer systems<br> <strong>Sadre Ramin</strong> <small class="text-muted">2018 - 2019</small> </p>
                                    <br>
                                </div>

                                <div class="col-md-6">
                                    <p class="card-text">LINGI2252 : Software Maintenance and Evolution<br> <strong>Mens Kim</strong> <small class="text-muted">2018 - 2019</small></p>
                                    <p class="card-text">LINGI2255 : Software engineering project<br> <strong>Mens Kim</strong> <small class="text-muted">2018 - 2019</small></p>
                                    <p class="card-text">LINGI2261 : Artificial intelligence : representation and reasoning<br> <strong>Yves Deville</strong> <small class="text-muted">2018 - 2019</small> </p>
                                    <p class="card-text">LINGI2347 : Computer system security<br> <strong>Sadre Ramin</strong> <small class="text-muted">2018 - 2019</small> </p>
                                    <p class="card-text">LINGI2145 : Cloud Computing<br> <strong>Riviere Etienne</strong> <small class="text-muted">2018 - 2019</small> </p>
                                    <p class="card-text">LINGI2144 : Secured systems engineering<br> <strong>Legay Alex</strong> <small class="text-muted">2018 - 2019</small></p>
                                </div>

                                <div class="col-md-6">
                                    <p class="card-text">LINGI2143 : Concurrent systems : models and analysis <br> <strong>Pecheur Charles</strong> <small class="text-muted">2019 - 2020</small></p>
                                    <p class="card-text">LINGI2345 : Languages and algorithms for distributed applications  <br> <strong>Van Roy Peter </strong> <small class="text-muted">2019 - 2020</small></p>
                                    <p class="card-text">TFE<br> <strong>/</strong> <small class="text-muted">2019 - 2020</small></p>
                                    <br>
                                </div>

                                <div class="col-md-6">
                                    <p class="card-text">LINMA2472 : Algorithms in Data Science<br> <strong>Pell Leto, Blondel Vincent</strong> <small class="text-muted">2019 - 2020</small></p>
                                    <p class="card-text">LINGI2266 : Advanced Algorithms for optimization<br> <strong>Schauss Pierre</strong> <small class="text-muted">2019 - 2020</small></p>
                                    <p class="card-text">LINGI2364 : Mining Patterns in data<br> <strong>Nijssen Sigfried</strong> <small class="text-muted">2019 - 2020</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </section>  
        <section id="contactme">
            <div class="container">
                <div class="heading">
                    <hr class="divider"style="border-top: 1px solid  #d82c2e;">
                    <h2>Contact me</h2>
                </div>
                <form id="contact" method="post"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); //Protection against XSS ?>">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="red" for="name">Name (*)</label>
                                <input type="text" id="name" name="name" class="form-control input-lg" required oninvalid="this.setCustomValidity('You must identified yourself')" oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label class="red" for="email">Email (*)</label>
                                <input id="a2" type="email" id="email" name="email" class="form-control" required oninvalid="this.setCustomValidity('Email needed')" oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label class="red" for="subject">Subject</label>
                                <input id="a3" type="text" id="subject" name="subject" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="red" for="subject">Phone number</label>
                                <input id="a4" type="tel"  pattern="([(+]*[0-9]+[()+. -]*)" id="phone" name="phone" class="form-control">
                            </div>
                            <div class="form-group has-success">
                                <label class="red" for="comment">Your Message (*)</label>         
                                <textarea id="a5" class="form-control"  name="comment" id="comment" required oninvalid="this.setCustomValidity('This field cannot be blank')" oninput="this.setCustomValidity('')"></textarea>
                            </div>
                            <button id="sumbitContact" type="submit" class="button2" style="margin-bottom: 10px">Submit</button>
                        </div>
                    </div>
                </form>
                <?php 
                if($_SERVER['REQUEST_METHOD'] == "POST"  and validation()){
                    send_mail_pear();
                    echo "<div  style='text-align: center;'>
                <small id='sent' class='text-muted' style='font-weight:bold;'><br>Your message has been sent correctly, thanks ! </small>
                </div>";
                    echo "<script>  $('html, body').animate({ scrollTop: $(document).height()-$(window).height() },700); </script>";
                }
                else if($_SERVER['REQUEST_METHOD'] == "POST" and ((strlen($name) < 3 or  strlen($name) > 25) or strlen($comment) < 3)) {
                    echo "<div  style='text-align: center;'>
                <small id='sent' class='text-muted' style='font-weight:bold;'><br>Enter a valid name and message </small>
                </div>";
                    echo "
                        <script>  $('html, body').animate({ scrollTop: $(document).height()-$(window).height() },700); </script>";
                }
                else if($_SERVER['REQUEST_METHOD'] == "POST") {
                    echo "<div  style='text-align: center;'>
                <small id='sent' class='text-muted' style='font-weight:bold;'><br>Don't try it bitches</small>
                </div>";
                    echo "
                        <script>  $('html, body').animate({ scrollTop: $(document).height()-$(window).height() },700); </script>";
                }
                ?>
            </div>
        </section>        
        <footer class="text-center">
            <a id="up" href="#aboutme">
                <span class="fa fa-chevron-up"></span>
            </a>
            <h5>@ 2019 Crochet Christophe </h5>
            <h6>Run on RaspberryPi 2B+</h6>
        </footer>
    </body>
</html>