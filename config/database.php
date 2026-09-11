<?php
/**
 * Configuración de la base de datos - CON FALLBACK AUTOMÁTICO
 * Primero intenta con el hosting, si falla usa local
 * Ubicación: /api/config/database.php
 */

// ==========================================
// CONFIGURACIÓN DE AMBIENTES
// ==========================================

// Definir constantes de entorno
define('ENV_LOCAL', 'local');
define('ENV_HOSTING', 'hosting');

// Detectar automáticamente el entorno
function detectarEntorno() {
    // Lista de dominios/servidores de hosting
    $hosting_domains = [
        'tudominio.com',
        'www.tudominio.com',
        'codehciu.org',
        'www.codehciu.org',
        // Agrega aquí todos los dominios de tu hosting
    ];
    
    $host = $_SERVER['HTTP_HOST'] ?? '';
    
    foreach ($hosting_domains as $domain) {
        if (strpos($host, $domain) !== false) {
            return ENV_HOSTING;
        }
    }
    
    // Si no coincide con ningún dominio de hosting, es local
    return ENV_LOCAL;
}

// ==========================================
// CONFIGURACIÓN DE BASES DE DATOS
// ==========================================

// Configuración LOCAL (XAMPP/WAMP/MAMP)
$config_local = [
    'host' => 'localhost',
    'dbname' => 'sistema_noticias',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8mb4'
];

// Configuración HOSTING (tu servidor remoto)
$config_hosting = [
     'host' => '148.72.3.93',
    'dbname' => 'sistema_noticias',
    'username' => 'admincodehciu',
    'password' => 'C0d3hc1u.25*',
    'charset' => 'utf8mb4'
];

// ==========================================
// FUNCIÓN PARA CONECTAR CON FALLBACK
// ==========================================

function conectarBD() {
    global $config_local, $config_hosting;
    
    // Primero intentar con la configuración del hosting
    $configs_to_try = [
        'hosting' => $config_hosting,
        'local' => $config_local
    ];
    
    $ultimo_error = null;
    $conexion_exitosa = false;
    $pdo = null;
    $entorno_usado = null;
    
    foreach ($configs_to_try as $entorno => $config) {
        try {
            $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";
            $pdo = new PDO($dsn, $config['username'], $config['password'], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
            ]);
            
            // Verificar conexión
            $pdo->query("SELECT 1");
            
            $conexion_exitosa = true;
            $entorno_usado = $entorno;
            break;
            
        } catch (PDOException $e) {
            $ultimo_error = $e->getMessage();
            // Si falla, intentar con el siguiente (local)
            continue;
        }
    }
    
    if (!$conexion_exitosa) {
        // Si ambos fallaron, mostrar error
        die("Error de conexión a la base de datos en ambos entornos. Último error: " . $ultimo_error);
    }
    
    // Guardar el entorno usado para referencia
    define('ENTORNO_USADO', $entorno_usado);
    
    return $pdo;
}

// ==========================================
// ESTABLECER CONEXIÓN
// ==========================================

try {
    $pdo = conectarBD();
    
    // Si quieres saber qué entorno se está usando (para debugging)
    if (defined('ENTORNO_USADO')) {
        error_log("✅ Conectado a la base de datos usando: " . ENTORNO_USADO);
    }
    
} catch (PDOException $e) {
    $errorMessage = "Error de conexión a la base de datos: " . $e->getMessage();
    if (defined('DEV_MODE') && DEV_MODE) {
        die($errorMessage);
    } else {
        error_log($errorMessage);
        die('Error al conectar con el servidor. Por favor intente más tarde.');
    }
}

// ==========================================
// FUNCIÓN PARA OBTENER EL ENTORNO ACTUAL
// ==========================================

function getEntornoActual() {
    return defined('ENTORNO_USADO') ? ENTORNO_USADO : 'desconocido';
}

// ==========================================
// FUNCIÓN PARA VERIFICAR CONEXIÓN
// ==========================================

function verificarConexion() {
    global $pdo;
    try {
        $pdo->query("SELECT 1");
        return true;
    } catch (PDOException $e) {
        return false;
    }
}
?>