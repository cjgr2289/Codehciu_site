<?php
// /donar.php
$current_page = 'donar';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donar - CODEHCIU</title>
    
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon.ico">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/variables.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* ========================================== */
        /* PÁGINA DE DONACIÓN                        */
        /* ========================================== */
        
        .donate-page {
            min-height: 100vh;
            padding: 120px 0 60px;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        .donate-page .container {
            width: 90%;
            max-width: 900px;
            margin: 0 auto;
        }

        /* Header */
        .donate-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .donate-header h1 {
            font-size: 2.8rem;
            color: #2c3e50;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .donate-header h1 span {
            background: linear-gradient(135deg, #e74c3c, #f39c12);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .donate-header p {
            font-size: 1.2rem;
            color: #7f8c8d;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Cards de donación */
        .donate-cards {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        .donate-card {
            background: white;
            border-radius: 20px;
            padding: 35px 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            border: 1px solid rgba(0, 0, 0, 0.04);
            text-align: center;
            transition: all 0.3s ease;
        }

        .donate-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.1);
            border-color: rgba(231, 76, 60, 0.2);
        }

        .donate-card-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: linear-gradient(135deg, #fdf2f2, #fde8e8);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            color: #e74c3c;
        }

        .donate-card h3 {
            font-size: 1.3rem;
            color: #2c3e50;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .donate-card p {
            font-size: 0.95rem;
            color: #7f8c8d;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .donate-card .btn-donate-card {
            display: inline-block;
            padding: 12px 30px;
            background: linear-gradient(135deg, #e74c3c, #c0392b);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(231, 76, 60, 0.2);
        }

        .donate-card .btn-donate-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(231, 76, 60, 0.4);
        }

        /* Información bancaria */
        .donate-bank-info {
            background: white;
            border-radius: 20px;
            padding: 35px 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            border: 1px solid rgba(0, 0, 0, 0.04);
            margin-bottom: 30px;
        }

        .donate-bank-info h2 {
            text-align: center;
            font-size: 1.6rem;
            color: #2c3e50;
            margin-bottom: 25px;
        }

        .donate-bank-info h2 i {
            color: #e74c3c;
        }

        .bank-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .bank-item {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 18px 20px;
            border: 1px solid #e9ecef;
            transition: all 0.3s ease;
        }

        .bank-item:hover {
            background: #fff;
            border-color: #e74c3c;
        }

        .bank-item .bank-label {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #94a3b8;
            font-weight: 600;
        }

        .bank-item .bank-value {
            font-size: 1.1rem;
            font-weight: 700;
            color: #2c3e50;
            margin-top: 4px;
            word-break: break-all;
        }

        /* Botón volver */
        .donate-back {
            text-align: center;
            margin-top: 20px;
        }

        .btn-back-home {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 35px;
            background: #2c3e50;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .btn-back-home:hover {
            background: #1a2a3a;
            transform: translateX(-5px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .donate-page {
                padding: 100px 0 40px;
            }

            .donate-header h1 {
                font-size: 2rem;
            }

            .donate-header p {
                font-size: 1rem;
            }

            .donate-cards {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .donate-card {
                padding: 25px 20px;
            }

            .donate-bank-info {
                padding: 25px 20px;
            }

            .bank-grid {
                grid-template-columns: 1fr;
                gap: 12px;
            }

            .bank-item .bank-value {
                font-size: 0.95rem;
            }
        }

        @media (max-width: 480px) {
            .donate-header h1 {
                font-size: 1.6rem;
            }

            .donate-header p {
                font-size: 0.9rem;
            }

            .donate-card-icon {
                width: 56px;
                height: 56px;
                font-size: 1.5rem;
            }

            .donate-card h3 {
                font-size: 1.1rem;
            }

            .donate-card p {
                font-size: 0.85rem;
            }

            .bank-item .bank-value {
                font-size: 0.85rem;
            }

            .btn-back-home {
                padding: 10px 25px;
                font-size: 0.85rem;
            }
        }
    </style>
</head>
<body>
    <?php include_once __DIR__ . '/components/navbar.php'; ?>

    <main class="donate-page">
        <div class="container">
            <div class="donate-header">
                <h1 data-i18n="donar.header.title"><span data-i18n="donar.header.title.span">Dona </span> y Ayuda a Transformar Vidas</h1>
                <p data-i18n="donar.header.subtitle">Tu contribución nos permite seguir protegiendo a niños, adolescentes y mujeres sobrevivientes de violencia.</p>
            </div>

            <div class="donate-cards">
                <div class="donate-card">
                    <div class="donate-card-icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h3 data-i18n="donar.card.unique.title">Donación Única</h3>
                    <p data-i18n="donar.card.unique.description">Realiza una donación única para apoyar nuestros programas de protección y acompañamiento.</p>
                    <a href="#bank-info" class="btn-donate-card" data-i18n="donar.card.unique.button">Donar Ahora</a>
                </div>

                <div class="donate-card">
                    <div class="donate-card-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3 data-i18n="donar.card.monthly.title">Donación Mensual</h3>
                    <p data-i18n="donar.card.monthly.description">Conviértete en donante recurrente y ayuda a sostener nuestros proyectos a largo plazo.</p>
                    <a href="#bank-info" class="btn-donate-card" data-i18n="donar.card.monthly.button">Hazte Socio</a>
                </div>
            </div>

            <div class="donate-bank-info" id="bank-info">
                <h2><i class="fas fa-university"></i> <span data-i18n="donar.bank.title">Datos Bancarios</span></h2>
                <div class="bank-grid">
                    <div class="bank-item">
                        <div class="bank-label" data-i18n="donar.bank.label.bank">Banco</div>
                        <div class="bank-value" data-i18n="donar.bank.value.bank">Banco Bancamiga</div>
                    </div>
                    <div class="bank-item">
                        <div class="bank-label" data-i18n="donar.bank.label.accountType">Tipo de Cuenta</div>
                        <div class="bank-value" data-i18n="donar.bank.value.accountType">Cuenta Corriente</div>
                    </div>
                    <div class="bank-item">
                        <div class="bank-label" data-i18n="donar.bank.label.accountNumber">Número de Cuenta</div>
                        <div class="bank-value" data-i18n="donar.bank.value.accountNumber">0172-0802-1380-2412-3872</div>
                    </div>
                    <div class="bank-item">
                        <div class="bank-label" data-i18n="donar.bank.label.rif">RIF</div>
                        <div class="bank-value" data-i18n="donar.bank.value.rif">J-407546716</div>
                    </div>
                    <div class="bank-item" style="grid-column: 1 / -1;">
                        <div class="bank-label" data-i18n="donar.bank.label.holder">Titular</div>
                        <div class="bank-value" data-i18n="donar.bank.value.holder">Comisión para los Derechos Humanos y la Ciudadanía</div>
                    </div>
                    <div class="bank-item" style="grid-column: 1 / -1;">
                        <div class="bank-label" data-i18n="donar.bank.label.email">Correo para contacto</div>
                        <div class="bank-value">
                            <a href="mailto:donaciones@codehciu.org" style="color: #2c5aa0; text-decoration: none;" data-i18n="donar.bank.value.email">
                                donaciones@codehciu.org
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="donate-back">
                <a href="./" class="btn-back-home">
                    <i class="fas fa-arrow-left"></i> <span data-i18n="donar.back.button">Volver al Inicio</span>
                </a>
            </div>
        </div>
    </main>

    <?php include_once __DIR__ . '/components/footer.php'; ?>

    <script src="./assets/js/nav.js"></script>
    <script src="./assets/js/lang.js"></script>
    <script src="./assets/js/lang/lang-donar.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (window.CODEHCIU_I18N) {
                window.CODEHCIU_I18N.applyTranslations();
            }
        });
    </script>
</body>
</html>