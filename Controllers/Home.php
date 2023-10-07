<?php
class Home extends Controller
{
    public function __construct(){
        parent::__construct();
        session_start();
        //session_destroy();
    }

    public function session(){
        parent::__construct();
        session_destroy();
        $data['title'] = 'Pagina Principal';
        $this->views->getView('home', 'index', $data);
    }
    
    public function index()
    {
        $data['title'] = 'Pagina Principal';
        $data['categorias'] = $this->model->getCategorias();
        $data['nuevoProductos'] = $this->model->getNuevoProductos();
        $this->views->getView('home', 'index', $data);
    }
}
?>
