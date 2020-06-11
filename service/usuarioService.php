<?php

    include_once '../model/usuario.php';

    class usuarioService {

        function getAll(){
            $usuario = new Usuario();
            $usuarios = array();

            $usuarios["usuarios"] = array();

            $res = $usuario->obtenerUsuarios();

            if($res->rowCount()){
                while($row = $res->fetch(PDO::FETCH_ASSOC)){
                    $item = array(
                        'id' => $row['id'],
                        'nombres' => $row['nombres'],
                        'apellido_paterno' => $row['apellido_paterno'],
                        'apellido_materno' => $row['apellido_materno'],
                        'email' => $row['email'],
                        'password' => $row['password'],
                        'estado' => $row['estado'],
                        'perfil' => $row['perfil_id']
                    );

                    array_push($usuarios["usuarios"],$item);
                }
                $this->printJSON($usuarios);
            }else{
                $this->error('No hay elementos registrados');
            }
        }

        function getById($id){
            $usuario = new Usuario();
            $usuarios = array();

            $usuarios["usuarios"] = array();

            $res = $usuario->obtenerOneUser($id);

            if($res->rowCount()){
                while($row = $res->fetch(PDO::FETCH_ASSOC)){
                    $item = array(
                        'id' => $row['id'],
                        'nombres' => $row['nombres'],
                        'apellido_paterno' => $row['apellido_paterno'],
                        'apellido_materno' => $row['apellido_materno'],
                        'email' => $row['email'],
                        'password' => $row['password'],
                        'estado' => $row['estado'],
                        'perfil' => $row['perfil_id']
                    );

                    array_push($usuarios["usuarios"],$item);
                }
                $this->printJSON($usuarios);
            }else{
                $this->error('No hay elementos registrados');
            }
        }


        function printJSON($array){
            echo  json_encode($array) ;
        }

        function error($mensaje){
            echo json_encode(array('mensaje' => $mensaje));
        }
    }

?>