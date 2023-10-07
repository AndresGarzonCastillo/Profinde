<?php
class ClientesModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }
    
    //inserta un nuevo registro de cliente en la base de datos
    public function registroDirecto($nombreCliente, $emailCliente, $passwordCliente, $token)
    {
        $sql = "INSERT INTO clientes (nombreCliente, emailCliente, passwordCliente, token) VALUES (?,?,?,?)";
        $datos = array($nombreCliente, $emailCliente, $passwordCliente, $token);
        $data = $this->insertar($sql, $datos);
        if ($data > 0) {
            $res = $data;
        } else {
            $res = 0;
        }
        return $res;
    }

    public function crear($nombreSolicitud, $usuario, $categoria, $descripcion)
    {
        $sql = "INSERT INTO categorias (nombreSolicitud, usuario, categoria, descripcion) VALUES (?,?,?,?)";
        $datos = array($nombreSolicitud, $usuario, $categoria, $descripcion);
        $data = $this->insertar($sql, $datos);
        if ($data > 0) {
            $res = $data;
        } else {
            $res = 0;
        }
        return $res;
    }

    public function obtenerTodasLasSolicitudes()
    {
        $sql = "SELECT * FROM categorias";
        return $this->select($sql);
    }


    //Busca un cliente por su token de verificación
    public function getToken($token)
    {
        //retorna los datos del cliente si se encuentra
        $sql = "SELECT * FROM clientes WHERE token = '$token'";
        return $this->select($sql);
    }

    //Actualiza el estado de verificación de un cliente dado su ID
    public function actualizarVerify($id)
    {
        $sql = "UPDATE clientes SET token=?, verify=? WHERE idCliente=?";
        $datos = array(null, 1, $id);
        $data = $this->save($sql, $datos);
        //Marca al cliente como verificado
        if ($data == 1) {
            $res = $data;
        } else {
            $res = 0;
        }
        return $res;
    }

    //Busca un cliente por su dirección de correo electrónico
    public function getVerificar($emailCliente)
    {
        //retorna sus datos si se encuentra
        $sql = "SELECT * FROM clientes WHERE emailCliente = '$emailCliente'";
        return $this->select($sql);
    }
}
