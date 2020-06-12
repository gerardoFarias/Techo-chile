<?php 
    header('Content-Type: application/json');
    include_once '../service/locationService.php';
    
    
    $api = new locationService();

    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':
            $idComuna = $_GET['id'];
            $api->getComunasByProvincias($idComuna);
        break;
        case 'POST':
            echo json_encode('Metodo POST no implementado');
        break;
        case 'PUT':
            echo json_encode('Metodo PUT no implementado');
        break;
        case 'DELETE':
            echo json_encode('Metodo DELETE no implementado');
        break;
        default:
            echo json_encode('Metodo no soportado');
    }    

?>