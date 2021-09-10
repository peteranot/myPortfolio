<?php
    include __DIR__."/connexion.php";
    class types {
        /**
         * function get 
         * 
         * @param
         * @return 
        */
        public function get(){
            global $connect_db;
            $req = "SELECT * from types_project" ; 
            $resProject = $connect_db->query($req); 

            return $resProject; 
        }

        /**
         * function create 
         * 
         * @param
         * @return 
         */
        public function create($name){
            global $connect_db;
            
            $req = "INSERT INTO `types_project`(`name`) VALUES ('$name')";
            $connect_db->query($req);

        }

        /**
         * function delete 
         * 
         * @param
         * @return 
         */
        public function  delete($id){
            
            global $connect_db; 
            //sql to delete a record
            $sql_delete = "DELETE FROM types_project WHERE id_types=".$id;

            // execute la requête précédente
            $connect_db->query($sql_delete);

        }

         /**
         * function update 
         * 
         * @param
         * @return 
         */
        public function update($new_name,$id_types){
            global $connect_db;
            
            $sql_update = "UPDATE `types_project` SET `name`= '".$new_name."' WHERE id_types =".$id_types;
            $connect_db->query($sql_update);
        }
    }

?>