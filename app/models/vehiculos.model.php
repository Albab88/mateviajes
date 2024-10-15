<?php
    require_once('model.php');

    class VehiculosModel extends Model {

    public function getVehiculos(){
        $pdo = $this->crearConexion();
        $sql = "select * from vehiculos order by marca";
        $query = $pdo->prepare($sql);
        $query->execute();
    
        $vehiculos = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $vehiculos;
    }
    
}