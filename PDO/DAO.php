<?php

require_once './parametros.php';

/**
 * Description of DAO
 *
 * @author UskoKruM2010
 */
class DAO {

    private $cadenaConexion;
    private $conexion;

    public function __construct() {
        try {
            $this->cadenaConexion = "mysql:host=" . BD_SERVIDOR . ";port="
                    . BD_PUERTO . ";dbname=" . BD_NOMBRE . ";charset=" . BD_CHARSET;
            $this->conexion = new PDO($this->cadenaConexion, BD_USUARIO, BD_PASS);
            // echo "Conexión exitosa";
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function ejecutarConsulta($sql = "", $valores = array()) {
        if ($sql != "" && strlen($sql) > 0) {
            try {
                $consulta = $this->conexion->prepare($sql);
                $consulta->execute($valores);
                if (intval($consulta->errorCode()) === 0) {
                    return $consulta->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    // return $consulta->errorInfo();
                    return intval($consulta->errorCode());
                }
            } catch (Exception $ex) {
                return $ex->getMessage();
            }
        } else {
            return 0;
        }
    }

    public function ejecutarOrden($sql = "", $valores = array()) {
        if ($sql != "" && strlen($sql) > 0) {
            try {
                $this->conexion->beginTransaction();
                $consulta = $this->conexion->prepare($sql);
                $consulta->execute($valores);
                if (intval($consulta->errorCode()) === 0) {
                    $this->conexion->commit(); // Confirma la acción realizada.
                    return $consulta->rowCount();
                } else {
                    $this->conexion->rollBack();
                    return -1;
                }
            } catch (Exception $ex) {
                $this->conexion->rollBack(); // Regresar a un estado anterior.
                return $ex->getMessage();
            }
        } else {
            return 0;
        }
    }

}

// $dao = new DAO();
