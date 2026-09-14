// ==========================================
// TRADUCCIONES - MODAL DONACIÓN
// ==========================================

(function () {
    'use strict';

    if (!window.CODEHCIU_I18N) {
        console.error('❌ lang.js debe cargarse antes que lang-donacion-modal.js');
        return;
    }

    window.CODEHCIU_I18N.register('donacion-modal', {
        ES: {
            donation_title: '¡TU APOYO',
            donation_title_span: 'TRANSFORMA VIDAS EN COMUNIDADES VULNERABLES!',
            donation_description: 'Detrás de cada acompañamiento psicosocial, asistencia legal y espacio seguro para niñas, niños, adolescentes y mujeres sobrevivientes de violencia, hay personas comprometidas como tú.',
            donation_impact: 'HAZ LA DIFERENCIA HOY',
            donation_note: 'Cada aporte fortalece la defensa de la dignidad humana.',
            donate_btn: 'Quiero Donar'
        },
        EN: {
            donation_title: 'YOUR SUPPORT',
            donation_title_span: 'TRANSFORMS LIVES IN VULNERABLE COMMUNITIES!',
            donation_description: 'Behind every psychosocial support, legal assistance, and safe space for children, adolescents, and women survivors of violence, there are committed people like you.',
            donation_impact: 'MAKE A DIFFERENCE TODAY',
            donation_note: 'Every contribution strengthens the defense of human dignity.',
            donate_btn: 'I want to donate'
        }
    });

})();