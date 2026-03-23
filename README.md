# 🎓 MOOC IA - Programación Eficiente con IA: De la Lógica al Código

<p align="center">
  <strong>Código: VS-UEA-MOOC-2026-011</strong><br>
  Transforma tu lógica en soluciones profesionales con inteligencia artificial
</p>

---

## 📋 Descripción del Curso

**Programación Eficiente con IA: De la Lógica al Código** es un MOOC diseñado para capacitar programadores en el uso eficiente de herramientas de inteligencia artificial en el desarrollo de software. El curso combina conceptos teóricos con aplicaciones prácticas, mostrando cómo la IA puede mejorar cada etapa del ciclo de desarrollo.

### 🎯 Objetivo General
Preparar profesionales para escribir código más limpio, eficiente y escalable mediante el uso estratégico de inteligencia artificial, transformando la lógica de negocio en soluciones de calidad.

---

## 🧩 Estructura Modular del Curso

### 🔹 Módulo 1: Configuración del Entorno de Desarrollo con IA
**Propósito formativo:** Comprender la configuración del entorno de desarrollo e integración de herramientas de inteligencia artificial para programar eficientemente.

**Enfoque:** Base técnica del curso → instalación, configuración e integración de IA.

**Temas:**
- Instalación de herramientas de desarrollo
- Integración de asistentes de IA (GitHub Copilot, ChatGPT, etc.)
- Configuración de IDE para máximo rendimiento
- Primeros pasos con autocompletado y sugerencias

---

### 🔹 Módulo 2: Generación de Código Asistida en Tiempo Real
**Propósito formativo:** Comprender la generación de código asistida por inteligencia artificial y su aplicación en tiempo real para mejorar la programación.

**Enfoque:** Producción de código → autocompletado, sugerencias y generación automática.

**Temas:**
- Autocompletado inteligente y predicción de código
- Generación de funciones y clases con IA
- Conversión de pseudocódigo a código ejecutable
- Mejora de productividad y reducción de tiempo de desarrollo

---

### 🔹 Módulo 3: Depuración Inteligente y Optimización
**Propósito formativo:** Comprender la depuración inteligente y optimización de código mediante inteligencia artificial para mejorar la eficiencia del software.

**Enfoque:** Calidad del código → detección de errores y mejora de rendimiento.

**Temas:**
- Identificación de bugs con análisis de IA
- Análisis de complejidad y optimización de algoritmos
- Refactoring asistido por IA
- Mejora de performance y escalabilidad

---

### 🔹 Módulo 4: Documentación y Testing Automatizado
**Propósito formativo:** Comprender la documentación y el testing automatizado utilizando inteligencia artificial para mejorar la calidad y confiabilidad del software.

**Enfoque:** Buenas prácticas → documentación, pruebas y validación del software.

**Temas:**
- Generación automática de documentación
- Creación de casos de prueba con IA
- Testing unit, integración y end-to-end
- Garantía de calidad y confiabilidad del código

---

## 🚀 Inicio Rápido

### Requisitos Previos
- PHP 7.4 o superior
- Composer
- MySQL/MariaDB (opcional, para módulos avanzados)
- Apache/Nginx o servidor local (XAMPP recomendado)

### Instalación

#### 1️⃣ Clonar el repositorio
```bash
git clone https://github.com/gusfersa/VS-UEA-MOOC-2026-011---PROGRAMACION-EFICIENTE-CON-IA-DE-LA-LOGICA-AL-CODIGO.git
cd mooc-ia
```

#### 2️⃣ Instalar dependencias
```bash
composer install
```

#### 3️⃣ Configurar permisos (macOS/Linux)
```bash
chmod -R 777 runtime
chmod -R 777 web/assets
```

#### 4️⃣ Ejecutar en localhost

**Opción A: Con XAMPP (Recomendado)**
1. Inicia Apache y MySQL desde el control panel de XAMPP
2. Accede a: `http://localhost/mooc-ia/web/`

**Opción B: Con servidor PHP integrado**
```bash
cd web
php -S localhost:8080
```
Luego abre: `http://localhost:8080/`

**Opción C: Con servidor PHP desde raíz**
```bash
php -S localhost:8081
```
Luego abre: `http://localhost:8081/web/`

---

## 📁 Estructura del Proyecto

```
mooc-ia/
├── assets/              # Definiciones de assets (CSS, JS)
├── commands/            # Comandos de consola (CLI)
├── config/              # Configuración de aplicación
│   ├── web.php         # Configuración web
│   ├── db.php          # Configuración de base de datos
│   └── params.php      # Parámetros globales
├── controllers/         # Controladores MVC
│   ├── SiteController.php
│   └── Module3Controller.php
├── models/              # Modelos de datos
├── runtime/             # Archivos generados en ejecución
├── tests/               # Pruebas automáticas
├── vendor/              # Dependencias de Composer
├── views/               # Vistas (HTML/PHP)
│   ├── layouts/        # Layouts principales
│   ├── site/           # Vistas del sitio
│   └── module3/        # Vistas del Módulo 3
├── web/                 # Carpeta pública (acceso web)
│   ├── css/            # Hojas de estilo
│   ├── js/             # JavaScript
│   ├── assets/         # Assets generados
│   └── index.php       # Punto de entrada
├── composer.json        # Dependencias del proyecto
└── README.md            # Este archivo
```

---

## 🔌 Tecnologías Utilizadas

| Tecnología | Versión | Propósito |
|------------|---------|----------|
| **Yii Framework** | 2.0 | Framework PHP MVC |
| **PHP** | 8.2+ | Lenguaje servidor |
| **Bootstrap 5** | 5.3+ | UI Framework |
| **Composer** | 2.0+ | Gestor de dependencias |
| **MySQL** | 5.7+ | Base de datos |

---

## 🎓 Contenido de Módulos

### ✅ Módulo 1: Configuración del Entorno
- [📍 Acceder](/web/index.php?r=site/index)

### ✅ Módulo 2: Generación de Código
- [📍 Próxima publicación]

### ✅ Módulo 3: Depuración Inteligente y Optimización
- [📍 Acceder](/web/index.php?r=module3)
- **Ejemplos de enseñanza:** Contiene código con errores intencionales
- **Propósito educativo:** Aprende a identificar bugs y malas prácticas
- **Con agentes de IA:** Muestra cómo la IA ayuda a depurar y optimizar código
- **3 secciones:**
  - Página principal del módulo
  - Ejemplos de código con problemas
  - Soluciones optimizadas con mejores prácticas

### ✅ Módulo 4: Documentación y Testing
- [📍 Próxima publicación]

---

## 👤 Autenticación

Para acceder a áreas protegidas, utiliza las siguientes credenciales de prueba:

```
Usuario: admin
Contraseña: admin

O

Usuario: demo
Contraseña: demo
```

---

## 📞 Soporte y Contacto

- **Email:** contacto@mooc-ia.com
- **Formulario de contacto:** [/web/index.php?r=site/contact]
- **Acerca de:** [/web/index.php?r=site/about]

---

## 📝 Licencia

Este proyecto utiliza la licencia BSD. Consulta el archivo `LICENSE.md` para más detalles.

---

## 🔧 Requisitos del Sistema

**Mínimos recomendados:**
- PHP 7.4 o superior
- 512MB RAM
- 100MB espacio en disco
- Acceso a internet (para descargar dependencias)

**Recomendado para desarrollo:**
- PHP 8.2+
- 2GB RAM
- 500MB espacio en disco
- XAMPP o similar

---

## 🐛 Resolución de Problemas

### ❌ Error: "Class not found"
**Solución:** Ejecutar `composer install` nuevamente

### ❌ Error: "Permission denied"
**Solución (macOS/Linux):**
```bash
chmod -R 777 runtime
chmod -R 777 web/assets
```

### ❌ Error: "Cannot write to runtime"
**Solución:**
```bash
sudo chown -R $(whoami) runtime
sudo chown -R $(whoami) web/assets
```

### ❌ Página en blanco
**Soluciones:**
1. Verificar que Apache/servidor esté ejecutándose
2. Revisar que la URL sea correcta (`http://localhost/mooc-ia/web/`)
3. Revisar logs en `runtime/logs/app.log`

---

## 📚 Recursos Adicionales

- [Documentación Yii Framework](https://www.yiiframework.com/doc/guide/2.0)
- [Documentación PHP](https://www.php.net/manual/es/)
- [Bootstrap Documentation](https://getbootstrap.com/docs/5.3/)
- [Composer Documentation](https://getcomposer.org/doc/)

---

## 📚 Documentación Técnica

Este proyecto incluye documentación técnica completa para desarrolladores y agentes de IA:

### 📖 Documentación Principal

- **[AGENTS.md](./AGENTS.md)** - 🤖 Guía para agentes de IA sobre cómo trabajar con el proyecto
- **[/docs/INDEX.md](./docs/INDEX.md)** - 📍 Índice principal de documentación técnica
- **[/docs/FRAMEWORK.md](./docs/FRAMEWORK.md)** - 🔧 Detalles técnicos de Yii 2.0
- **[/docs/ARCHITECTURE.md](./docs/ARCHITECTURE.md)** - 🏗️ Arquitectura MVC del proyecto
- **[/docs/GIT_VERSION_CONTROL.md](./docs/GIT_VERSION_CONTROL.md)** - 📦 Git y control de versiones
- **[/docs/DOCUMENTATION.md](./docs/DOCUMENTATION.md)** - 📝 Guía de documentación

### 🎯 Lecturas por Perfil

**Para desarrolladores:**
1. ARCHITECTURE.md
2. FRAMEWORK.md
3. GIT_VERSION_CONTROL.md
4. CONTRIBUTING.md (próximamente)

**Para agentes de IA:**
1. AGENTS.md (este archivo)
2. /docs/INDEX.md
3. /docs/FRAMEWORK.md
4. /docs/ARCHITECTURE.md

**Para estudiantes:**
1. README.md (este archivo)
2. /docs/MODULES.md (próximamente)
3. /docs/SETUP_DEVELOPMENT.md (próximamente)

---

Las contribuciones son bienvenidas. Por favor, abre un issue o haz un pull request con tus sugerencias.

---

**Última actualización:** Marzo 2026  
**Versión:** 1.0  
**Estado:** En desarrollo activo
