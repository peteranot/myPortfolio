<?php

include('./controller/projectController.php');
include('./controller/typesController.php');

if(isset($_POST['btn_validate_addtypes'])){
    createTypes();
}

if(isset($_POST['id_types_delete'])){
    deleteTypes();
}

if(isset($_POST['id_types_update'])){
    updateTypes();
}

if(isset($_POST['btn_addProject'])){
    createProject();
}
if(isset($_POST['id_project_delete'])){
    deleteProject();
}
if(isset($_POST['id_project_update'])){
    updateProject();
}


?>