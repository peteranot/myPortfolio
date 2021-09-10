<html>
	<head>
		<!-- META -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
		<script type="text/javascript" src="assets/bootstrap/js/jquery-slim.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/localstorage.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/styles/styles.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/projets.css">
		<link rel="stylesheet" type="text/css" href="assets/styles/footer.css">
		<title>Portfolio - PETERANO Terehaunui</title>

		<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">  <!-- Icone - Flèches ect-->
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> <!-- Icone carousel btn-->
		<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
		<script src="assets/font/font awesome/all.js"></script>
        <link href="assets/font/font awesome/all.css" rel="stylesheet">

        <script src="assets/bootstrap/js/popper.min.js"></script>
        <script src="assets/bootstrap/js/util.js"></script>
        <script>

			

		</script>
	</head>
	<body>
	
		<?php
			require('class/connexion.php');
            include('class/function.php');
		?>
		
		<!--HEADER-->
		<header id="header" class="fixed-top header-transparent">
            <div class="container d-flex align-items-center">
                <div class="logo mr-auto">
                    <h1><a href="index.php">P O R T F O L I O</a></h1>
                </div>
                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="#header">Accueil</a></li>
                        <!--<li class="drop-down"><a href="">Presentation</a>
                            <ul>
                            <li><a href="index.html#ass_pres">Qui suis-je ?</a></li>
                            <li><a href="index.html#footer_contact">Linkedin</a></li>
                            </ul>
                        </li>-->
						<li><a href="index.php#ass_pres">CV</a></li>
                        <li><a href="index.php#projets">Projets</a></li>
                        <li><a href="index.php#footer_contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
			
        </header>
		
		<!--CAROUSEL-->
		<section id="carousel_section">
            <div class="carousel_section-container" data-aos="fade-up" >
                <h1><p>Bienvenue</p></h1>
                <h2><p>sur mon Portfolio</p></h2>
                <a href="#ass_pres" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
				<button id="btnTheme" type="button" class="btn changeTheme" onClick="changeTheme()">Thème(<label id="changerNom"></label>)</button>
            </div>
        </section>
		
		<!--MAIN CONTENT-->
		<main id="main">
		
			<!--SECTION ABOUT ME-->
            <section id="ass_pres">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-md-8">
                            <p>Développeur Web / PETERANO / Terehaunui </p>
							<p><u>PARCOURS SCOLAIRE</u></p>
							<div class="row d-flex">
								<div class="col-4">
									<p>BTS SIO options SLAM</p>
									<p>BAC SIG</p>
									<p>DNB</p>
									
								</div>
								<div class="col-4">
									<p> Lycée Aorai Pirae </p>
									<p> Lycée Aorai Pirae </p>
									<p> Lycée Aorai Pirae </p>
								</div>
								<div class="col-4">
									<p> 2016 - 2019 </p>
									<p> 2016 - 2019 </p>
									<p> 2016 - 2019 </p>
								</div>
							</div>
							
							<p><u>FORMATIONS</u></p>
							<div class="row d-flex">
								<div class="col-4">
									<p>Certification OPQUAST</p>
									<p>BTS SIO options SLAM</p>
									<p>BAC Technologie</p>
									
								</div>
								<div class="col-4">
									<p> RSMA ARUE / Simplon </p>
									<p> Lycée Aorai Pirae </p>
									<p> Lycée Aorai Pirae </p>
								</div>
								<div class="col-4">
									<p> 2021 </p>
									<p> 2016 - 2019 </p>
									<p> 2016 - 2019 </p>
								</div>
							</div>
							
							<p><u>EXPERIENCES PROFESSIONNELLES</u></p>
							<div class="row d-flex">
								<div class="col-4">
									<p>Développeur Stagiaire</p>
									<p>Hackathon</p>
									<p>Formations DevWeb</p>
									<p>Développeur Stagiaire</p>
									<p>Développeur Stagiaire</p>
									<p>Joutes Informatiques</p>
									
								</div>
								<div class="col-4">
									<p> PROX-I </p>
									<p> CCISM </p>
									<p> RSMA ARUE / Simplon </p>
									<p> Centre Hospitalier de Pirae </p>
									<p> Vittoria Conseil </p>
									<p> Entreprise Scubatek </p>
								</div>
								<div class="col-4">
									<p> Juillet - Aout 2021 </p>
									<p> Juillet (3 Jours) 2021 </p>
									<p> Octobre 2020 - 2021 </p>
									<p> Main-Juin 2019 </p>
									<p> 2017 - 2018 (2 Mois)</p>
									<p> Février 2016 </p>
								</div>
							</div>
                        </div>
                        <div class="col-md-4">
                            <img src="assets/img/pdp_rsma.jpg" class="w-100">
							<p> Permis B </p>
							<p> Email: terehaupeterano@gmail.com </p>
							<p> Polynésie-Française, Papeari Pk54,6</p>
                        </div>
                    </div>
                </div>
            </section>
			
			<!--SECTION ABOUT ME-->
            <section id="ass_pres">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-md-12">
                            <h2><p>Compétences</p></h2>
							<div class="comp">
								<p>HTML / CSS </p>
								<div class="conteneur_barre">
									<span class="barre c80"></span>
								</div>
							</div>
							<div class="comp">
								<p> PHP </p>
								<div class="conteneur_barre">
									<span class="barre c70"></span>
								</div>
							</div>
							<div class="comp">
								<p> SQL </p>
								<div class="conteneur_barre">
									<span class="barre c90"></span>
								</div>
							</div>
							<div class="comp">
								<p> JavaScript </p>
								<div class="conteneur_barre">
									<span class="barre c30"></span>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </section>

			<!--SECTION PROJECT-->
            <section id="projets" class="portfolio">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12">
                        <div class="projets-title" data-aos="fade-in" data-aos-delay="100">
                            <h2>P R O J E T S</h2>
                        </div>
						<?php
							myProject()
						?>
                        </div>
                    </div>
                </div> 
            </section>
		</main>
		
		<!--FOOTER-->
		<footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row" data-aos="fade-up" data-aos-delay="200">
					
						<!--FOOTER MENU-->
                        <div class="col-lg-2 col-md-4 footer-links mr-auto" data-aos="fade-up" data-aos-delay="150">
                            <h4>M E N U</h4>
                            <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#ass_pres">CV</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#projets">Projets</a></li>
                            </ul>
                        </div>
						
						<!-- FOOTER CONTACT
                        <div class="col-lg-4 col-md-4" id="footer_contact">
                            <div class="footer-info" data-aos="fade-up" data-aos-delay="50">
                                <label>CONTACT</label>
                                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                    <div class="form-row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Nom" data-rule="minlen:4" data-msg="4 caractère minimum" />
                                        <div class="validate"></div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="email" class="form-control" name="emailContact" id="email" placeholder="Email" data-rule="email" data-msg="Adresse email invalide" />
                                        <div class="validate"></div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control" name="subjectContact" id="subject" placeholder="Objet" data-rule="minlen:4" data-msg="4 caractère minimum" />
                                    <div class="validate"></div>
                                    </div>
                                    <div class="form-group">
                                    <textarea class="form-control" name="messageContact" rows="5" data-rule="required" data-msg="Veuillez renseigner ce champ" placeholder="Votre message"></textarea>
                                    <div class="validate"></div>
                                    </div>
                                    <div class="mb-3">
                                    <div class="loading">En cours de chargements</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Votre message à bien été enregistré.</div>
                                    </div>
                                    <div class="text-center"><input type="submit" name="btn_validate_contact" value="Envoyer"></input></div>
                                </form>
                            </div>
                        </div>
						 -->
						<!--FOOTER SOCIAL-->
                        <div class="col-lg-2 col-md-4 footer-links ml-auto" data-aos="fade-up" data-aos-delay="250">
                            <h4>Réseaux</h4>
                            <ul>
                            <li><a href="#" class="facebook"><i class="bx bxl-facebook"></i></a><i class="bx bx-chevron-right"></i> <a href="#">Facebook</a></li>
                            <li><a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a><i class="bx bx-chevron-right"></i> <a href="#">Linkedin</a></li>
                            <li><a href="#" class="soundcloud"><i class="bx bxl-soundcloud"></i></a><i class="bx bx-chevron-right"></i> <a href="#">Soundcloud</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
			<!--COPYRIGHT-->
            <div class="container">
                <div class="copyright">
                    &copy; 2021 <strong><span>PETERANO</span></strong>. Tout droits réservés
                </div>
            </div>
        </footer>
		<!--ICON BACK TO TOP-->
        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
	</body>
	
    <!-- SCRIPTS PROJETS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <script src="assets/js/main.js"></script>

</html>
