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
}