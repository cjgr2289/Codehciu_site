// ==========================================
// TRADUCCIONES - NAVBAR
// ==========================================

(function() {
    'use strict';

    if (!window.CODEHCIU_I18N) {
        console.error('❌ lang.js debe cargarse antes que lang-nav.js');
        return;
    }

    window.CODEHCIU_I18N.register('nav', {
        ES: {
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
            nav_lang_label: 'ES'
        },
        EN: {
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
            nav_lang_label: 'EN'
        }
    });

})();