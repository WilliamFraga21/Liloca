<?php

require_once '../conectaBD.php';

$id = filter_input(INPUT_GET, 'id');

try {

    if ($id) {
        $conn->exec("DELETE FROM enfeites WHERE idEnfeites = $id");
    
        header("location: ../Consulta.php");
        exit();
    }
} catch (\Exception $e) {
    echo $e->getMessage();
}

