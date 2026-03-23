# 🏗️ Arquitectura MVC del Proyecto

## Introducción

MOOC IA sigue el patrón **MVC (Model-View-Controller)** proporcionado por Yii 2.0. Esta documentación detalla cómo se organiza el código en capas y cómo interactúan entre sí.

---

## 📐 Estructura MVC General

```
Usuario (Cliente)
    ↓
Solicitud HTTP
    ↓
[CONTROLADOR] ← Recibe solicitud, coordina lógica
    ↓
[MODELO] ← Accede a datos, lógica de negocio
    ↓
[VISTA] ← Presenta datos en HTML
    ↓
Respuesta HTTP
    ↓
Navegador (Renderiza)
```

---

## 🎮 CONTROLADORES

### Localización
```
controllers/
├── SiteController.php        # Controlador principal del sitio
└── Module3Controller.php     # Controlador del Módulo 3
```

### Estructura Base

```php
namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    // Propiedades
    public $layout = 'main';  // Layout por defecto
    
    // Acciones
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionAbout()
    {
        return $this->render('about');
    }
}
```

### Componentes de un Controlador

| Elemento | Propósito | Ejemplo |
|----------|----------|---------|
| **Namespace** | Ubicación en PSR-4 | `app\controllers` |
| **Extends** | Hereda de Controller | `extends Controller` |
| **Properties** | Configuración | `public $layout = 'main'` |
| **Actions** | Métodos `actionXxx()` | `public function actionIndex()` |
| **Filters** | Control de acceso | `behaviors()` |

### Acciones en MOOC IA

#### SiteController

```php
// Inicio/Home - Muestra landing page del curso
public function actionIndex()
{
    return $this->render('index');
}

// Acerca de - Información del proyecto
public function actionAbout()
{
    return $this->render('about');
}

// Contacto - Formulario de contacto
public function actionContact()
{
    $model = new ContactForm();
    if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        // Procesar formulario
    }
    return $this->render('contact', ['model' => $model]);
}

// Login - Autenticación de usuarios
public function actionLogin()
{
    $model = new LoginForm();
    if ($model->load(Yii::$app->request->post()) && $model->login()) {
        return $this->goBack();
    }
    return $this->render('login', ['model' => $model]);
}
```

#### Module3Controller

```php
// Módulo 3 - Página principal
public function actionIndex()
{
    return $this->render('index');
}

// Código con problemas - Ejemplos de depuración
public function actionBuggyCode()
{
    return $this->render('buggy-code');
}

// Código optimizado - Soluciones mejoradas
public function actionOptimizedCode()
{
    return $this->render('optimized-code');
}
```

### Ciclo de Vida del Controlador

```
1. Init()                    ← Inicialización
2. beforeAction()            ← Antes de ejecutar acción (filters)
3. actionXxx()               ← Acción solicitada
4. afterAction()             ← Después de acción
5. render(viewName, $data)   ← Renderizar vista
6. Response enviada          ← Respuesta HTTP
```

---

## 📊 MODELOS

### Localización
```
models/
├── User.php           # Modelo de usuario
├── LoginForm.php      # Formulario de login
├── ContactForm.php    # Formulario de contacto
└── [CustomModels]/    # Otros modelos
```

### Tipos de Modelos en MOOC IA

#### 1. Active Record (Acceso a BD)

```php
namespace app\models;

use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    public static function tableName()
    {
        return 'user';  // Tabla en BD
    }
    
    public function rules()
    {
        return [
            ['username', 'required'],
            ['password', 'required'],
            ['email', 'email'],
        ];
    }
}
```

**Uso:**
```php
// Crear
$user = new User();
$user->username = 'admin';
$user->save();

// Leer
$user = User::findOne(1);
$users = User::find()->where(['active' => 1])->all();

// Actualizar
$user->email = 'nuevo@email.com';
$user->save();

// Eliminar
$user->delete();
```

#### 2. Form Models (Validación sin BD)

```php
namespace app\models;

use yii\base\Model;

class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    
    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'body'], 'required'],
            ['email', 'email'],
        ];
    }
    
    public function sendEmail()
    {
        if ($this->validate()) {
            // Enviar email
            return true;
        }
        return false;
    }
}
```

### Lógica de Negocio en Modelos

```php
class User extends ActiveRecord
{
    // Atributos
    private $profile;
    
    // Métodos para lógica de negocio
    public function isAdmin()
    {
        return $this->role === 'admin';
    }
    
    public function isActive()
    {
        return $this->status === 'active';
    }
    
    public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
    
    // Relaciones
    public function getProfile()
    {
        return $this->hasOne(UserProfile::class, ['user_id' => 'id']);
    }
}
```

---

## 🎨 VISTAS

### Localización
```
views/
├── layouts/
│   └── main.php           # Layout principal
├── site/
│   ├── index.php          # Home
│   ├── about.php          # Acerca de
│   ├── contact.php        # Contacto
│   └── login.php          # Login
└── module3/
    ├── index.php          # Módulo 3 principal
    ├── buggy-code.php     # Código con problemas
    └── optimized-code.php # Código optimizado
```

### Estructura de una Vista

```php
<?php
// Declarar variables disponibles
/** @var yii\web\View $this */
/** @var string $title */

use yii\helpers\Html;
use yii\helpers\Url;

// Establecer título
$this->title = 'Título de la página';

// Breadcrumbs
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Contenido HTML -->
<div class="site-content">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Contenido aquí</p>
</div>
```

### Layouts (Plantillas Base)

**Archivo:** `views/layouts/main.php`

```php
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <!-- CSS, meta tags, etc -->
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    
    <!-- Navbar -->
    <nav class="navbar">...</nav>
    
    <!-- Contenido de la vista específica -->
    <main>
        <?= $content ?>  <!-- Aquí se renderiza la vista específica -->
    </main>
    
    <!-- Footer -->
    <footer>...</footer>
    
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
```

### Renderizado de Vistas

```php
// Desde controlador
// Renderiza: views/site/index.php con layout main.php
public function actionIndex()
{
    $data = ['title' => 'Home', 'items' => []];
    return $this->render('index', $data);
}

// Sin layout
return $this->renderPartial('template', $data);

// Como contenido de AJAX
$content = $this->renderPartial('partial');
```

### Vistas en MOOC IA

#### 1. Vistas de Sitio (`views/site/`)

**index.php (Landing Page)**
```php
<!-- Hero section con gradientes -->
<!-- Tarjetas de módulos -->
<!-- Botones de navegación -->
```

**login.php (Autenticación)**
```php
<!-- Formulario de login centrado -->
<!-- Inputs para usuario/contraseña -->
<!-- Validaciones en cliente -->
```

#### 2. Vistas de Módulo 3 (`views/module3/`)

**index.php (Principal)**
```php
<!-- Introducción al módulo -->
<!-- Tarjetas de navegación -->
<!-- Objetivos de aprendizaje -->
```

**buggy-code.php (Problemas)**
```php
<!-- Título y descripción -->
<!-- Bloque de código con errores -->
<!-- Lista de problemas identificados -->
<!-- Enlaces de navegación -->
```

**optimized-code.php (Soluciones)**
```php
<!-- Título y descripción -->
<!-- Bloque de código optimizado -->
<!-- Tabla de mejoras -->
<!-- Comparación antes/después -->
```

---

## 🔄 Flujo de Datos MVC en MOOC IA

### Ejemplo 1: Ver Home del Curso

```
1. Usuario accede a: http://localhost/mooc-ia/web/index.php?r=site/index

2. CONTROLADOR (SiteController)
   - Acción: actionIndex()
   - Obtiene datos del curso
   - Prepara variables

3. MODELO (Datos del curso)
   - Si hay BD: Obtiene módulos, usuarios, etc.
   - Aplicaciones sin BD: Datos hardcodeados

4. VISTA (views/site/index.php)
   - Recibe datos del controlador
   - Renderiza HTML con layout main.php
   - Incluye CSS, JS, assets

5. LAYOUT (views/layouts/main.php)
   - Envuelve la vista en estructura HTML
   - Añade navbar, footer
   - Renderiza estilos globales

6. RESPUESTA
   - HTML completo enviado al navegador
   - Navegador renderiza página
```

### Ejemplo 2: Procesar Formulario de Contacto

```
1. Usuario llena formulario y envía POST
   http://localhost/mooc-ia/web/index.php?r=site/contact

2. CONTROLADOR (SiteController::actionContact)
   if ($model->load(request) && $model->validate()) {
       // Procesar datos
       $model->sendEmail();
       return redirect('success');
   }
   return render('contact', $model);

3. MODELO (ContactForm)
   - Valida datos (email, campos requeridos)
   - Ejecuta lógica: sendEmail()
   - Retorna resultado

4. VISTA (views/site/contact.php)
   - Si hay errores: Muestra formulario con errores
   - Si es GET: Muestra formulario vacío
   - Si es exitoso: Muestra mensaje éxito
```

### Ejemplo 3: Ver Módulo 3 - Código con Problemas

```
1. Usuario hace clic en "Código con Problemas"
   http://localhost/mooc-ia/web/index.php?r=module3/buggy-code

2. CONTROLADOR (Module3Controller::actionBuggyCode)
   - Prepara datos educativos
   - Carga ejemplos de código
   - Renderiza vista

3. MODELO (No aplica, solo datos estáticos)
   - Ejemplos de código están en la vista
   - Para producción: Guardar en BD

4. VISTA (views/module3/buggy-code.php)
   - Muestra código con problemas
   - Resalta errores
   - Lista de problemas identificados
   - Botones de navegación

5. RESPUESTA
   - Página con código mostrado
   - Componentes interactivos
```

---

## 🎯 Responsabilidades por Capa

### Controlador (Orquestación)
- ✅ Recibir solicitud HTTP
- ✅ Determinar qué hacer
- ✅ Llamar modelos
- ✅ Pasar datos a vista
- ❌ NO ejecutar lógica de negocio directa
- ❌ NO acceder directamente a BD

### Modelo (Lógica & Datos)
- ✅ Lógica de negocio
- ✅ Acceso a base de datos
- ✅ Validaciones complejas
- ✅ Transformaciones de datos
- ❌ NO renderizar HTML
- ❌ NO conocer sobre HTTP

### Vista (Presentación)
- ✅ Renderizar HTML
- ✅ Mostrar datos
- ✅ Formularios y entrada
- ✅ CSS y JS de presentación
- ❌ NO lógica de negocio
- ❌ NO acceso a BD

---

## 📁 Diagrama de Directorios Completo

```
mooc-ia/
├── controllers/
│   ├── SiteController.php
│   │   ├── actionIndex()      → render('index')
│   │   ├── actionAbout()      → render('about')
│   │   ├── actionContact()    → render('contact') + ContactForm
│   │   └── actionLogin()      → render('login') + LoginForm
│   │
│   └── Module3Controller.php
│       ├── actionIndex()      → render('index')
│       ├── actionBuggyCode()  → render('buggy-code')
│       └── actionOptimizedCode() → render('optimized-code')
│
├── models/
│   ├── User.php               # ActiveRecord
│   ├── LoginForm.php          # Form Model
│   ├── ContactForm.php        # Form Model
│   └── [otros]/
│
└── views/
    ├── layouts/
    │   ├── main.php           # Layout principal
    │   └── [otros]/
    │
    ├── site/
    │   ├── index.php
    │   ├── about.php
    │   ├── contact.php
    │   ├── login.php
    │   └── error.php
    │
    └── module3/
        ├── index.php
        ├── buggy-code.php
        └── optimized-code.php
```

---

## 🔌 Integración de Componentes

### Cómo Bootstrap 5 se integra

```php
// En views/layouts/main.php
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\bootstrap5\Html;

NavBar::begin(['class' => 'navbar navbar-expand']);
    echo Nav::widget([
        'items' => [
            ['label' => 'Inicio', 'url' => ['/site/index']],
            ['label' => 'Módulo 3', 'url' => ['/module3']],
        ]
    ]);
NavBar::end();
```

### Cómo se cargan estilos personalizados

```php
// En views/layouts/main.php
<link href="<?= Yii::$app->request->baseUrl ?>/css/site.css" rel="stylesheet">

// En web/css/site.css
.module3-hero { ... }
.course-card { ... }
```

---

## 🚀 Best Practices en MVC

1. **Mantener Controladores Delgados**
   - Evitar lógica compleja en acciones
   - Delegar a modelos

2. **Mantener Modelos Gordos**
   - Toda lógica de negocio aquí
   - Métodos reutilizables

3. **Mantener Vistas Simples**
   - Solo HTML y presentación
   - Usar helpers de Yii (Html, Url, etc.)

4. **Separación de Responsabilidades**
   - Cada capa hace su trabajo
   - Bajo acoplamiento

5. **Reutilización de Código**
   - Componentes reutilizables
   - Layouts compartidos
   - Widgets

---

**Relacionado:** [FRAMEWORK.md](./FRAMEWORK.md) | [GIT_VERSION_CONTROL.md](./GIT_VERSION_CONTROL.md) | [INDEX.md](./INDEX.md)

