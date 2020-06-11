<?php
    include_once '../config/db.php';

    class Usuario extends DB {

        function obtenerUsuarios(){
            $query = $this->connect()->query('SELECT * FROM techochile.tr_usuario');
            return $query;
        }

        function obtenerOneUser($id){
            $query = $this->connect()->prepare('SELECT * FROM techochile.tr_usuario WHERE id = :id');
            $query->execute(['id' => $id]);
            return $query;
        }

    }
?>