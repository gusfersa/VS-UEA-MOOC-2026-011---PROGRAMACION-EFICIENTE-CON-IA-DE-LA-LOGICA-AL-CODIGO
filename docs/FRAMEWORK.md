# 🔧 Documentación del Framework Yii 2.0

## Introducción

MOOC IA utiliza **Yii 2.0 Basic**, un framework PHP MVC maduro y bien documentado. Esta documentación detalla cómo Yii está configurado e integrado en el proyecto.

---

## 📋 Información del Framework

| Aspecto | Detalle |
|--------|---------|
| **Framework** | Yii 2.0 |
| **Versión** | 2.0.54 |
| **Tipo** | Framework MVC Full-Stack |
| **PHP requerido** | 7.4+ (optimizado para 8.2+) |
| **Licencia** | BSD-3-Clause |
| **Sitio oficial** | https://www.yiiframework.com |
| **Documentación oficial** | https://www.yiiframework.com/doc/guide/2.0 |

---

## 🏗️ Componentes Principales de Yii

### 1. Aplicación Web (`yii\web\Application`)
- Punto de entrada para todas las solicitudes HTTP
- Ubicación: `web/index.php`
- Configuración: `config/web.php`

### 2. Router de Solicitudes (`yii\web\Request`)
- Procesa solicitudes HTTP
- Mapea URLs a controladores y acciones
- Componente: `request` en `config/web.php`

### 3. Gestor de Respuestas (`yii\web\Response`)
- Envía respuestas HTTP al cliente
- Componente: `response` en `config/web.php`

### 4. Sistema de Eventos (`yii\base\Event`)
- Permite comunicación entre componentes
- Soporta hooks y callbacks
- Ciclo de vida de aplicación y controladores

### 5. Inyección de Dependencias
- Contenedor DI integrado
- Auto-wiring de dependencias
- Configuración en `config/web.php`

---

## 📁 Estructura de Directorios de Yii

```
mooc-ia/
├── assets/              # Definición de bundles de assets
│   └── AppAsset.php    # Bundle principal (CSS, JS)
├── commands/           # Comandos de consola
├── config/             # Archivos de configuración
│   ├── web.php        # Configuración de la aplicación web
│   ├── console.php    # Configuración de comandos CLI
│   ├── db.php         # Configuración de base de datos
│   ├── params.php     # Parámetros globales
│   └── test*.php      # Configuración para tests
├── controllers/        # Controladores MVC
├── models/            # Modelos (lógica de negocio)
├── views/             # Vistas (presentación)
│   ├── layouts/       # Plantillas base
│   └── [controller]/  # Vistas por controlador
├── web/               # Raíz pública web
│   ├── index.php      # Punto de entrada
│   ├── css/           # Estilos
│   ├── js/            # JavaScript
│   └── assets/        # Assets compilados (generados)
├── runtime/           # Archivos generados en ejecución
│   ├── logs/          # Archivos de logs
│   └── temp/          # Archivos temporales
└── vendor/            # Dependencias via Composer
```

---

## ⚙️ Configuración Principal

### Archivo: `config/web.php`

```php
// ID único de la aplicación
'id' => 'mooc-ia',

// Nombre mostrable
'name' => 'MOOC IA',

// Rutas base
'basePath' => dirname(__DIR__),

// Bootstrap de la aplicación (módulos que cargan primero)
'bootstrap' => ['log'],

// Componentes principales
'components' => [
    'request'      => [...],  // Procesa solicitudes
    'response'     => [...],  // Prepara respuestas
    'cache'        => [...],  // Cacheo de datos
    'user'         => [...],  // Gestión de usuarios
    'errorHandler' => [...],  // Manejo de errores
    'mailer'       => [...],  // Envío de emails
    'log'          => [...],  // Sistema de logging
    'db'           => [...],  // Conexión a BD
    'urlManager'   => [...],  // Gestión de URLs
]
```

### Archivo: `config/db.php`

Define la conexión a la base de datos:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=mooc_ia',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8mb4',
];
```

---

## 🔄 Ciclo de Vida de una Solicitud

### 1. **Punto de Entrada** (`web/index.php`)
```php
// Define constantes de entorno
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

// Incluye autoloader
require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

// Crea y corre la aplicación
$app = new yii\web\Application($config);
$app->run();
```

### 2. **Inicialización de Aplicación**
- Cargar configuración (`config/web.php`)
- Inicializar componentes
- Ejecutar bootstrap

### 3. **Enrutamiento de Solicitud**
- Analizar URL: `http://localhost/mooc-ia/web/index.php?r=module3/buggy-code`
- Ruta: `module3/buggy-code` → Controlador: `Module3Controller`, Acción: `actionBuggyCode`

### 4. **Ejecución del Controlador**
- Crear instancia del controlador
- Ejecutar filtros (behaviors)
- Llamar acción: `actionBuggyCode()`

### 5. **Renderizado de Vista**
- Controlador llama `$this->render('buggy-code', $data)`
- Yii busca: `views/module3/buggy-code.php`
- Renderiza con layout: `views/layouts/main.php`

### 6. **Envío de Respuesta**
- Aplicación envía response
- Navegador recibe HTML, CSS, JS
- Renderiza la página

---

## 🎭 Patrones de Diseño en Yii

### 1. Patrón MVC
- **Model:** Lógica de negocio y acceso a datos
- **View:** Presentación (HTML/PHP)
- **Controller:** Orquestación entre Model y View

### 2. Patrón Active Record
```php
// Modelos heredan de yii\db\ActiveRecord
class User extends ActiveRecord
{
    // Acceso simple a BD
    $user = User::findOne(1);
    $user->name = 'Nuevo nombre';
    $user->save();
}
```

### 3. Inyección de Dependencias
```php
// Componentes se resuelven automáticamente
class SiteController extends Controller
{
    public function actionIndex(SomeService $service)
    {
        // $service se inyecta automáticamente
    }
}
```

### 4. Event-Driven Architecture
```php
// Escuchar eventos del ciclo de vida
Event::on(Controller::class, Controller::EVENT_BEFORE_ACTION, function($event) {
    // Ejecutar lógica antes de cualquier acción
});
```

---

## 🔌 Dependencias Principales (Composer)

```json
{
    "yiisoft/yii2": "2.0.54",
    "yiisoft/yii2-bootstrap5": "2.0.51",
    "yiisoft/yii2-debug": "2.1.27",
    "yiisoft/yii2-gii": "2.2.7",
    "yiisoft/yii2-faker": "2.0.5",
    "twbs/bootstrap": "5.3.8"
}
```

### Componentes clave:
- **yii2-bootstrap5:** Integración con Bootstrap 5 para UI
- **yii2-debug:** Panel de debugging en desarrollo
- **yii2-gii:** Generador de código automático

---

## 🚀 Características Principales de Yii

### ✅ Rendimiento
- Caching de consultas
- Query optimization
- Asset bundling y minificación

### ✅ Seguridad
- CSRF protection automático
- SQL injection prevention (parameterized queries)
- XSS prevention
- Validación integrada

### ✅ Flexibilidad
- Componentes plug-and-play
- Comportamientos (behaviors)
- Mixins para extender funcionalidad

### ✅ Escalabilidad
- Soporte para RESTful APIs
- Módulos para organizar código
- Extensiones de terceros

---

## 📊 Flujo de Datos en Yii

```
Solicitud HTTP
    ↓
web/index.php (punto de entrada)
    ↓
yii\web\Application::run()
    ↓
Enrutador analiza URL
    ↓
Controlador + Acción identificados
    ↓
Controlador::beforeAction() (filtros)
    ↓
Controlador::actionXxx() (lógica)
    ↓
Modelo (si es necesario) - acceso a BD
    ↓
Controlador::render('view', $data)
    ↓
Vista renderizada
    ↓
Layout + Vista combinados
    ↓
Response enviada al navegador
    ↓
Navegador renderiza HTML
```

---

## 🔧 Configuración Personalizada para MOOC IA

### En `config/web.php`:

```php
'components' => [
    'request' => [
        'cookieValidationKey' => 'aFDWTcmncEgOH4zJqv7Nq41qwDnpwiCn',
    ],
    'cache' => [
        'class' => 'yii\caching\FileCache',
    ],
    'db' => require('db.php'),
    'urlManager' => [
        // Habilitado para URLs limpias
        // 'enablePrettyUrl' => true,
        // 'showScriptName' => false,
    ],
],
```

---

## 📚 Recursos Adicionales

- [Guía oficial de Yii 2.0](https://www.yiiframework.com/doc/guide/2.0)
- [Referencia de API de Yii](https://www.yiiframework.com/doc/api/2.0)
- [Forum de Yii](https://www.yiiframework.com/forum/)
- [Extensiones de Yii](https://www.yiiframework.com/extensions/)

---

**Relacionado:** [ARCHITECTURE.md](./ARCHITECTURE.md) | [GIT_VERSION_CONTROL.md](./GIT_VERSION_CONTROL.md) | [INDEX.md](./INDEX.md)

