// ==========================================
// TRADUCCIONES - QUIÉNES SOMOS
// ==========================================

(function () {
    'use strict';

    if (!window.CODEHCIU_I18N) {
        console.error('❌ lang.js debe cargarse antes que lang-quienes-somos.js');
        return;
    }

    window.CODEHCIU_I18N.register('quienes-somos', {
        ES: {
            about_title_part1: 'Quiénes',
            about_title_part2: ' somos',
            about_text1: 'Somos una organización liderada por mujeres.',
            about_text2: 'Defendemos la dignidad. Protegemos los derechos. ',
            about_text3: 'Transformamos realidades.',
            about_principles: 'Promovemos la protección de la infancia,',
            about_principles1: 'la erradicación de la violencia de género',
            about_principles2: 'y la respuesta humanitaria integral',
            about_principles3: 'donde más se necesita.',

            // Cards
            card_mision_title: 'Nuestra misión',
            card_mision_desc: 'Construir resiliencia sistémica en las comunidades, transformando las estructuras de vulnerabilidad en fortalezas permanentes.',
            card_vision_title: 'Nuestra visión',
            card_vision_desc: 'Un mundo sin violencia, donde las comunidades posean el poder, los sistemas y la unidad para garantizar su propia dignidad, seguridad, bienestar y para promover sus derechos.',
            card_valores_title: 'Nuestros valores',
            card_valores_desc: 'Humanidad, imparcialidad, independencia, neutralidad, confidencialidad y el principio de no hacer daño guían todas nuestras acciones.',
            card_ver_mas: 'ver más >',

            // Valores (NUEVAS CLAVES)
            valor_1: 'Respeto por la dignidad de la persona.',
            valor_2: 'Compromiso con la justicia social.',
            valor_3: 'Integridad.',
            valor_4: 'Trabajo colaborativo.',
            valor_5: 'Transparencia.',
            valor_6: 'Excelencia en la gestión.'
        },
        EN: {
            about_title_part1: 'About',
            about_title_part2: ' Us',
            about_text: 'We are a women-led organization.<br> We defend dignity. We protect rights. <br>We transform realities.',
            about_principles: 'We promote child protection, the eradication of gender-based violence, and comprehensive humanitarian response where it is most needed.',

            // Cards
            card_mision_title: 'Our Mission',
            card_mision_desc: 'Build systemic resilience in communities, transforming structures of vulnerability into permanent strengths.',
            card_vision_title: 'Our Vision',
            card_vision_desc: 'A world without violence, where communities possess the power, systems, and unity to guarantee their own dignity, safety, well-being, and to promote their rights.',
            card_valores_title: 'Our Values',
            card_valores_desc: 'Humanity, impartiality, independence, neutrality, confidentiality, and the principle of do no harm guide all our actions.',
            card_ver_mas: 'see more >',

            // Valores (NUEVAS CLAVES)
            valor_1: 'Respect for the dignity of the person.',
            valor_2: 'Commitment to social justice.',
            valor_3: 'Integrity.',
            valor_4: 'Collaborative work.',
            valor_5: 'Transparency.',
            valor_6: 'Excellence in management.'
        }
    });

})();