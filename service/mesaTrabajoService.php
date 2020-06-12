<?php

    include_once '../model/mesaTrabajo.php';

    class MesaTrabajoService {

        function getAll(){
            $mesaTrabajo = new MesaTrabajo();
            $mesasTrabajos = array();

            $mesasTrabajos["mesasTrabajos"] = array();

            $res = $mesaTrabajo->obtenerMesasTrabajos();

            if($res->rowCount()){
                while($row = $res->fetch(PDO::FETCH_ASSOC)){
                    $item = array(
                        'id' => $row['id'],
                        'nombre' => $row['nombre'],
                        'comunidad' => $row['comunidad'],
                        'latitud' => $row['latitud'],
                        'longitud' => $row['longitud'],
                        'estado' => $row['estado'],
                        'comuna_id' => $row['comuna_id']
                    );

                    array_push($mesasTrabajos["mesasTrabajos"],$item);
                }
                $this->printJSON($mesasTrabajos);
            }else{
                $this->error('No hay elementos registrados');
            }
        }

        function getByIdComuna($id){
            $mesaTrabajo = new MesaTrabajo();
            $mesasTrabajos = array();

            $mesasTrabajos["mesasTrabajos"] = array();

            $res = $mesaTrabajo->obtenerMesasTrabajosByComuna($id);

            if($res->rowCount()){
                while($row = $res->fetch(PDO::FETCH_ASSOC)){
                    $item = array(
                        'id' => $row['id'],
                        'nombre' => $row['nombre'],
                        'comunidad' => $row['comunidad'],
                        'latitud' => $row['latitud'],
                        'longitud' => $row['longitud'],
                        'estado' => $row['estado'],
                        'comuna_id' => $row['comuna_id']
                    );

                    array_push($mesasTrabajos["mesasTrabajos"],$item);
                }
                $this->printJSON($mesasTrabajos);
            }else{
                $this->error('No hay elementos registrados');
            }
        }

        function addNewMesaTrabajo($entity){
            $mesaTrabajo = new MesaTrabajo();

            $res = $mesaTrabajo->addMesaTrabajo($entity);
            if($res){
                $this->success('Nuevo mesa de trabajo registrada');
            }else{
                $this->error('No se pudo insertar mesa de trabajo');
            }

            
        }


        function modifyTrabajo($entity){
            $mesaTrabajo = new MesaTrabajo();

            $res = $mesaTrabajo->modifyMesaTrabajoExist($entity);
            if($res){
                $this->success('Mesa de trabajo modificado correctamente');
            }else{
                $this->error('No se pudo modificar mesa de trabajo');
            }

        }

        function deleteTrabajo($id){
            
            $mesaTrabajo = new MesaTrabajo();
            $res = $mesaTrabajo->deleteMesaTrabajoExist($id);

            if($res){
                $this->success('Mesa de trabajo eliminado correctamente');
            }else{
                $this->error('No se pudo eliminar mesa de trabajo');
            }

        }

        function success($mensaje){
            echo json_encode(array('mensaje' => $mensaje));
        }

        function printJSON($array){
            echo  json_encode($array) ;
        }

        function error($mensaje){
            echo json_encode(array('mensaje' => $mensaje));
        }
    }

?>