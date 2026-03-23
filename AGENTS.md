# 🤖 AGENTS.md - Guía para Agentes de IA

## Introducción

Este archivo proporciona a agentes de IA (como GitHub Copilot, ChatGPT, o sistemas de análisis de código) instrucciones claras sobre cómo entender, trabajar con y mejorar el proyecto **MOOC IA: Programación Eficiente con IA: De la Lógica al Código**.

---

## 📚 Lectura Recomendada para Agentes de IA

### Orden de lectura para máxima comprensión:

1. **Este archivo** (`AGENTS.md`) - Contexto general
2. **[/docs/INDEX.md](./docs/INDEX.md)** - Índice y estructura de documentación
3. **[/docs/FRAMEWORK.md](./docs/FRAMEWORK.md)** - Entender Yii 2.0
4. **[/docs/ARCHITECTURE.md](./docs/ARCHITECTURE.md)** - Entender estructura MVC
5. **[/docs/GIT_VERSION_CONTROL.md](./docs/GIT_VERSION_CONTROL.md)** - Entender historial y versioning
6. **README.md** - Visión general del proyecto
7. **[/docs/DOCUMENTATION.md](./docs/DOCUMENTATION.md)** - Cómo mantener docs

---

## 🎓 Información del Proyecto

### Identidad del Proyecto

```
Nombre: MOOC IA
Código: VS-UEA-MOOC-2026-011
Título completo: Programación Eficiente con IA: De la Lógica al Código
```

### Propósito

Capacitar a programadores en el uso eficiente de herramientas de inteligencia artificial en el desarrollo de software, desde configuración del entorno hasta documentación y testing automatizado.

### Tecnología Stack

| Componente | Tecnología | Versión |
|-----------|-----------|---------|
| Framework | Yii 2.0 | 2.0.54 |
| Lenguaje | PHP | 8.2+ |
| UI Framework | Bootstrap | 5.3.8 |
| Package Manager | Composer | 2.0+ |
| Database | MySQL | 5.7+ |
| VCS | Git | Latest |
| Platform | GitHub | - |

### Localización en Servidor

```
Raíz del proyecto: /Applications/XAMPP/xamppfiles/htdocs/mooc-ia/
Acceso web: http://localhost/mooc-ia/web/
Punto de entrada: web/index.php
```

---

## 🏗️ Estructura del Proyecto

### Directorios Clave

```
mooc-ia/
├── docs/                    # 📚 Documentación técnica completa
│   ├── INDEX.md            # Índice principal de docs
│   ├── FRAMEWORK.md        # Detalles de Yii 2.0
│   ├── ARCHITECTURE.md     # Estructura MVC
│   ├── GIT_VERSION_CONTROL.md  # Git y versioning
│   ├── DOCUMENTATION.md    # Cómo documentar
│   ├── SETUP_DEVELOPMENT.md
│   ├── MODULES.md
│   ├── CONTRIBUTING.md
│   └── GLOSSARY.md
│
├── controllers/            # 🎮 Controladores MVC
│   ├── SiteController.php
│   └── Module3Controller.php
│
├── models/                 # 📊 Modelos
│   ├── User.php
│   ├── LoginForm.php
│   └── ContactForm.php
│
├── views/                  # 🎨 Vistas
│   ├── layouts/
│   │   └── main.php
│   ├── site/
│   │   ├── index.php
│   │   ├── about.php
│   │   ├── contact.php
│   │   └── login.php
│   └── module3/
│       ├── index.php
│       ├── buggy-code.php
│       └── optimized-code.php
│
├── web/                    # 🌐 Carpeta pública
│   ├── index.php          # Punto de entrada
│   ├── css/
│   │   └── site.css
│   └── assets/
│
├── config/                 # ⚙️ Configuración
│   ├── web.php
│   ├── db.php
│   └── params.php
│
├── AGENTS.md              # 🤖 Este archivo
├── README.md              # 📖 Readme principal
└── docs/                  # 📚 Carpeta de documentación técnica
```

---

## 🎯 Tareas Comunes para Agentes de IA

### 1. Entender el Código Existente

**Pasos:**
1. Leer `/docs/ARCHITECTURE.md` para entender MVC
2. Revisar `controllers/` para ver cómo se estructura el flujo
3. Revisar `models/` para ver lógica de negocio
4. Revisar `views/` para ver presentación

**Archivos clave a analizar:**
- `controllers/SiteController.php` - Controlador principal
- `controllers/Module3Controller.php` - Controlador del módulo
- `views/layouts/main.php` - Layout base
- `web/css/site.css` - Estilos principales
- `config/web.php` - Configuración de aplicación

---

### 2. Crear Nueva Funcionalidad

**Flujo recomendado:**

```
1. Leer /docs/ARCHITECTURE.md
2. Identificar si es: Controlador, Modelo o Vista
3. Crear en la carpeta correspondiente
4. Seguir convenciones de nombres
5. Usar namespace correcto (app\controllers, app\models, etc.)
6. Hacer commit con tipo: feat: <descripción>
```

**Ejemplo - Agregar nueva acción:**

```php
// En controllers/SiteController.php
public function actionNewPage()
{
    $data = ['key' => 'value'];
    return $this->render('new-page', $data);
}

// Crear archivo: views/site/new-page.php
<?php
$this->title = 'Nueva Página';
?>
<h1><?= $this->title ?></h1>
<!-- contenido -->
```

---

### 3. Corregir Bugs

**Proceso:**

```
1. Revisar /docs/GIT_VERSION_CONTROL.md (convención de commits)
2. Entender el bug leyendo código relevante
3. Hacer fix
4. Testar localmente
5. Commit con tipo: fix: <descripción>
6. Actualizar documentación si es necesario
```

---

### 4. Documentar Cambios

**Qué documentar:**

- Cambios en estructura MVC → actualizar `/docs/ARCHITECTURE.md`
- Cambios en framework → actualizar `/docs/FRAMEWORK.md`
- Nuevas dependencias → actualizar `README.md`
- Nuevos términos → actualizar `/docs/GLOSSARY.md`

**Seguir:** `/docs/DOCUMENTATION.md` para estándares

---

### 5. Revisar Código

**Checklist para agentes revisando código:**

- ✅ ¿Sigue arquitectura MVC?
- ✅ ¿Usa namespaces correctos?
- ✅ ¿Está comentado o es autodocumentado?
- ✅ ¿Hay malas prácticas de seguridad?
- ✅ ¿Necesita tests?
- ✅ ¿Necesita documentación?

---

## 🔄 Flujo de Trabajo con Git

### Para Agentes que Harán Commits

```
1. Cambios realizados
2. Ver estado: git status
3. Ver cambios: git diff
4. Agregar: git add <archivos>
5. Commit: git commit -m "tipo: descripción"
6. Push: git push origin main
```

**Convención de commits:** Ver `/docs/GIT_VERSION_CONTROL.md`

---

## 🎓 Módulos del Curso

### Módulo 1: Configuración del Entorno
- **Ubicación:** `views/site/` (parte de landing)
- **Controlador:** `SiteController::actionIndex`
- **Estado:** ✅ Completo

### Módulo 2: Generación de Código
- **Ubicación:** `/web/index.php?r=site/about`
- **Controlador:** `SiteController::actionAbout`
- **Estado:** ⏳ Por completar

### Módulo 3: Depuración Inteligente y Optimización
- **Ubicación:** `views/module3/`
- **Controlador:** `Module3Controller`
- **Rutas disponibles:**
  - `/web/index.php?r=module3` - Portada
  - `/web/index.php?r=module3/buggy-code` - Código con problemas
  - `/web/index.php?r=module3/optimized-code` - Soluciones
- **Estado:** ✅ Funcional con ejemplos educativos
- **Nota:** Contiene código con errores intencionales para enseñanza

### Módulo 4: Documentación y Testing
- **Ubicación:** TBD
- **Controlador:** TBD
- **Estado:** ⏳ Por completar

---

## 🔐 Convenciones de Código

### Namespaces

```php
// Controladores
namespace app\controllers;

// Modelos
namespace app\models;

// Uso en views
<?php
use yii\helpers\Html;
use yii\helpers\Url;
```

### Nombres de Archivos

```
Controladores: [Nombre]Controller.php
  - Ejemplo: SiteController.php, Module3Controller.php

Modelos: [NombreModelo].php
  - Ejemplo: User.php, LoginForm.php

Vistas: [nombreAccion].php (minúscula con guiones)
  - Ejemplo: index.php, buggy-code.php, login.php
```

### Clases y Métodos

```php
// Clases: PascalCase
class UserController extends Controller { }

// Métodos: camelCase con prefijo action para acciones
public function actionIndex() { }
public function actionBuggyCode() { }

// Propiedades: camelCase
public $layout = 'main';
private $userId;
```

---

## 📋 Información de Seguridad

### No Incluir en Código

❌ Passwords  
❌ API Keys  
❌ Credenciales de BD  
❌ Información personal sensible  

### Usar en su lugar

✅ Variables de entorno (`.env`)  
✅ Configuración en `config/`  
✅ Parámetros en `config/params.php`

---

## 🚀 Comandos Útiles

### Desarrollo Local

```bash
# Ver estado del proyecto
git status

# Ver cambios recientes
git log --oneline -10

# Iniciar servidor local
cd /Applications/XAMPP/xamppfiles/htdocs/mooc-ia
php -S localhost:8081

# Acceder desde navegador
# http://localhost/mooc-ia/web/
```

### Verificar Errores

```bash
# Validar sintaxis PHP
php -l controllers/SiteController.php

# Ver logs
tail -f runtime/logs/app.log
```

---

## 📞 Solución de Problemas

### Error: Class not found

**Causa:** Autoloader no actualizado  
**Solución:** `composer install` o `composer dump-autoload`

### Error: Permission denied

**Causa:** Permisos de carpetas  
**Solución:** `chmod -R 777 runtime web/assets`

### Página en blanco

**Solución:** Revisar `runtime/logs/app.log`

---

## 🤝 Cómo Contribuir como Agente

1. **Leer documentación** (`/docs/`)
2. **Entender estructura** (MVC, rutas, flujo)
3. **Hacer cambios** con convención
4. **Documentar cambios** (actualizar docs)
5. **Hacer commits claros** (ver convención de commits)
6. **Actualizar referencias** (README, INDEX.md)

---

## 📚 Enlaces Útiles

- **Landing Page:** `http://localhost/mooc-ia/web/index.php?r=site/index`
- **Módulo 3:** `http://localhost/mooc-ia/web/index.php?r=module3`
- **Login:** `http://localhost/mooc-ia/web/index.php?r=site/login`
- **Contacto:** `http://localhost/mooc-ia/web/index.php?r=site/contact`

---

## 🎯 Instrucciones Finales para Agentes

### Al Trabajar en Este Proyecto:

1. ✅ **Leer primero** `/docs/` para entender arquitectura
2. ✅ **Respetar convenciones** de nombres y commits
3. ✅ **Actualizar documentación** cuando cambies código
4. ✅ **Hacer commits pequeños** y descriptivos
5. ✅ **Testar localmente** antes de push
6. ✅ **Mantener legibilidad** del código
7. ✅ **Usar mejores prácticas** de seguridad
8. ✅ **Documentar** cambios complejos en código

---

## 📝 Última Actualización

- **Fecha:** Marzo 22, 2026
- **Versión:** 1.0
- **Estado:** Listo para agentes de IA

---

**Relacionado:** [README.md](./README.md) | [/docs/INDEX.md](./docs/INDEX.md) | [/docs/ARCHITECTURE.md](./docs/ARCHITECTURE.md)

