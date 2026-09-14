// ==========================================
// SISTEMA DE INTERNACIONALIZACIÓN (i18n)
// Núcleo central - Gestiona el idioma global
// ==========================================

(function() {
    'use strict';

    // ==========================================
    // CONFIGURACIÓN
    // ==========================================
    const DEFAULT_LANG = 'ES';
    const STORAGE_KEY = 'codehciu_lang';
    const SUPPORTED_LANGS = ['ES', 'EN'];

    // ==========================================
    // ESTADO GLOBAL
    // ==========================================
    window.CODEHCIU_I18N = {
        currentLang: DEFAULT_LANG,
        translations: {}, // Se llenará con las traducciones de cada sección
        listeners: [], // Callbacks para notificar cambios

        // Registrar traducciones de una sección
        register: function(sectionKey, translations) {
            this.translations[sectionKey] = translations;
            console.log(`📚 Traducciones registradas: ${sectionKey}`);
        },

        // Obtener traducción por clave
        t: function(key) {
            const lang = this.currentLang;
            const keys = key.split('.');
            
            // Buscar en todas las secciones registradas
            for (const section in this.translations) {
                const sectionTranslations = this.translations[section];
                if (sectionTranslations[lang] && sectionTranslations[lang][key]) {
                    return sectionTranslations[lang][key];
                }
            }
            
            // Si no se encuentra, devolver la clave como fallback
            console.warn(`⚠️ Traducción no encontrada: ${key} (${lang})`);
            return key;
        },

        // Cambiar idioma
        setLang: function(lang) {
            if (!SUPPORTED_LANGS.includes(lang)) {
                console.warn(`⚠️ Idioma no soportado: ${lang}`);
                return;
            }

            if (this.currentLang === lang) return;

            this.currentLang = lang;
            localStorage.setItem(STORAGE_KEY, lang);
            document.documentElement.lang = lang.toLowerCase();
            
            // Actualizar todos los elementos con data-i18n
            this.applyTranslations();
            
            // Notificar a los listeners
            this.listeners.forEach(callback => callback(lang));
            
            console.log(`🌐 Idioma cambiado a: ${lang}`);
        },

        // Aplicar traducciones a todos los elementos
        applyTranslations: function () {
            const elements = document.querySelectorAll('[data-i18n]');

            elements.forEach(element => {
                const key = element.getAttribute('data-i18n');
                const translation = this.t(key);

                // Verificar si el elemento tiene un atributo específico
                const attr = element.getAttribute('data-i18n-attr');

                if (attr) {
                    element.setAttribute(attr, translation);
                } else {
                    // Si el elemento NO tiene hijos, usar textContent
                    if (element.children.length === 0) {
                        element.textContent = translation;
                    } else {
                        // Si tiene hijos, buscar si el texto está en un nodo de texto directo
                        // y solo reemplazar ese nodo, no todos los hijos
                        let textNodeReplaced = false;
                        for (let i = 0; i < element.childNodes.length; i++) {
                            const node = element.childNodes[i];
                            if (node.nodeType === Node.TEXT_NODE && node.textContent.trim() !== '') {
                                node.textContent = translation;
                                textNodeReplaced = true;
                                break;
                            }
                        }

                        // Si no se encontró un nodo de texto, usar innerHTML como fallback
                        if (!textNodeReplaced) {
                            element.innerHTML = translation;
                        }
                    }
                }
            });

            console.log(`✅ Traducciones aplicadas (${elements.length} elementos)`);
        },

        // Suscribirse a cambios de idioma
        onChange: function(callback) {
            this.listeners.push(callback);
        },

        // Obtener idioma actual
        getLang: function() {
            return this.currentLang;
        },

        // Inicializar el sistema
        init: function() {
            // Recuperar idioma guardado o usar el por defecto
            const savedLang = localStorage.getItem(STORAGE_KEY);
            if (savedLang && SUPPORTED_LANGS.includes(savedLang)) {
                this.currentLang = savedLang;
            }

            document.documentElement.lang = this.currentLang.toLowerCase();
            console.log(`🌐 Sistema i18n inicializado en: ${this.currentLang}`);
        }
    };

    // Inicializar inmediatamente
    window.CODEHCIU_I18N.init();

})();