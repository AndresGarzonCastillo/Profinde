<?php
//carga la vista llamada "errors" con el método "index"
class Errors extends Controller 
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->views->getView('errors', 'index');
    }
}
?>
