<?php
// /api/noticias.php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

// Incluir configuración de la base de datos (ruta relativa desde /api/)
require_once __DIR__ . '/../config/database.php';

// Obtener el método de la petición
$method = $_SERVER['REQUEST_METHOD'];

// Manejar diferentes métodos
switch ($method) {
    case 'GET':
        // Obtener todas las noticias
        try {
            $stmt = $pdo->query("
                SELECT id, titulo, fecha, resumen, contenido, imagen_url 
                FROM noticias 
                ORDER BY fecha DESC
            ");
            $noticias = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // Procesar imágenes en base64
            foreach ($noticias as &$noticia) {
                if (!empty($noticia['imagen_url'])) {
                    $noticia['imagen_url'] = 'data:image/jpeg;base64,' . base64_encode($noticia['imagen_url']);
                } else {
                    $noticia['imagen_url'] = null;
                }
            }
            
            echo json_encode($noticias);
        } catch (PDOException $e) {
            http_response_code(500);
            echo json_encode(['error' => 'Error al obtener noticias: ' . $e->getMessage()]);
        }
        break;

    case 'POST':
        // Crear nueva noticia
        $data = json_decode(file_get_contents('php://input'), true);
        
        if (!$data) {
            http_response_code(400);
            echo json_encode(['error' => 'Datos inválidos']);
            break;
        }

        try {
            $imagenData = isset($data['imagen_data']) ? base64_decode($data['imagen_data']) : null;
            
            $stmt = $pdo->prepare("
                INSERT INTO noticias (titulo, fecha, resumen, contenido, imagen_url, usuario_id)
                VALUES (?, ?, ?, ?, ?, ?)
            ");
            
            $success = $stmt->execute([
                $data['titulo'],
                $data['fecha'],
                $data['resumen'],
                $data['contenido'],
                $imagenData,
                $data['usuario_id'] ?? 1 // Usuario por defecto
            ]);
            
            if ($success) {
                echo json_encode(['success' => true, 'id' => $pdo->lastInsertId()]);
            } else {
                http_response_code(500);
                echo json_encode(['error' => 'Error al crear la noticia']);
            }
        } catch (PDOException $e) {
            http_response_code(500);
            echo json_encode(['error' => 'Error al crear noticia: ' . $e->getMessage()]);
        }
        break;

    case 'PUT':
        // Actualizar noticia existente
        $data = json_decode(file_get_contents('php://input'), true);
        
        if (!$data || !isset($data['id'])) {
            http_response_code(400);
            echo json_encode(['error' => 'Datos inválidos o ID faltante']);
            break;
        }

        try {
            $imagenData = isset($data['imagen_data']) ? base64_decode($data['imagen_data']) : null;
            
            if ($imagenData) {
                $stmt = $pdo->prepare("
                    UPDATE noticias 
                    SET titulo = ?, fecha = ?, resumen = ?, contenido = ?, imagen_url = ?
                    WHERE id = ?
                ");
                $success = $stmt->execute([
                    $data['titulo'],
                    $data['fecha'],
                    $data['resumen'],
                    $data['contenido'],
                    $imagenData,
                    $data['id']
                ]);
            } else {
                $stmt = $pdo->prepare("
                    UPDATE noticias 
                    SET titulo = ?, fecha = ?, resumen = ?, contenido = ?
                    WHERE id = ?
                ");
                $success = $stmt->execute([
                    $data['titulo'],
                    $data['fecha'],
                    $data['resumen'],
                    $data['contenido'],
                    $data['id']
                ]);
            }
            
            if ($success) {
                echo json_encode(['success' => true]);
            } else {
                http_response_code(500);
                echo json_encode(['error' => 'Error al actualizar la noticia']);
            }
        } catch (PDOException $e) {
            http_response_code(500);
            echo json_encode(['error' => 'Error al actualizar noticia: ' . $e->getMessage()]);
        }
        break;

    case 'DELETE':
        // Eliminar noticia
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        
        if ($id <= 0) {
            http_response_code(400);
            echo json_encode(['error' => 'ID inválido']);
            break;
        }

        try {
            $stmt = $pdo->prepare("DELETE FROM noticias WHERE id = ?");
            $success = $stmt->execute([$id]);
            
            if ($success) {
                echo json_encode(['success' => true]);
            } else {
                http_response_code(500);
                echo json_encode(['error' => 'Error al eliminar la noticia']);
            }
        } catch (PDOException $e) {
            http_response_code(500);
            echo json_encode(['error' => 'Error al eliminar noticia: ' . $e->getMessage()]);
        }
        break;

    default:
        http_response_code(405);
        echo json_encode(['error' => 'Método no permitido']);
        break;
}
?>