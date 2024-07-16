<?php

include_once('../config/Conexion.php');

class Usuario extends Conexion{

    public static function validarlogin($correo, $password) {
        $conexion = self::conectar();
        $consulta = $conexion->prepare("SELECT * FROM usuario WHERE correo = ? LIMIT 1");
        $consulta->bind_param('s', $correo);
        $consulta->execute();
        $resultado = $consulta->get_result()->fetch_assoc();

        if ($resultado) {
            if ($password === $resultado['password']) { // Comparación directa de contraseñas
                session_start();
                $_SESSION['usuario_id'] = $resultado['id'];
                return true;
            } else {      
                return false;
            }
        } 
    }
   
    public static function registrarusuarios($documento,$nombre, $correo, $password) {
        $conexion = self::conectar();
        $consulta = $conexion->prepare("INSERT INTO usuario (documento, nombre, correo, password) VALUES (?, ?, ?, ?)");
        $consulta->bind_param('ssss', $documento, $nombre, $correo, $password);
        $resultado = $consulta->execute();

        return $resultado;
    }


        public static function actualizarusuarios($documento,$nombre, $correo, $password) {
        $conexion = self::conectar();
        $consulta = $conexion->prepare ("UPDATE usuario SET nombre = ?, correo = ?, password = ? WHERE documento = ?");
        $consulta->bind_param('ssss', $documento, $nombre, $correo, $password);
        $resultado = $consulta->execute();

        return $resultado;
}       


        public static function eliminarusuarios($documento) {
        $conexion = self::conectar();
        $consulta = $conexion->prepare ("DELETE FROM usuario WHERE documento = ?;");
        $consulta->bind_param('s', $documento);
        $resultado = $consulta->execute();

        return $resultado;
}

}





?>