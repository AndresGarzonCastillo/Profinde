<?php
class HomeModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }
    
    //Obtiene todas las categorías de productos de la base de datos y las devuelve
    public function getCategorias()
    {
        $sql = "SELECT * FROM categorias";
        return $this->selectAll($sql);
    }
    
    public function getNuevoProductos()
    {
        $sql = "SELECT * FROM productos ORDER BY idProducto DESC LIMIT 12";
        return $this->selectAll($sql);
    }
}
?>