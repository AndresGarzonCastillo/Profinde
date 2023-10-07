<?php
class Principal extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }
    
    public function index()
    {
        //$data['title'] = 'Pagina Principal';
        //$this->views->getView('home', 'index', $data);
    }
    
    //busca y muestra la pagina nosotros
    public function about() 
    {
        $data['title'] = 'Nosotros';
        $this->views->getView('principal', 'about', $data);
    }
    
    public function shop($page) 
        //código relacionado con la paginación y obtención de productos
    {
        $pagina = (empty($page)) ? 1 : $page;
        $porPagina = 3;
        $desde = ($pagina - 1) * $porPagina;
        $data['title'] = 'Nuestros productos';
        $data['productos'] = $this->model->getProductos($desde, $porPagina);
        $data['pagina'] = $pagina;
        $total = $this->model->getTotalProductos();
        $data['total'] = ceil($total['total'] / $porPagina);
        $this->views->getView('principal', 'shop', $data);
    }
    
    public function detail($id_producto)
        //código relacionado con la visualización de detalles del producto
    {
        $data['producto'] = $this->model->getProducto($id_producto);
        $id_categoria = $data['producto']['idCategoria'];
        $data['relacionados'] = $this->model->getRelacionados($id_categoria, $data['producto']['idProducto']);
        $data['title'] = $data['producto']['productoNombre'];
        $this->views->getView('principal', 'detail', $data);
    }
    
    public function categorias($datos) 
        //código relacionado con la visualización de productos por categoría
    {
        $id_categoria = 1;
        $page = 1;
        $array = explode(',', $datos);
        if (isset($array[0])){
            if (!empty($array[0])){
                $id_categoria = $array[0];
            }
        }
        if (isset($array[1])){
            if (!empty($array[1])){
                $page = $array[1];
            }
        }
        $pagina = (empty($page)) ? 1 : $page;
        $porPagina = 3;
        $desde = ($pagina - 1) * $porPagina;
        $data['pagina'] = $pagina;
        $total = $this->model->getTotalProductosCat($id_categoria);
        $data['total'] = ceil($total['total'] / $porPagina);
        $data['productos'] = $this->model->getProductosCat($id_categoria, $desde, $porPagina);
        $data['title'] = 'Categorias';
        $data['idCategoria'] = $id_categoria;
        $this->views->getView('principal', 'solicitudes', $data);
    }
    
    //Muestra la página de contacto
    public function contactos()
    {
        $data['title'] = 'Contactos';
        $this->views->getView('principal', 'contact', $data);
    }

    //Muestra la página de crear servicio
    public function crear()
    {
        $data['title'] = 'Crear Servicio';
        $this->views->getView('principal', 'crear', $data);
    }

    //Muestra la página de servicios solicitados
    public function solicitudes()
    {
        $data['title'] = 'Solicitudes';
        $this->views->getView('principal', 'solicitudes', $data);
    }

    /*public function solicitudes()
    {
        // Llama a un método en tu modelo para obtener todas las solicitudes desde la base de datos
        $solicitudes = $this->model->obtenerTodasLasSolicitudes();

        // Verifica si se obtuvieron datos antes de pasarlos a la vista
        if ($solicitudes !== null) {
            // Carga la vista de solicitudes y pasa los datos de las solicitudes
            $data['solicitudes'] = $solicitudes;
            $data['title'] = 'Solicitudes';
            $this->views->getView('principal', 'solicitudes', $data);
        } else {
            echo "No hay solicitudes disponibles.";
        }
    }*/

    
    public function deseo()
    {
        $data['title'] = 'Lista de deseos';
        $this->views->getView('principal', 'deseo', $data);
    }

    public function listaDeseo() 
    {
        $datos = file_get_contents('php://input');
        $json = json_decode($datos, true);
        $array['productos'] = array();
        foreach ($json as $producto){    
            $result = $this->model->getProducto($producto['id_Producto']);
            $data['idProducto'] = $result['idProducto'];
            $data['productoNombre'] = $result['productoNombre'];
            $data['productoPrecio'] = $result['productoPrecio'];
            $data['cantidad'] = $producto['cantidad'];
            $data['productoImagen'] = $result['productoImagen'];
            array_push($array['productos'], $data);
        }
        $array['moneda'] = MONEDA;
        echo json_encode($array, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function listaProductos()
    {
        $datos = file_get_contents('php://input');
        $json = json_decode($datos, true);
        $array['productos'] = array();
        $total = 0.0;
        foreach ($json as $producto){    
            $result = $this->model->getProducto($producto['id_Producto']);
            $data['idProducto'] = $result['idProducto'];
            $data['productoNombre'] = $result['productoNombre'];
            $data['productoPrecio'] = $result['productoPrecio'];
            $data['cantidad'] = $producto['cantidad'];
            $data['productoImagen'] = $result['productoImagen'];
            $subTotal = $result['productoPrecio'] * $producto['cantidad'];
            $data['subTotal'] = number_format($subTotal, 1);
            array_push($array['productos'], $data);
            $total += $subTotal;
        }
        $array['total'] = number_format($total, 1);
        $array['moneda'] = MONEDA;
        echo json_encode($array, JSON_UNESCAPED_UNICODE);
        die();
    }
    
    public function listaCarrito()
    {
        $datos = file_get_contents('php://input');
        $json = json_decode($datos, true);
        $array['productos'] = array();
        $total = 0.0;
        foreach ($json as $producto){    
            $result = $this->model->getProducto($producto['id_Producto']);
            $data['idProducto'] = $result['idProducto'];
            $data['productoNombre'] = $result['productoNombre'];
            $data['productoPrecio'] = $result['productoPrecio'];
            $data['cantidad'] = $producto['cantidad'];
            $data['productoImagen'] = $result['productoImagen'];
            $subTotal = $result['productoPrecio'] * $producto['cantidad'];
            $data['subTotal'] = number_format($subTotal, 1);
            array_push($array['productos'], $data);
            $total += $subTotal;
        }
        $array['total'] = number_format($total, 1);
        $array['moneda'] = MONEDA;
        echo json_encode($array, JSON_UNESCAPED_UNICODE);
        die();
    }
}
?>
