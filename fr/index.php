<?php include($_SERVER['DOCUMENT_ROOT']."/php/contactme.php"); ?>
<!DOCTYPE html> 
<html lang="fr">
    <head>
        <title>Curriculum vitae Crochet Christophe</title>
        <meta charset="ISO-8859-1">
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
                <a href="/docs/CV.pdf"  target="_blank" class="button1">Télécharger CV</a>
            </div>
        </section>
        <section id="skills" class="container">
            <div class="container">
                <div class="heading">
                    <hr class="divider" style="border-top: 1px solid  #d82c2e;">
                    <h2>Compétences principales</h2>
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
                    <h5>Que sais-je faire ?</h5>
                </div>
                <div class="container">
                    <div class="card-deck">
                        <div class="card border-danger sm-6 mb-4 mx-auto" style="max-width: 18rem;">
                            <div class="card-header">App Android</div>
                            <div class="card-body text-danger">
                                <p class="card-text">
                                    Pour le moment, j'ai réalisé deux applications Android en tant que projet universitaire mais également quelque une en développement pour mon plaisir personnel. Designer et produire de bonnes et élégantes applications est extrêment intéressant.
                                </p>
                            </div>
                        </div>
                        <div class="card border-danger sm-6 mb-4 mx-auto" style="max-width: 18rem;">
                            <div class="card-header">Web Dev/Full Stack</div>
                            <div class="card-body text-danger">
                                <p class="card-text">
                                    J'ai pris quelques cours afin de savoir réaliser un site web de A à Z. Je connais donc tout ce qui est nécessaire pour le front-end (CSS/JS/HTML/jQuery/BootStrap/etc) ainsi que le back-end (PHP/SQL/MongoDB et les bases de NodeJS). Je sais également configurer un serveur Apache2 simple.
                                </p>
                            </div>
                        </div>
                        <div class="card border-danger sm-6 mb-4 mx-auto" style="max-width: 18rem;">
                            <div class="card-header">Software Design/OOP</div>
                            <div class="card-body text-danger">
                                <p class="card-text">
                                    Les design patterns pour l'OOP et le concept de code maintenable sont des principes acquis. Je peux concevoir des programmes via divers diagrammes et autres, connecté le tout à une base de données et aux divers services le tout avec un style OOP.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-deck">
                        <div class="card border-danger sm-6 mb-4 mx-auto" style="max-width: 18rem;">
                            <div class="card-header">Software Quality</div>
                            <div class="card-body text-danger">
                                <p class="card-text">
                                    Il m'a également été enseigné comment vérifier la justesse d'un programme via des tests efficaces et la calculabilité. Je sais tout ce qu'il y a savoir à propos des tests unitaires, des tests par mutation, du pairwise testing, etc. Tout cela en tête permet de réduire le temps et les erreurs et donc ainsi le cout d'un projet.
                                </p>
                            </div>
                        </div>
                        <div class="card border-danger sm-6 mb-4 mx-auto" style="max-width: 18rem;">
                            <div class="card-header">Mobile and Embedded computing</div>
                            <div class="card-body text-danger">
                                <p class="card-text">
                                    Le 21e siècle oblige, l'Internet of Things, les microcontrollers et tout les protocols associés m'ont été enseignés. Je suis assez familier avec les nodes Z1, ainsi qu'avec les RaspberryPi et les Arduinos.
                                </p>
                            </div>
                        </div>
                        <div class="card border-danger sm-6 mb-4 mx-auto" style="max-width: 18rem;">
                            <div class="card-header">Software Security</div>
                            <div class="card-body text-danger">
                                <p class="card-text">
                                    Capable d'écrire du code robusts en prenant en compte un maximum de vulnérabilité en compte . Eviter les fonctions vulnérables, la mémoires et toute les bonnes pratiques à faire pour éviter les attaques (SQL injection, DDOS, XSS, etc.). Je sais également comment utiliser l'encryption.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="heading">
                    <h5>Méthode de travail</h5>
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
                    <h2 style="color: white">Education et Carrière</h2>
                </div>  
                <ul class="timeline">
                    <li>
                        <div class="time-badge">
                            <span class="fa fa-briefcase"></span>
                        </div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Secondaire</h3>
                                    <h4>Etudiant</h4>
                                    <p class="text-muted">
                                        <small class="fa fa-calendar-check-o">
                                            2009 - 2012
                                        </small>
                                    </p>
                                </div>
                                <div class="timeline-body">
                                    <a target="_blank" class="link" href="http://www.stben.be/">Communaut&#233; scolaire Saint-Beno&#238;t</a>
                                    <p>De la 1ère à la 5ème année</p>
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
                                    <h3>Secondaire</h3>
                                    <h4>Etudiant</h4>
                                    <p class="text-muted">
                                        <small class="fa fa-calendar-check-o">
                                            2012 - 2015
                                        </small>
                                    </p>
                                </div>
                                <div class="timeline-body">
                                    <a target="_blank" class="link" href="https://www.isjcarlsbourg.com/">Institut Saint-Joseph Carlsbourg</a>
                                    <p>Deux dernières années</p>
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
                                    <h3><a style="color:black" href="docs/diplomebac.pdf" target="_blank">Bachelier en Sciences informatiques <small class="fa fa-download"></small> </a></h3>
                                    <h4>Etudiant</h4>
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
                                    <h3>Master en Sciences informatiques</h3>
                                    <h4>Etudiant</h4>
                                    <p class="text-muted">
                                        <small class="fa fa-calendar-check-o">
                                            Depuis 2018
                                        </small>
                                    </p>
                                </div>
                                <div class="timeline-body">
                                    <a class="link" href="https://uclouvain.be/fr/index.html" target="_blank">Universit&#233; catholique de Louvain | UCLouvain</a>
                                    <p>Option Software Engineering et Networking</p>
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
                                    <h3>A suivre ...</h3>
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
                                    <p class="card-text">
                                        Le projet consistait en une simple application Android de cuisine permettant de réaliser des recette, lister les ingrédients nécessaires par exemple. Vraiment instructif et intéressant de tout point de vue sachant que le sujet globale était imposé.
                                    </p>
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
                                    <p class="card-text">
                                        Egalement très intéressant comme projet mais totalement libre cette fois. Cette application permet d'aider les personnes avec leur finance en leur rappelant toute leur facture à payer.
                                    </p>
                                    <p class="card-text"><small class="text-muted">Java/SQLite/Firebase et autre modules google</small></p>
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
                                    <p class="card-text">
                                        Le but de ce projet était de créer un DSL afin de rendre la manipulation (via JavaScript normalement) du Canvas html plus simple via notre programme Scala.
                                    </p>
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
                                    <p class="card-text">
                                        A partir de node Z1 et d'un serveur faisant office de broker, nous avons implémenter le protocol MQTT(-SN), ainsi que le RPL dans le but d'envoyer des données de senseurs des producteurs vers les subscriners.
                                    </p>
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
                                    <p class="card-text">SuperForm est un gestionnaire de partage de données qui permet aux utilisateurs d'insérer des informations dans un seul formulaire de saisie, puis de les partager sur plusieurs canaux (Facebook, Mail, Twitter, RSS, ...). Ce projet est une application Web écrite en Python et utilise le framework Flask. SuperForm est actuellement utilisé à UCLouvain et a été créé par tous les étudiants du cours.</p>
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
                                    <p class="card-text">Avec notre plate-forme JobSearch, nous avons crée un site Web à partir de zéro qui peut être utilisé par des personnes cherchant à obtenir un travail aussi rapidement que possible.</p>
                                    <p class="card-text"><small class="text-muted">NodeJS/ExpressJS/CSS/BootStrap</small></p>
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
                                    <p class="card-text">Concevoir et implémenter un prototype vous permettant de jouer avec la configuration d'un tel système domotique. Le prototype devrait vous permettre de définir l'apparence de votre maison (comment est structurée la maison, combien de pièces, comment sont-elles connectées, où sont les portes et les fenêtres), quel type d'appareil automatisé il dispose chauffage central, climatisation, éclairage, gicleurs, matériel audio-vidéo) et comment ils peuvent réagir (allumer ou éteindre, augmenter ou diminuer) aux conditions extérieures (température, présence et activités des habitants, heure du jour)</p>
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
                                    <p class="card-text">
                                        Ce projet était très bon pour apprendre de nouvelles choses et de plus très utile puisque j'ai créé mon "CV en ligne". Il utilise une bonne théorie pour le développement Web, y compris front-end et back-end.
                                    </p>
                                    <p class="card-text"><small class="text-muted">PHP/Bootstrap/CSS/HTML/JS/Apache2</small></p>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <h2 style="margin: 0 auto;">...</h2>
                </div>
            </div>
            <br>
        </section>
        <section id="moreme">
            <div class="container">
                <div class="heading">
                    <hr class="divider" style="border-top: 1px solid  white;">
                    <h2 style="color: white">Un peu plus sur moi</h2>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card shadow">
                            <div class="card-header" style="font-weight: bold; font-size: 22px;">Mes attentes de travail</div>
                            <div class="card-body">
                                <p class="card-text">
                                    Apprendre et expérimenter avec d'autres informaticiens sont l'une des attentes que j'ai du monde du travail.
                                </p>
                                <p  class="card-text">
                                    Je suis arrivé à un point dans ma vie où j'ai besoin et envie d'apprendre plus de nouvelles choses afin d'être prêt pour le future.    
                                </p>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-4">
                        <div class="card shadow">
                            <div class="card-header" style="font-weight: bold; font-size: 22px;">Langues parlées</div>
                            <div class="card-body">
                                <p class="card-text">Langue Maternelle <br> <strong>Français</strong></p>
                                <p class="card-text"><a style="color:black" href="/docs/CertificateChristopheCrochet.pdf" target="_blank"> Upper-Intermediate/B2 <small class="fa fa-download"></small></a><br> <strong>Anglais</strong>  </p>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-4">
                        <div class="card shadow">
                            <div class="card-header" style="font-weight: bold; font-size: 22px;">Détails</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><small class="fa fa-phone"></small> 0478 12 48 46</li>
                                <li class="list-group-item"><small class="fa fa-inbox"></small> christophe.cr.dev@gmail.com</li>
                                <li class="list-group-item"><small class="fa fa-birthday-cake"></small> 31 Octobre 1997</li>
                                <li class="list-group-item"><small class="fa fa-address-card"></small> Belgique, Louvain-La-Neuve</li>
                            </ul>
                        </div>
                        <br>
                    </div>
                    <!-- Ajouter background informatique bachelier -->
                    <div class="col-sm-12">
                        <div class="card shadow">
                            <div class="card-header" style="font-weight: bold; font-size: 22px;">Background informatique/mathématique de Bachelier</div>
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
                                    <p class="card-text">LSINF1250 : 	Mathématiques pour l'informatique<br> <strong>Saerens Marco </strong> <small class="text-muted">2016 - 2017</small></p>
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
                            <div class="card-header" style="font-weight: bold; font-size: 22px;">Background de Master</div>
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
                    <h2>Contactez moi</h2>
                </div>
                <form id="contact" method="post"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); //Protection against XSS ?>">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="red" for="name">Nom (*)</label>
                                <input type="text" id="name" name="name" class="form-control input-lg" required oninvalid="this.setCustomValidity('Vous devez vous identifier')" oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label class="red" for="email">Email (*)</label>
                                <input id="a2" type="email" id="email" name="email" class="form-control" required oninvalid="this.setCustomValidity('Email nécessaire')" oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label class="red" for="subject">Sujet</label>
                                <input id="a3" type="text" id="subject" name="subject" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="red" for="subject">Téléphone</label>
                                <input id="a4" type="tel"  pattern="([(+]*[0-9]+[()+. -]*)" id="phone" name="phone" class="form-control">
                            </div>
                            <div class="form-group has-success">
                                <label class="red" for="comment">Votre Message (*)</label>         
                                <textarea id="a5" class="form-control"  name="comment" id="comment" required oninvalid="this.setCustomValidity('Ne peut être vide')" oninput="this.setCustomValidity('')"></textarea>
                            </div>
                            <button id="sumbitContact" type="submit" class="button2" style="margin-bottom: 10px">Envoyer</button>
                        </div>
                    </div>
                </form>
                <?php 
                if($_SERVER['REQUEST_METHOD'] == "POST"  and validation()){
                    send_mail_pear();
                    echo "<div  style='text-align: center;'>
                <small id='sent' class='text-muted' style='font-weight:bold;'><br>Votre message a correctement été envoyer, merci ! </small>
                </div>";
                    echo "<script>  $('html, body').animate({ scrollTop: $(document).height()-$(window).height() },700); </script>";
                }
                else if($_SERVER['REQUEST_METHOD'] == "POST" and ((strlen($name) < 3 or  strlen($name) > 25) or strlen($comment) < 3)) {
                    echo "<div  style='text-align: center;'>
                <small id='sent' class='text-muted' style='font-weight:bold;'><br>Entrez un nom/message valide </small>
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