<?php
    require_once('model.php');

    class ViajesModel extends Model {

    public function getDestinos(){
        $pdo = $this->crearConexion();
        $sql = "select * from viajes order by fecha ASC";
        $query = $pdo->prepare($sql);
        $query->execute();
    
        $destinos = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $destinos;
    }

    public function crearviaje($destino, $fecha, $horario, $pasajeros, $vehiculo, $info){
        $pdo = $this->crearConexion();
        
        $sql = 'INSERT INTO viajes (destino, fecha, horario, pasajeros, fk_vehiculo, descripcion) 
                VALUES (?,?,?,?,?,?)';

        $query = $pdo->prepare($sql);
        try {
            $query->execute([$destino, $fecha, $horario, $pasajeros, $vehiculo, $info]);
        } catch (\Throwable $th) {
            return null;
        }
    }
}