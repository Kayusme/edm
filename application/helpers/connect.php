<?php
    if (!function_exists("is_already_in_use")){
        function is_already_in_use($field,$value,$table)
        {
            global $db;
            $q = $db->prepare("SELECT id_patient FROM $table WHERE $field = ?");
            $q->execute([$value]);
            $count = $q->rowCount();
            $q->closeCursor();
            return $count;
            /*$query = mysql_query("SELECT COUNT(id) FROM $table WHERE $field = $value");
            $exec =mysql_result($query,0);
            */
        }
    }

    if (!function_exists("eleve_connect")){
        function eleve_connect($matricul,$nomEcole,$pass_word){
            $errors = [];
            global $db;
            if(!empty($matricul) || !empty($nomEcole) || !empty($pass_word) ){
                if(mb_strlen($matricul) < 3){
                    $errors[] = "Mauvais matricule";
                }

    //insertion dans la base de donnees
                if(count($errors) == 0){
                    $matricul = e($matricul);
                    $nomEcole = e($nomEcole);
                    $pass_word = e($pass_word);
                    $pass_word = password_verify($pass_word,PASSWORD_BCRYPT);

                    $q = $db->prepare("SELECT * FROM eleve WHERE matricule = ? AND nom_ecole = ? AND password = ?");
                    $q->execute([$matricul,$nomEcole,$pass_word]);
                    return array("success");
                }
                else{
                    return $errors;
                }
            }else
            {
                $errors[] = "Veuillez saisir tous les champs";
            }
            return $errors;
        }
    }
?>