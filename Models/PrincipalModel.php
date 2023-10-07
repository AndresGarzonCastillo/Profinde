<?php
class PrincipalModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }
    
    //Obtiene los detalles de un producto específico, incluyendo la categoría a la que pertenece.
    public function getProducto($id_producto)
    {
        $sql = "SELECT p.*, c.categoria FROM productos p INNER JOIN categorias c ON p.idCategoria = c.idCategorias WHERE p.idProducto = $id_producto";
        return $this->select($sql);
    }
    
    public function getProductos($desde, $porPagina)
    {
        $sql = "SELECT * FROM productos LIMIT $desde, $porPagina";
        return $this->selectAll($sql);
    }
    
    public function getTotalProductos()
    {
        $sql = "SELECT COUNT(*) AS total FROM productos";
        return $this->select($sql);
    }
    
    public function getProductosCat($id_categoria, $desde, $porPagina)
    {
        $sql = "SELECT * FROM productos WHERE idCategoria = $id_categoria LIMIT $desde, $porPagina";
        return $this->selectAll($sql);
    }
    
    public function getTotalProductosCat($id_categoria)
    {
        $sql = "SELECT COUNT(*) AS total FROM productos WHERE idCategoria = $id_categoria";
        return $this->select($sql);
    }
    
    public function getRelacionados($id_categoria, $id_producto)
    {
        $sql = "SELECT * FROM productos WHERE idCategoria = $id_categoria AND idProducto != $id_producto ORDER BY RAND() LIMIT 3";
        return $this->selectAll($sql);
    }

    /*public function getListaDeseo($id_producto)
    {
        $sql = "SELECT * FROM productos WHERE idProducto = $id_producto";
        return $this->select($sql);
    }*/
}
?>