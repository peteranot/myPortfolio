<html>
	<head>
		<!-- META -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		<!-- CSS -->
		<link href="assets/styles/backoffice.css" rel="stylesheet">
		<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
		<script type="text/javascript" src="assets/bootstrap/js/jquery-slim.min.js"></script>
        
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- TITRE -->
        <title>Back-office</title>
	</head>
	
	<body>
		
		<?php

			require('class/connexion.php');
			include('class/function.php');
			if (isset($erreur)){
				print $erreur;
			}
		?>

		<p align='center'>
			<a href="index.php">Page d'accueil</a>
		</p>
		<p align='center'>
			<label>
				<u><b>BACK OFFICE</b></u>
			</label>
		</p>

	
		<div class="row d-flex justify-content-center">




			<div class="col-md-2">
				<div class="list-group" id="list-tab" role="tablist">
				    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-types" role="tab" aria-controls="home">Type de projet</a>
				    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-project" role="tab" aria-controls="profile">Projets</a>
				</div>
			</div>
			<div class="col-md-10">
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="list-types" role="tabpanel" aria-labelledby="list-home-list">
						<div class="row justify-content-center">

                            <div id="accordion" class="col-md-4">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Ajouter un type de projet
                                        </button>
                                    </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <?php
                                            echo '<form  method="POST">';
                                                echo '<p>';
                                                    echo '<input type="text" name="nameTypes" placeholder="Nom">';
                                                    echo '<input type="hidden" name="new_name">';
                                                echo '</p>';

                                                echo '<p>';
                                                    echo '<input type="submit" name="btn_validate_addtypes" value="Valider">';
                                                echo '</p>';
                                            echo '</form>';
                                        ?>
                                    </div>
                                    </div>
                                </div>
                            </div>


                            <div id="accordion" class="col-md-4">
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Listes des types existant
                                        </button>
                                    </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <?php
                                            showListTypes();
                                        ?>   
                                    </div>
                                    </div>
                                </div>
                            </div>
							
						</div>
					</div>

					<div class="tab-pane fade" id="list-project" role="tabpanel" aria-labelledby="list-profile-list">
						<div class="row justify-content-center">
                            <div id="accordion" class="col-md-4">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapseOne">
                                            Ajouter un projet
                                        </button>
                                    </h5>
                                    </div>

                                    <div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <?php
                                            echo '<form  enctype="multipart/form-data" method="POST">';
                                                echo '<p>';
                                                    echo '<input name="img" type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Importer">';
                                                echo '</p>';
                                                echo '<p>';
                                                    echo '<input type="text" name="title_project" placeholder="Titre du projet">';
                                                echo '</p>';
                                                echo '<p>';
                                                    echo '<input type="text" name="desc_project" placeholder="Description">';
                                                echo '</p>';
                                                echo '<p>';
                                                    echo '<input type="text" name="site_link_project" placeholder="Lien du site">';
                                                echo '</p>';
                                                echo '<p>';
                                                    echo '<input type="text" name="git_link_project" placeholder="Lien github">';
                                                echo '</p>';
                                                echo '<p>';
                                                    echo '<select id="select_listGrade" name="typeProject" class="form-control">';
                                                        foreach ($listTypes as $value) {
                                                            echo '<option name="id_types" value="'.$value["id_types"].'">';
                                                                echo $value["name"];   
                                                            echo '</option>';
                                                        }
                                                    echo '</select>';
                                                echo '</p>';
                                                echo '<p>';
                                                    echo '<input type="submit" name="btn_addProject" value="Valider">';
                                                echo '</p>';
                                            echo '</form>';
                                        ?>
                                    </div>
                                    </div>
                                </div>
                               
                            </div>
                            <div id="accordion" class="col-md-4">
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseTwo">
                                            Listes des projets existant
                                        </button>
                                    </h5>
                                    </div>
                                    <div id="collapse4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <?php
                                            showListProject();
                                        ?>   
                                    </div>
                                    </div>
                                </div>
                            </div>
							
						</div>
					</div>
                </div>
            </div>
        </div>
        
	</body>
</html>