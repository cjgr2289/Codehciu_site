<?php
// /pages/noticias/detalle.php
// Página de detalle de noticias (si se prefiere página independiente en lugar de modal)

// Incluir configuración de la base de datos
require_once __DIR__ . '/../../config/database.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$noticia = null;

if ($id > 0) {
    try {
        $stmt = $pdo->prepare("SELECT id, titulo, fecha, resumen, contenido, imagen_url FROM noticias WHERE id = ?");
        $stmt->execute([$id]);
        $noticia = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($noticia && !empty($noticia['imagen_url'])) {
            $noticia['imagen_url'] = 'data:image/jpeg;base64,' . base64_encode($noticia['imagen_url']);
        }
    } catch (PDOException $e) {
        // Error en la consulta
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $noticia ? $noticia['titulo'] : 'Noticia no encontrada'; ?> - CODEHCIU</title>
    
    <link rel="icon" type="image/x-icon" href="/codehciu/assets/img/favicon.ico">
    <link rel="stylesheet" href="/codehciu/assets/css/reset.css">
    <link rel="stylesheet" href="/codehciu/assets/css/variables.css">
    <link rel="stylesheet" href="/codehciu/assets/css/nav.css">
    <link rel="stylesheet" href="/codehciu/assets/css/footer.css">
    <link rel="stylesheet" href="/codehciu/assets/css/noticias.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            background: #f8f9fa;
        }
        .news-detail-page {
            max-width: 900px;
            margin: 100px auto 60px;
            padding: 0 20px;
        }
        .news-detail-page .news-image-container {
            width: 100%;
            margin-bottom: 30px;
        }
        .news-detail-page .news-image-container img {
            width: 100%;
            max-height: 450px;
            object-fit: cover;
            border-radius: 12px;
        }
        .news-detail-page h1 {
            font-size: 2.2rem;
            color: #2c3e50;
            margin-bottom: 15px;
        }
        .news-detail-page .news-date {
            display: block;
            color: #7f8c8d;
            font-size: 1rem;
            margin-bottom: 25px;
        }
        .news-detail-page .news-full-content {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #34495e;
        }
        .news-detail-page .news-full-content p {
            margin-bottom: 15px;
        }
        .news-back {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 25px;
            background: #2c5aa0;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .news-back:hover {
            background: #1a3f7a;
            transform: translateX(-5px);
        }
        .news-not-found {
            text-align: center;
            padding: 80px 0;
        }
        .news-not-found h1 {
            font-size: 2.5rem;
            color: #e74c3c;
            margin-bottom: 20px;
        }
        .news-not-found p {
            font-size: 1.2rem;
            color: #7f8c8d;
        }
        @media (max-width: 768px) {
            .news-detail-page {
                margin: 80px auto 40px;
            }
            .news-detail-page h1 {
                font-size: 1.6rem;
            }
            .news-detail-page .news-full-content {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <?php include_once __DIR__ . '/../../components/navbar.php'; ?>
    
    <main>
        <div class="news-detail-page">
            <?php if ($noticia): ?>
                <div class="news-image-container">
                    <img src="<?php echo $noticia['imagen_url'] ?? '/codehciu/assets/img/default-news.jpg'; ?>" alt="<?php echo htmlspecialchars($noticia['titulo']); ?>">
                </div>
                <h1><?php echo htmlspecialchars($noticia['titulo']); ?></h1>
                <span class="news-date">
                    <i class="far fa-calendar"></i> 
                    <?php echo date('l, j \\d\\e F \\d\\e Y', strtotime($noticia['fecha'])); ?>
                </span>
                <div class="news-full-content">
                    <p><?php echo nl2br(htmlspecialchars($noticia['contenido'] ?? $noticia['resumen'] ?? 'Contenido no disponible.')); ?></p>
                </div>
                <a href="/codehciu/#noticias" class="news-back">
                    <i class="fas fa-arrow-left"></i> Volver a Noticias
                </a>
            <?php else: ?>
                <div class="news-not-found">
                    <h1><i class="fas fa-newspaper"></i> Noticia no encontrada</h1>
                    <p>La noticia que buscas no está disponible o ha sido eliminada.</p>
                    <a href="/codehciu/#noticias" class="news-back">
                        <i class="fas fa-arrow-left"></i> Volver a Noticias
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </main>
    
    <?php include_once __DIR__ . '/../../components/footer.php'; ?>
    
    <script src="/codehciu/assets/js/nav.js"></script>
</body>
</html>