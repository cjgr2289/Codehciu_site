// ==========================================
// TRADUCCIONES - PÁGINA DE DONACIÓN (donar.php)
// ==========================================
(function() {
    'use strict';

    const translations = {
        ES: {
            // Header
            'donar.header.title': 'y Ayuda a Transformar Vidas',
            'donar.header.title.span': ' 💛 Dona ',
            'donar.header.subtitle': 'Tu contribución nos permite seguir protegiendo a niños, adolescentes y mujeres sobrevivientes de violencia.',

            // Tarjetas de donación
            'donar.card.unique.title': 'Donación Única',
            'donar.card.unique.description': 'Realiza una donación única para apoyar nuestros programas de protección y acompañamiento.',
            'donar.card.unique.button': 'Donar Ahora',

            'donar.card.monthly.title': 'Donación Mensual',
            'donar.card.monthly.description': 'Conviértete en donante recurrente y ayuda a sostener nuestros proyectos a largo plazo.',
            'donar.card.monthly.button': 'Hazte Socio',

            // Información bancaria
            'donar.bank.title': 'Datos Bancarios',
            'donar.bank.label.bank': 'Banco',
            'donar.bank.value.bank': 'Banco Bancamiga',
            'donar.bank.label.accountType': 'Tipo de Cuenta',
            'donar.bank.value.accountType': 'Cuenta Corriente',
            'donar.bank.label.accountNumber': 'Número de Cuenta',
            'donar.bank.value.accountNumber': '0172-0802-1380-2412-3872',
            'donar.bank.label.rif': 'RIF',
            'donar.bank.value.rif': 'J-407546716',
            'donar.bank.label.holder': 'Titular',
            'donar.bank.value.holder': 'Comisión para los Derechos Humanos y la Ciudadanía',
            'donar.bank.label.email': 'Correo para contacto',
            'donar.bank.value.email': 'donaciones@codehciu.org',

            // Botón volver
            'donar.back.button': 'Volver al Inicio', 

            // ==========================================
            // NAV
            // ==========================================
            // Logo y título
            nav_desc: 'Ayudamos y transformamos vidas',
            nav_org_name: 'COMISIÓN PARA LOS DERECHOS HUMANOS Y LA CIUDADANÍA',

            // Menú
            nav_about: 'Quiénes Somos',
            nav_kids: 'Niñez y Adolescencia',
            nav_women: 'Mujeres',
            nav_informes: 'Informes',
            nav_pinceladas: 'Pinceladas de Vida',
            nav_podcast: 'Podcast',
            nav_news: 'Noticias',
            nav_contact: 'Contacto',
            nav_donate: 'Donar',
            nav_lang_label: 'ES',

            // ==========================================
            // FOOTER
            // ==========================================
            footer_nav_title: 'Navegación',
            footer_about: 'Quiénes Somos',
            footer_kids: 'Niños y Adolescentes',
            footer_women: 'Mujeres',
            footer_informes: 'Informes',
            footer_pinceladas: 'Pinceladas de Vida',
            footer_podcast: 'Podcast',
            footer_news: 'Noticias',
            footer_mision: 'Protegemos y promovemos los derechos humanos con enfoque en grupos vulnerables, especialmente niños, adolescentes y mujeres sobrevivientes de violencia.',
            footer_slogan: '"Ayudamos y transformamos vidas"',
            footer_follow: 'Síguenos',
            footer_contact: 'Contáctanos',
            footer_address: 'Puerto Ordaz, Bolívar Venezuela',
            footer_copyright: 'Comisión para los Derechos Humanos y la Ciudadanía. Todos los derechos reservados.',
            footer_privacy: 'Política de Privacidad',
            footer_terms: 'Términos y Condiciones'

        },
        EN: {
            // Header
            'donar.header.title': 'and Help Transform Lives',
            'donar.header.title.span': ' 💛 Donate ',
            'donar.header.subtitle': 'Your contribution allows us to continue protecting children, adolescents, and women survivors of violence.',

            // Donation cards
            'donar.card.unique.title': 'One-Time Donation',
            'donar.card.unique.description': 'Make a one-time donation to support our protection and accompaniment programs.',
            'donar.card.unique.button': 'Donate Now',

            'donar.card.monthly.title': 'Monthly Donation',
            'donar.card.monthly.description': 'Become a recurring donor and help sustain our long-term projects.',
            'donar.card.monthly.button': 'Become a Partner',

            // Bank information
            'donar.bank.title': 'Bank Details',
            'donar.bank.label.bank': 'Bank',
            'donar.bank.value.bank': 'Banco Bancamiga',
            'donar.bank.label.accountType': 'Account Type',
            'donar.bank.value.accountType': 'Checking Account',
            'donar.bank.label.accountNumber': 'Account Number',
            'donar.bank.value.accountNumber': '0172-0802-1380-2412-3872',
            'donar.bank.label.rif': 'Tax ID (RIF)',
            'donar.bank.value.rif': 'J-407546716',
            'donar.bank.label.holder': 'Account Holder',
            'donar.bank.value.holder': 'Commission for Human Rights and Citizenship',
            'donar.bank.label.email': 'Contact Email',
            'donar.bank.value.email': 'donaciones@codehciu.org',

            // Back button
            'donar.back.button': 'Back to Home', 

            // ==========================================
            // NAV
            // ==========================================

            // Logo y título
            nav_desc: 'We help and transform lives',
            nav_org_name: 'COMMISSION FOR HUMAN RIGHTS AND CITIZENSHIP',

            // Menú
            nav_about: 'About Us',
            nav_kids: 'Children and Adolescents',
            nav_women: 'Women',
            nav_informes: 'Reports',
            nav_pinceladas: 'Brushstrokes of Life',
            nav_podcast: 'Podcast',
            nav_news: 'News',
            nav_contact: 'Contact',
            nav_donate: 'Donate',
            nav_lang_label: 'EN',

            // ==========================================
            // FOOTER
            // ==========================================
            footer_nav_title: 'Navigation',
            footer_about: 'About Us',
            footer_kids: 'Children and Adolescents',
            footer_women: 'Women',
            footer_informes: 'Reports',
            footer_pinceladas: 'Brushstrokes of Life',
            footer_podcast: 'Podcast',
            footer_news: 'News',
            footer_mision: 'We protect and promote human rights with a focus on vulnerable groups, especially children, adolescents, and women survivors of violence.',
            footer_slogan: '"We help and transform lives"',
            footer_follow: 'Follow us',
            footer_contact: 'Contact us',
            footer_address: 'Puerto Ordaz, Bolívar Venezuela',
            footer_copyright: 'Commission for Human Rights and Citizenship. All rights reserved.',
            footer_privacy: 'Privacy Policy',
            footer_terms: 'Terms and Conditions'
        }
    };

    // Registrar las traducciones en el sistema global
    if (window.CODEHCIU_I18N) {
        window.CODEHCIU_I18N.register('donar', translations);
    } else {
        console.warn('⚠️ CODEHCIU_I18N no está definido. Asegúrate de cargar lang.js primero.');
    }
})();