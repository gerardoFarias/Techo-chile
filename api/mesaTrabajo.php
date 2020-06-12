<?php 
    header('Content-Type: application/json');
    include_once '../service/mesaTrabajoService.php';
    
    
    
    $api = new MesaTrabajoService();

    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':
            if(isset($_GET['idComuna'])){
                $idComuna = $_GET['idComuna'];
                if(is_numeric($idComuna)){
                    $api->getByIdComuna($idComuna);
                }else{
                    $api->error('El parametro debe ser numerico');
                }
            }else{
                $api->getAll();
            }
        break;
        case 'POST':
            $entity = json_decode(file_get_contents('php://input'));
            $api->addNewMesaTrabajo($entity);
            
        break;
        case 'PUT':
            $entity = json_decode(file_get_contents('php://input'));
            $api->modifyTrabajo($entity);
        break;
        case 'DELETE':
            $idMesaTrabajo = $_GET['id'];
            $api->deleteTrabajo($idMesaTrabajo);
        break;
        default:
            echo json_encode('Metodo no soportado');
    }    

?>