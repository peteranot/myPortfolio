<?php
    require("./class/project.class.php");
    $project = new project();
    $listProject = $project->get();
   
    function showListProject(){

        $project = new project();
        $listProject = $project->get();
        $types = new types();
        $listTypes = $types->get();
        if ($listProject->num_rows > 0) {
            echo "<table>";
                echo "<th>";
                    echo "Titre";
                echo "</th>";
                echo "<th>";
                    echo "Actions";
                echo "</th>";
                echo "<th>";
                echo "</th>";

                foreach ($listProject as $valeur) { 
                        echo "<tr>";
                            echo "<td>";
                                echo $valeur['title'];
                            echo "</td>";
                            echo '<form method="POST" enctype="multipart/form-data">';
                                echo "<td>";
                                    echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form'.$valeur['id_project'].'">
                                            Modifier
                                            </button>';
                                    echo '<div class="modal fade" id="form'.$valeur['id_project'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">';
                                        echo'<div class="modal-dialog modal-dialog-centered" role="document">';
                                            echo'<div class="modal-content">';
                                                echo'<div class="modal-header">';
                                                    echo'<h5 class="modal-title" id="exampleModalLongTitle">'.$valeur['title'].'</h5>';
                                                    echo'<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                                                        echo'<span aria-hidden="true">&times;</span>';
                                                    echo'</button>';
                                                echo'</div>';
                                                echo'<div class="modal-body">';
                                                    echo'<form method="POST" enctype="multipart/form-data">';
                                                        echo'<p>';
                                                            echo'<input name="new_img" type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Importer">';
                                                        echo'</p>';
                                                        echo'<p>';
                                                            echo'<input type="text" name="new_title_project" placeholder="Titre du projet"  value="'.$valeur['title'].'">';
                                                        echo'</p>';
                                                        echo'<p>';
                                                            echo'<input type="text" name="new_desc_project" placeholder="Description"  value="'.$valeur['description'].'">';
                                                        echo'</p>';
                                                        echo'<p>';
                                                            echo'<input type="text" name="new_site_link_project" placeholder="Lien du site"  value="'.$valeur['link'].'">';
                                                        echo'</p>';
                                                        echo'<p>';
                                                            echo'<input type="text" name="new_git_link_project" placeholder="Lien github"  value="'.$valeur['link_github'].'">';
                                                        echo'</p>';
                                                        echo'<p>';
                                                            echo'<select id="select_listGrade" name="new_type_project" class="form-control">';
                                                            foreach ($listTypes as $value) {
                                                                echo '<option name="id_types" value="'.$value["id_types"].'">';
                                                                    echo $value["name"];   
                                                                echo '</option>';
                                                            }         
                                                                            
                                                            echo'</select>';
                                                        echo'</p>';
                                                        echo'<p>';
                                                            echo'<input type="hidden" name="id_project" value="'.$valeur['id_project'].'" />';
                                                        echo'</p>';
                                                        echo'<p>';
                                                            echo'<input type="hidden" name="nameSection" value="'.$valeur['title'].'"/>';
                                                        echo'</p>';
                                                        echo'<div class="modal-footer">';
                                                            echo'<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>';
                                                            echo'<input type="submit" name="id_project_update"  class="btn btn-primary" value="Modifier"/>';
                                                            echo'<input type="submit" name="id_project_delete"  class="btn btn-primary" value="Supprimer"/>';
                                                        echo'</div>';
                                                    echo'</form>';
                                                echo'</div>';
                                                
                                            echo'</div>';
                                        echo'</div>';     
                                echo "</td>";
                            echo '</form>';
                        echo "</tr>";
                }
            echo "</table>";
        } 
        else { 
            
            echo "Il n'y a aucun résultats";
        }
    }

    function myProject(){
        $project = new project();
        $listProject = $project->get();
        if ($listProject->num_rows > 0) {
            echo "<div class='container-fluid d-flex flex-wrap justify-content-center' >";	
                foreach ($listProject as $valeur) { //Boucle : Pour chaque resultat 
                    
                    echo "<div class='card'>";	
                        echo '<img class="card-img-top" alt="Image Project" src="assets/img/imgProject/'.$valeur['img_src'].'">';
                        echo'<div class="card-body">';
                            echo'<p class="card-text">'.$valeur['title'].'</p>';

                            echo'<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#infosModal'.$valeur["id_project"].'">';
                                echo'En savoir plus';
                                echo'<input type="hidden" id="id_project" value="'.$valeur["id_project"].'"></input>';
                            echo'</button>';

                            echo'
                                <div class="modal fade" id="infosModal'.$valeur["id_project"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">'.$valeur['title'].'</h5>
                                                
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>'.$valeur['description'].'</p>
                                                <p>Lien: <a href='.$valeur['link'].'>'.$valeur['link'].'</a><p>		
                                                <p>GitHub: <a href='.$valeur['link_github'].'>'.$valeur['link_github'].'</a><p>														
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ';
                        echo'</div>';
                    echo "</div>";
                    
                }
            echo "</div>";
        }else{
            echo 'aucun resultat';
        }
    }

    function createProject(){
        $project = new project();
        //upload img
        $img = $_FILES['img'];
        //$imgSrc = $img['name'];
        $project->img_name = $img['name'];
        
        
        $ext = strtolower(substr($img['name'],-3));
        $allow_ext = array('jpg', 'png','gif');
        //Verifie si c'est une image 
        if (in_array($ext,$allow_ext)){
            move_uploaded_file($img['tmp_name'],"assets/img/imgProject/".$img['name']);
        }else{
            $erreur = "Votre fichier n'est pas pris en charge ";
        }
        $title_project = $_POST['title_project'];
        $desc_project = $_POST['desc_project'];
        $site_link_project = $_POST['site_link_project'];
        $git_link_project = $_POST['git_link_project'];
        $typeProject = $_POST['typeProject'];
        $project->create($title_project,$desc_project,$site_link_project,$git_link_project,$typeProject);
          
    }
    function deleteProject(){
        $project = new project();
        $id = $_POST['id_project'];
        $project->delete($id);
    }

    function updateProject(){
        $project = new project();
        //upload img
        $img = $_FILES['new_img'];
        //$imgSrc = $img['name'];
        $project->new_img_name = $img['name'];
        
        
        $ext = strtolower(substr($img['name'],-3));
        $allow_ext = array('jpg', 'png','gif');
        //Verifie si c'est une image 
        if (in_array($ext,$allow_ext)){
            move_uploaded_file($img['tmp_name'],"assets/img/imgProject/".$img['name']);
            
        }else{
            $erreur = "Votre fichier n'est pas pris en charge ";
        }

        $id = $_POST['id_project'];
        $new_title = $_POST['new_title_project'];
        $new_desc_project = $_POST['new_desc_project'];
        $new_site_link_project = $_POST['new_site_link_project'];
        $new_git_link_project = $_POST['new_git_link_project'];
        $new_type = $_POST['new_type_project'];
        $project->update($new_title,$new_desc_project,$new_site_link_project,$new_git_link_project,$new_type,$id );
        
    }
    

?>