<?php
class Controller{
    protected $views, $model;
    //se inicializa una instancia de la clase Views
    public function __construct()
    {
        $this->views = new Views();
        $this->cargarModel();
    }
    //cargar el modelo correspondiente de la clase del controlador
    public function cargarModel()
    {
        //crear una instancia del controlador
        $model = get_class($this)."Model";
        $ruta = "Models/".$model.".php";
        if(file_exists($ruta)){
            require_once $ruta;
            $this->model = new $model();
        }
    }
}
?>
