<?php
//biblioteca para envio de correos
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

class Clientes extends Controller
{
    // Inicializa el controlador y establece una sesión
    public function __construct(){
        parent::__construct();
        session_start();
        //session_destroy();
    }
    //representa la página principal del perfil del cliente
    public function index()
    {
        //Comprueba si la sesión está iniciada, y si no es así, redirige al usuario a la página de inicio
        if (empty($_SESSION['correoCliente'])) {
            header('Location: ' . BASE_URL);
        }

        // Obtén todos los datos del cliente desde la base de datos
        $correoCliente = $_SESSION['correoCliente'];
        
        $data['title'] = 'Perfil';
        $data['verificar'] = $this->model->getVerificar($_SESSION['correoCliente']);

        //carga una vista en referencia a lo contenido en views/principal
        $this->views->getView('principal', 'perfil', $data);
    }

    public function registroDirecto()
    {
        //Recibe datos POST
        if (isset($_POST['nombreCliente']) && isset($_POST['passwordCliente'])){
            //Comprueba si todos los campos están completos y verifica si ya existe un cliente con el mismo correo
            if (empty($_POST['nombreCliente']) || empty($_POST['emailCliente']) || empty($_POST['passwordCliente'])) {
                $mensaje = array('msg' => 'Todos los campos son necesarios', 'icono' => 'warning');
                //registra al cliente en la base de datos e inicia una sesión
            } else {
                $nombreCliente = $_POST['nombreCliente'];
                $emailCliente = $_POST['emailCliente'];
                $passwordCliente = $_POST['passwordCliente'];
                $verificar = $this->model->getVerificar($emailCliente);
                if (empty($verificar)) {
                    $token = md5($emailCliente);
                    $hash = password_hash($passwordCliente, PASSWORD_DEFAULT);
                    $data = $this->model->registroDirecto($nombreCliente, $emailCliente, $hash, $token);
                    //$this->enviarCorreo($emailCliente, $token);
                    //exit;
                    if ($data > 0){                    
                        $_SESSION['correoCliente'] = $emailCliente;
                        $_SESSION['nombresCliente'] = $nombreCliente;
                        $mensaje = array('msg' => 'registro exitoso', 'icono' => 'success', 'token' => $token);
                    } else {
                        $mensaje = array('msg' => 'no se completo el registro', 'icono' => 'error');
                    }
                } else {
                    $mensaje = array('msg' => 'ya tienes cuenta con este correo', 'icono' => 'warning');
                }
            }
            echo json_encode($mensaje, JSON_UNESCAPED_UNICODE);
            die();
        }
    }

    public function crear()
    {
        //Recibe datos POST
        if (isset($_POST['nombreSolicitud']) && isset($_POST['usuario']) && isset($_POST['categoria']) && isset($_POST['descripcion'])) {
            //Comprueba si todos los campos están completos y verifica si ya existe un cliente con el mismo correo
            if (empty($_POST['nombreSolicitud']) || empty($_POST['usuario']) || empty($_POST['categoria']) || empty($_POST['descripcion'])) {
                $mensaje = array('msg' => 'Todos los campos son necesarios', 'icono' => 'warning');
                //registra al cliente en la base de datos e inicia una sesión
            } else {
                $nombreSolicitud = $_POST['nombreSolicitud'];
                $usuario = $_POST['usuario'];
                $categoria = $_POST['categoria'];
                $descripcion = $_POST['descripcion'];
            }
            $data = $this->model->crear($nombreSolicitud, $usuario, $categoria, $descripcion);
            if ($data > 0) {
                // Solicitud creada exitosamente
                $mensaje = array('msg' => 'Solicitud creada exitosamente', 'icono' => 'success');
                header('Location: ' . BASE_URL . 'principal/crear');
            } else {
                // Error al crear la solicitud
                $mensaje = array('msg' => 'No se pudo crear la solicitud', 'icono' => 'error');
            }
            echo json_encode($mensaje, JSON_UNESCAPED_UNICODE);
            die();
        }
    }

    //envía un correo de verificación al cliente
    public function enviarCorreo()
    {
        if (isset($_POST['emailCliente']) && isset($_POST['token'])) {
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->SMTPDebug = 0;//Enable verbose debug output
                $mail->isSMTP();//Send using SMTP
                $mail->Host       = HOST_SMTP;//Set the SMTP server to send through
                $mail->SMTPAuth   = true;//Enable SMTP authentication
                $mail->Username   = USER_SMTP;//SMTP username
                $mail->Password   = PASS_SMTP;//SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;//Enable implicit TLS encryption
                $mail->Port       = 465;//TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Quen recibe
                $mail->setFrom('andgar.tics@gmail.com', TITLE);
                $mail->addAddress($_POST['emailCliente']);

                //Contenido
                $mail->isHTML(true);//Set email format to HTML
                $mail->Subject = 'Mensaje desde la ' . TITLE;
                $mail->Body    = 'Para verificar tu correo en Profinde <a href="'.BASE_URL.'clientes/verificarCorreo/'.$_POST['token'].'">CLIC AQUI</a>';
                $mail->AltBody = '¡GRACIAS!';
                $mail->send();
                $mensaje = array('msg' => 'correo enviado', 'icono' => 'success');
            } catch (Exception $e) {
                $mensaje = array('msg' => 'no se pudo enviar un correo'. $mail->ErrorInfo, 'icono' => 'error');
            }
        } else {
            $mensaje = array('msg' => 'Error Fatal', 'icono' => 'error');
        }
        echo json_encode($mensaje, JSON_UNESCAPED_UNICODE);
        die();        
    }

    //Verifica el correo del cliente utilizando un token
    public function verificarCorreo($token)
    {
        //Busca el token en la base de datos
        $verificar = $this->model->getToken($token);
        //si lo encuentra, actualiza el estado de verificación del cliente y redirige al cliente a la página de inicio de sesión
        if (!empty($verificar)) {
            $data = $this->model->actualizarVerify($verificar['idCliente']);
            header('Location: ' . BASE_URL. 'clientes');
        }
    }

    //Maneja el inicio de sesión directo del cliente
    public function loginDirecto()
    {
        //Recibe datos POST con el correo y la contraseña del cliente
        if (isset($_POST['correoLogin']) && isset($_POST['claveLogin'])){
            //Comprueba si los campos están completos y si el correo existe en la base de datos
            if (empty($_POST['correoLogin']) || empty($_POST['claveLogin'])) {
                $mensaje = array('msg' => 'Todos los campos son necesarios', 'icono' => 'warning');                
            } else {
                $emailCliente = $_POST['correoLogin'];
                $passwordCliente = $_POST['claveLogin'];
                $verificar = $this->model->getVerificar($emailCliente);
                if (!empty($verificar)) {
                    //verifica la contraseña y, si es correcta, inicia una sesión
                    if (password_verify($passwordCliente, $verificar['passwordCliente'])){                    
                        $_SESSION['correoCliente'] = $verificar['emailCliente'];
                        $_SESSION['nombresCliente'] = $verificar['nombreCliente'];
                        $mensaje = array('msg' => 'login exitoso', 'icono' => 'success');
                    } else {
                        $mensaje = array('msg' => 'contraseña incorrecta', 'icono' => 'error');
                    }
                } else {
                    $mensaje = array('msg' => 'este correo no existe', 'icono' => 'warning');
                }
            }            
            echo json_encode($mensaje, JSON_UNESCAPED_UNICODE);
            die();
        }
    }
}
