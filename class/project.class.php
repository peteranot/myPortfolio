<?php
    include __DIR__."/connexion.php";
    /**
     * Manage **Img** objects
     * @property string $img_name
     */
    class project {
        public $img_name;
        public $new_img_name;
        /**
         * function get 
         * 
         * @param
         * @return 
        */
        public function get(){
            global $connect_db;
            $req = "SELECT * from project" ; 
            $resProject = $connect_db->query($req); 

            return $resProject; 
        }

        /**
         * function create 
         * 
         * @param
         * @return 
         */
        public function create($title_project,$desc_project,$site_link_project,$git_link_project,$typeProject){
            global $connect_db;
            
            $req = "INSERT INTO `project`(`img_src`,`title`,`description`,`link`,`link_github`,`id_types`) VALUES ('".$this->img_name."','$title_project','$desc_project','$site_link_project','$git_link_project','$typeProject')";
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
            $sql_delete = "DELETE FROM project WHERE id_project=".$id;

            // execute la requête précédente
            $connect_db->query($sql_delete);

        }

         /**
         * function update 
         * 
         * @param
         * @return 
         */
        public function update($new_title,$new_desc_project,$new_site_link_project,$new_git_link_project,$new_type,$id){
            global $connect_db;
            
            $sql_update = "UPDATE `project` SET `img_src`='".$this->new_img_name. "', `title`= '".$new_title."' ,`description`= '".$new_desc_project."' ,`link`= '".$new_site_link_project."',`link_github`= '".$new_git_link_project."',`id_types`= '".$new_type."' WHERE id_project =".$id;
            $connect_db->query($sql_update);
        }
    }

?>