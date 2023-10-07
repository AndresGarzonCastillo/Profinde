<?php
//se obtiene la configuracion general del proyecto
require_once 'Config/Config.php';
// Obtiene la URL solicitada o establece un valor predeterminado
$ruta = !empty($_GET['url']) ? $_GET['url']: "home/index";
// Divide la URL en un arreglo utilizando "/" como separador
$array = explode("/", $ruta);
// El primer elemento del arreglo se usa como nombre del controlador
$controller = ucfirst($array[0]);
// El segundo elemento del arreglo se usa como nombre del método, por defecto es "index"
$metodo = "index";
// Inicializa una cadena para almacenar los parámetros
$parametro = "";

// Verifica si hay un segundo elemento en la URL (nombre del método)
if (!empty($array[1])){
    if (!empty($array[1] != "")){
        $metodo = $array[1];
    }
}

// Verifica si hay más elementos en la URL (parámetros)
if (!empty($array[2])){
    if (!empty($array[2] != "")){
        // Recorre los elementos restantes y los concatena como parámetros
        for ($i = 2; $i < count($array); $i++){
            $parametro .= $array[$i] . ",";
        }
        // Elimina la última coma si existe
        $parametro = trim($parametro, ",");
    }
}

// Incluye los archivos de configuración y helpers
require_once 'Config/App/Autoload.php';
require_once 'Config/Helpers.php';

// Define la ruta al archivo del controlador
$dirControllers = "Controllers/" . $controller . ".php";

// Verifica si el archivo del controlador existe
if(file_exists($dirControllers)){
    require_once $dirControllers;
    // Crea una instancia del controlador y verifica si el método existe
    $controller = new $controller();
    if(method_exists($controller, $metodo)){
        // Llama al método del controlador con los parámetros
        $controller->$metodo($parametro);
    } else {
        // Redirecciona a una página de errores si el método no existe
        header('Location:'.BASE_URL . 'errors');
    }
} else {
    // Redirecciona a una página de errores si el controlador no existe
    header('Location:'.BASE_URL . 'errors');
}
?>
