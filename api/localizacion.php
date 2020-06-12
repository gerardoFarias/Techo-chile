<?php 
    header('Content-Type: application/json');
    include_once '../service/locationService.php';
    
    
    $api = new locationService();

    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':

            echo $_SERVER['REQUEST_URI'];

//            echo getcwd();
            // if(isset($_GET['id'])){
            //     $idUser = $_GET['id'];
            //     if(is_numeric($idUser)){
            //         $api->getById($idUser);
            //     }else{
            //         $api->error('El parametro debe ser numerico');
            //     }
            // }else{
            //     $api->getAll();
            // }
        break;
        case 'POST':
            $entity = json_decode(file_get_contents('php://input'));
            $api->addNewUser($entity);
            
        break;
        case 'PUT':
            $entity = json_decode(file_get_contents('php://input'));
            $api->modifyUser($entity);
        break;
        case 'DELETE':
            $idUser = $_GET['id'];
            $api->deleteUser($idUser);
        break;
        default:
            echo json_encode('Metodo no soportado');
    }    

?>