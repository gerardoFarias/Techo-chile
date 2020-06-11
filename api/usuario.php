<?php 
    header('Content-Type: application/json');
    include_once '../service/usuarioService.php';
    
    $api = new usuarioService();

    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':
            if(isset($_GET['id'])){
                $idUser = $_GET['id'];
                $api->getById($idUser);
            }else{
                $api->getAll();
            }
        break;
        case 'POST':
            echo json_encode('Metodo POST aun no implementado');
        break;
        case 'PUT':
            echo json_encode('Metodo PUT aun no implementado');
        break;
        case 'DELETE':
            echo json_encode('Metodo DELETE aun no implementado');
        break;
        default:
            echo json_encode('Metodo no soportado');
    }    

?>