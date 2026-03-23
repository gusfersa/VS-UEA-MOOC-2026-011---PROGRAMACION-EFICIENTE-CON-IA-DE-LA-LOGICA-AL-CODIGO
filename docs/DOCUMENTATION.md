# 📚 Guía de Documentación del Proyecto

## Introducción

Esta documentación describe cómo está estructurada y mantenida la documentación del proyecto MOOC IA. Es una guía meta (documentación sobre documentación) para asegurar consistencia y claridad.

---

## 📁 Estructura de la Carpeta `/docs/`

```
docs/
├── INDEX.md                    # Índice y punto de entrada
├── FRAMEWORK.md                # Detalles técnicos del framework
├── ARCHITECTURE.md             # Arquitectura MVC
├── GIT_VERSION_CONTROL.md      # Git y control de versiones
├── DOCUMENTATION.md            # Este archivo
├── SETUP_DEVELOPMENT.md        # Configuración del entorno
├── MODULES.md                  # Descripción de módulos
├── CONTRIBUTING.md             # Cómo contribuir
└── GLOSSARY.md                 # Glosario técnico
```

---

## 📝 Objetivo de Cada Documento

### INDEX.md
- **Propósito:** Punto de entrada a toda la documentación
- **Audiencia:** Todos (desarrolladores, IA, estudiantes)
- **Contenido:** Índice, guía de navegación, búsqueda rápida
- **Actualización:** Cuando se agreguen nuevos documentos

### FRAMEWORK.md
- **Propósito:** Explicar el framework Yii 2.0 usado
- **Audiencia:** Desarrolladores, agentes de IA
- **Contenido:** Componentes, configuración, ciclo de vida
- **Actualización:** Si cambia versión de Yii o dependencias

### ARCHITECTURE.md
- **Propósito:** Explicar estructura MVC del proyecto
- **Audiencia:** Desarrolladores, agentes de IA
- **Contenido:** Controladores, modelos, vistas, flujo de datos
- **Actualización:** Cuando cambie estructura del código

### GIT_VERSION_CONTROL.md
- **Propósito:** Guía de Git y control de versiones
- **Audiencia:** Desarrolladores, contribuyentes
- **Contenido:** Commits, branching, flujo de trabajo
- **Actualización:** Cuando cambie estrategia de branching

### DOCUMENTATION.md (Este archivo)
- **Propósito:** Cómo mantener la documentación
- **Audiencia:** Documentadores, desarrolladores
- **Contenido:** Estándares, guías, mejores prácticas
- **Actualización:** Cuando cambien estándares

### SETUP_DEVELOPMENT.md
- **Propósito:** Guía de instalación y configuración
- **Audiencia:** Nuevos desarrolladores, estudiantes
- **Contenido:** Instalación, configuración, troubleshooting
- **Actualización:** Cuando cambien requisitos

### MODULES.md
- **Propósito:** Describir los módulos educativos
- **Audiencia:** Estudiantes, desarrolladores
- **Contenido:** Módulo 1, 2, 3, 4 - objetivos, contenido, rutas
- **Actualización:** Cuando se agreguen módulos

### CONTRIBUTING.md
- **Propósito:** Guía para contribuyentes
- **Audiencia:** Desarrolladores, contribuyentes
- **Contenido:** Cómo contribuir, estándares de código
- **Actualización:** Cuando cambien requerimientos

### GLOSSARY.md
- **Propósito:** Definiciones técnicas
- **Audiencia:** Todos (especialmente estudiantes)
- **Contenido:** Términos, acrónimos, explicaciones
- **Actualización:** Cuando se agreguen nuevos términos

---

## 🎨 Estándares de Escritura

### 1. Encabezados

```markdown
# Título principal (H1)
Usar una sola vez por documento

## Sección principal (H2)
Para divisiones principales

### Subsección (H3)
Para detalles dentro de secciones

#### Apartado (H4)
Para puntos específicos
```

### 2. Formato de Texto

```markdown
**negrita** para énfasis importante
*cursiva* para términos técnicos
`código inline` para comandos cortos
```

### 3. Listas

```markdown
# Listas con viñetas
- Elemento 1
- Elemento 2
  - Sub-elemento
  - Sub-elemento

# Listas numeradas
1. Primer paso
2. Segundo paso
3. Tercer paso
```

### 4. Bloques de Código

```markdown
# Para código inline
`git commit -m "mensaje"`

# Para bloques de código multi-línea
\```bash
git add .
git commit -m "feat: nueva funcionalidad"
git push origin main
\```

# Para archivos
\```php
<?php
// código PHP
?>
\```
```

### 5. Tablas

```markdown
| Columna 1 | Columna 2 | Columna 3 |
|-----------|-----------|-----------|
| Dato 1    | Dato 2    | Dato 3    |
| Dato 4    | Dato 5    | Dato 6    |
```

### 6. Enlaces

```markdown
# Enlaces a archivos
[Ver FRAMEWORK.md](./FRAMEWORK.md)

# Enlaces externos
[Documentación de Yii](https://www.yiiframework.com/doc/guide/2.0)

# Enlaces internos
[Ir a Controladores](#controladores)
```

### 7. Emojis (con moderación)

```markdown
📚 Para secciones de documentación
🔧 Para configuración técnica
🎯 Para objetivos
📁 Para estructuras de carpetas
✅ Para confirmaciones
❌ Para errores o malos ejemplos
🚀 Para inicio rápido
```

---

## 🔍 Convenciones de Nombres

### Nombres de Archivos

```
Formato: NOMBRE_ARCHIVO.md
Ejemplos:
- FRAMEWORK.md        (mayúsculas)
- ARCHITECTURE.md
- GIT_VERSION_CONTROL.md  (guiones bajos para múltiples palabras)
```

### Nombres de Secciones

```
Usar título descriptivo
Ejemplos:
## 🏗️ Componentes Principales de Yii
## 📐 Estructura MVC General
## 🔄 Ciclo de Vida de una Solicitud
```

### Nombres de Subsecciones

```
Ser específico
Ejemplos:
### 1. Aplicación Web (`yii\web\Application`)
### 2. Router de Solicitudes (`yii\web\Request`)
### Estructura Base
### Acciones en MOOC IA
```

---

## ✍️ Guía de Estilo

### 1. Claridad

✅ **Bueno:**
```
El controlador maneja la solicitud HTTP, coordina la lógica 
de negocio con modelos y prepara datos para la vista.
```

❌ **Malo:**
```
Controllers handle stuff and work with models and views.
```

### 2. Precisión

✅ **Bueno:**
```
Archivo: config/web.php - Define componentes de aplicación como 
request, response, cache, database, etc.
```

❌ **Malo:**
```
Hay un archivo de config que configura cosas.
```

### 3. Ejemplos Prácticos

Siempre incluir ejemplos de código:

```php
// Ejemplo: Crear nuevo usuario
$user = new User();
$user->username = 'john';
$user->save();
```

### 4. Estructuras Visuales

```
Usar diagrama ASCII para arquitectura:

Usuario (Cliente)
    ↓
Solicitud HTTP
    ↓
[CONTROLADOR]
    ↓
[MODELO]
    ↓
[VISTA]
    ↓
Respuesta HTTP
```

### 5. Consistent Point of View

- Usar "nosotros", "el proyecto", "MOOC IA" 
- Ser consistente en segunda persona ("debes", "puedes")
- No mezclar singular/plural innecesariamente

---

## 📋 Checklist para Nuevo Documento

Antes de crear un nuevo documento de documentación:

- ✅ Determinar objetivo claro
- ✅ Identificar audiencia
- ✅ Decidir si va en `/docs/` o en README
- ✅ Definir estructura general
- ✅ Escribir título descriptivo (H1)
- ✅ Agregar tabla de contenidos si es largo
- ✅ Usar encabezados consistentes (H2, H3)
- ✅ Incluir ejemplos de código
- ✅ Agregar enlaces a documentos relacionados
- ✅ Mencionar cuándo actualizar
- ✅ Añadir al INDEX.md
- ✅ Revisar ortografía y claridad

---

## 🔄 Mantenimiento de Documentación

### Cuándo Actualizar

| Cambio | Archivos afectados |
|--------|-------------------|
| Nueva funcionalidad | ARCHITECTURE.md, MODULES.md |
| Cambio en framework | FRAMEWORK.md |
| Cambio en flujo Git | GIT_VERSION_CONTROL.md |
| Nuevo módulo | MODULES.md, INDEX.md |
| Nuevos requisitos | SETUP_DEVELOPMENT.md |
| Nuevos términos | GLOSSARY.md |

### Procedimiento de Actualización

```
1. Identificar qué cambió en el código
2. Determinar qué documentación afecta
3. Actualizar archivos relevantes
4. Revisar claridad y exactitud
5. Hacer commit con tipo: docs:
   git commit -m "docs: actualizar ARCHITECTURE.md"
6. Actualizar INDEX.md si es necesario
```

### Versionado de Documentación

```markdown
---
**Última actualización:** Marzo 22, 2026
**Versión de documentación:** 1.0
**Estado:** Completa
---
```

---

## 🎓 Documentación para Diferentes Audiencias

### Para Desarrolladores

- Ser técnico pero claro
- Incluir ejemplos de código
- Explicar el "por qué", no solo el "qué"
- Incluir mejores prácticas

### Para Agentes de IA

- Ser muy específico y detallado
- Explicar contexto completo
- Incluir diagramas y estructura
- Ser exhaustivo sin ser redundante

### Para Estudiantes

- Usar lenguaje accesible
- Explicar conceptos desde cero
- Incluir mucho contexto
- Usar analogías cuando sea apropiado

---

## 🚀 Ejemplo de Documento Bien Hecho

```markdown
# 🔧 Título Descriptivo

## Introducción
Párrafo corto explicando qué es y por qué importa.

---

## 📋 Sección Importante 1

Explicación clara con ejemplo:

\```php
// Código de ejemplo
$variable = valor;
\```

### Subsección 1.1
Más detalles.

---

## 🎯 Sección Importante 2

...contenido...

---

## 📚 Recursos Adicionales

- [Enlace 1](url)
- [Enlace 2](url)

---

**Relacionado:** [ARCHIVO1.md](./ARCHIVO1.md) | [ARCHIVO2.md](./ARCHIVO2.md) | [INDEX.md](./INDEX.md)
```

---

## 📊 Estadísticas Recomendadas

- **Longitud promedio:** 1,000-3,000 palabras
- **Párrafos:** 2-3 líneas máximo
- **Secciones:** 3-8 secciones principales
- **Ejemplos:** Mínimo 2-3 por documento
- **Enlaces internos:** Mínimo 3-5

---

## 🔗 Referencias Cruzadas

Al final de cada documento, incluir:

```markdown
**Relacionado:** [ARCHIVO1.md](./ARCHIVO1.md) | [ARCHIVO2.md](./ARCHIVO2.md) | [INDEX.md](./INDEX.md)
```

---

## 💡 Mejores Prácticas

✅ **Hacer:**
- Usar markdown simple y estándar
- Incluir ejemplos prácticos
- Ser específico con nombres de archivos/funciones
- Actualizar cuando código cambia
- Mantener índice actualizado

❌ **NO Hacer:**
- Usar HTML puro (markdown es suficiente)
- Documentación genérica sin ejemplos
- Dejar documentación desactualizada
- Mezclar estilos de escritura
- Documentar código obvio

---

## 📞 Preguntas Frecuentes

**P: ¿Dónde pongo nueva documentación?**
R: En la carpeta `/docs/` como archivo `.md` individual

**P: ¿Cómo vinculo documentos?**
R: Usa `[Texto](./ARCHIVO.md)` para archivos locales

**P: ¿Cuándo actualizo la documentación?**
R: Cada vez que cambies código que afecte arquitectura

**P: ¿Puedo usar HTML en markdown?**
R: Es posible pero no recomendado, usa markdown puro

---

**Última actualización:** Marzo 22, 2026  
**Versión:** 1.0  
**Estado:** Completa

**Relacionado:** [FRAMEWORK.md](./FRAMEWORK.md) | [ARCHITECTURE.md](./ARCHITECTURE.md) | [INDEX.md](./INDEX.md)

