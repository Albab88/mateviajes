<?php

require_once('model.php');

class ViajesModel extends Model {

    public function getDestinos() {
        $pdo = $this->crearConexion();
        $sql = "select * from viajes order by fecha ASC";
        $query = $pdo->prepare($sql);
        $query->execute();
        $destinos = $query->fetchAll(PDO::FETCH_OBJ);
        return $destinos;
    }

    public function crearviaje($destino, $fecha, $horario, $pasajeros, $vehiculo, $info) {
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

    public function deleteDestinoById($id_destino) {
        $pdo = $this->crearConexion();
        $sql = 'DELETE FROM viajes
                WHERE id = ?';
        $query = $pdo->prepare($sql);
        try {
            $query->execute([$id_destino]);
        } catch (\Throwable $th) {
            return null;
        }
    }

    public function getViajeById($id_destino) {
        $pdo = $this->crearConexion();
        $sql = "SELECT * FROM viajes WHERE id = ?";
        $query = $pdo->prepare($sql);
        $query->execute([$id_destino]);
        $viaje = $query->fetch(PDO::FETCH_OBJ);
        return $viaje;
    }

    public function updateViaje($destino, $fecha, $horario, $pasajeros, $vehiculo, $info, $id) {
        $pdo = $this->crearConexion();
        $sql = 'UPDATE viajes SET destino = ?, fecha = ?, horario = ?, pasajeros = ?, fk_vehiculo = ?, descripcion = ?
                WHERE id = ?';
        $query = $pdo->prepare($sql);
        try {
            $query->execute([$destino, $fecha, $horario, $pasajeros, $vehiculo, $info, $id]);
        } catch (\Throwable $th) {
            return null;
        }
    }
}