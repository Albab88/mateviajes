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
    public function crearvehiculo($marca, $modelo, $anio, $patente, $asientos){
        $pdo = $this->crearConexion();
        
        $sql = 'INSERT INTO vehiculos (marca,modelo,anio,patente,asientos) 
                VALUES (?,?,?,?,?)';

        $query = $pdo->prepare($sql);
        try {
            $query->execute([$marca, $modelo, $anio, $patente, $asientos]);
        } catch (\Throwable $th) {
            return null;
        }
    }

    public function borrarVehiculoById($id_vehiculo){
        $pdo = $this->crearConexion();
    
        $sql = 'DELETE FROM vehiculos
                WHERE id = ?';

        $query = $pdo->prepare($sql);
        try {
            $query->execute([$id_vehiculo]);
        } catch (\Throwable $th) {
            return null;
        }
    }

    public function getVehiculoById($id_vehiculo){
        $pdo = $this->crearConexion();
        $sql = "SELECT * FROM vehiculos WHERE id = ?";
        $query = $pdo->prepare($sql);
        $query->execute([$id_vehiculo]);
        $vehiculo = $query->fetch(PDO::FETCH_OBJ);
        return $vehiculo;
    }

    public function updateVehiculo($marca, $modelo, $anio, $patente, $asientos, $id){
        $pdo = $this->crearConexion();

        $sql = 'UPDATE vehiculos SET marca = ?, modelo = ?, anio = ?, patente = ?, asientos = ? 
                WHERE id = ?';

        $query = $pdo->prepare($sql);
        try {
            $query->execute([$marca, $modelo, $anio, $patente, $asientos, $id]);
            
        } catch (\Throwable $th) {
            return null;
        }
    }
    
}