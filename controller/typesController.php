<?php
    include("./class/types.class.php");
    $types = new types();
    $listTypes = $types->get();
    function showListTypes(){
        $types = new types();
        $listTypes = $types->get();
        if ($listTypes->num_rows > 0) {
            echo "<table>";
                echo "<th>";
                    echo "Nom de la section";
                echo "</th>";
                echo "<th>";
                    echo "Actions";
                echo "</th>";
                echo "<th>";
                echo "</th>";

                foreach ($listTypes as $valeur) { 
                        echo "<tr>";
                            echo "<td>";
                                echo $valeur['name'];
                            echo "</td>";
                            echo '<form method="POST">';
                                echo "<td>";
                                        echo "";
                                        //<!-- Button trigger modal -->
                                        echo '
                                        
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form'.$valeur['id_types'].'">
                                                Modifier
                                            </button>
                                            
                                            <div class="modal fade" id="form'.$valeur['id_types'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST">
                                                            <label>Nouveau nom: </label>
                                                            <input type="text" name="new_name_types" placeholder="Nouveau nom"/>
        
                                                            <input type="hidden" name="id_types" value="'.$valeur['id_types'].'"/>
                                                            <input type="hidden" name="nameSection" value="'.$valeur['name'].'"/>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <input type="submit" name="id_types_update"  class="btn btn-primary" value="Modifier"/>
                                                            <input type="submit" name="id_types_delete"  class="btn btn-primary" value="Supprimer"/>
                                                    </div>
                                                        </form>
                                                    </div>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        ';
                                        
                                        
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

    function updateFormTypes(){

    }

    function createTypes(){
        $types = new types();
        $name = $_POST['nameTypes'];
        $types->create($name);
        
    }

    function deleteTypes(){
        $types = new types();
        $id = $_POST['id_types'];
        $types->delete($id);
        
    }

    function updateTypes(){
        $types = new types();
        $id = $_POST['id_types'];
        $new_name = $_POST['new_name_types'];
        $types->update($new_name,$id );
        
    }

?>
