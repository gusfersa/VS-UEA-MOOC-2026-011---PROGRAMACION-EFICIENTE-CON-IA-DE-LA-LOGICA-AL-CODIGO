# 📦 Git y Control de Versiones

## Introducción

MOOC IA utiliza **Git** como sistema de control de versiones. Esta documentación detalla cómo el proyecto está organizado en Git y las mejores prácticas para contribuir.

---

## 📋 Información del Repositorio

| Aspecto | Detalle |
|--------|---------|
| **Nombre** | VS-UEA-MOOC-2026-011 (PROGRAMACION EFICIENTE CON IA) |
| **URL** | [GitHub](https://github.com/gusfersa/VS-UEA-MOOC-2026-011---PROGRAMACION-EFICIENTE-CON-IA-DE-LA-LOGICA-AL-CODIGO) |
| **Rama principal** | `main` |
| **Rama de desarrollo** | `main` (por ahora) |
| **Sistema VCS** | Git |
| **Plataforma** | GitHub |

---

## 🌳 Estrategia de Branching

### Estructura de Ramas

```
main (rama principal)
├── Commits de producción
├── Releases estables
└── Tags para versiones
```

**Nota:** Actualmente se usa `main` para todos los cambios. En el futuro se puede implementar Git Flow con `develop`, `feature/*`, `bugfix/*`, etc.

---

## 📝 Convención de Commits

Todos los commits deben seguir este formato:

```
<tipo>: <descripción breve>

<descripción detallada (opcional)>
<línea en blanco>
<ticket/issue (opcional)>
```

### Tipos de Commit

| Tipo | Descripción | Ejemplo |
|------|------------|---------|
| **feat** | Nueva funcionalidad | `feat: agregar Módulo 3 con controlador` |
| **fix** | Corrección de bug | `fix: corregir errores en Module3Controller` |
| **docs** | Cambios en documentación | `docs: actualizar README` |
| **style** | Cambios de formato, estilos CSS | `style: agregar estilos para Módulo 3` |
| **refactor** | Reorganización sin cambiar funcionamiento | `refactor: reorganizar estructura de vistas` |
| **test** | Añadir o actualizar tests | `test: agregar tests para LoginForm` |
| **chore** | Cambios en configuración, dependencias | `chore: actualizar dependencias composer` |
| **perf** | Mejoras de rendimiento | `perf: optimizar queries de BD` |

### Ejemplos de Commits Bien Hechos

```
feat: crear Módulo 3 con ejemplos de depuración

- Agregar Module3Controller con 3 acciones
- Crear vistas para código problemático y optimizado
- Añadir estilos CSS personalizados
- Ejemplos incluyen errores intencionales para enseñanza
```

```
fix: corregir sintaxis en views del Módulo 3

Remover variable no definida y cerrar if statements correctamente
en buggy-code.php y optimized-code.php
```

### Ejemplos MALOS de Commits

```
❌ asdf              (no descriptivo)
❌ Fix bugs          (sin tipo, no específico)
❌ wip               (trabajo en progreso sin finalizar)
❌ Update           (demasiado genérico)
```

---

## 🔄 Flujo de Trabajo Git

### 1. Configurar Identidad (primera vez)

```bash
git config --global user.name "Tu Nombre"
git config --global user.email "tu@email.com"

# Verificar
git config --global user.name
git config --global user.email
```

### 2. Clonar Repositorio

```bash
git clone https://github.com/gusfersa/VS-UEA-MOOC-2026-011---PROGRAMACION-EFICIENTE-CON-IA-DE-LA-LOGICA-AL-CODIGO.git
cd mooc-ia
```

### 3. Crear Rama de Trabajo (opcional, para el futuro)

```bash
# Crear rama para nueva funcionalidad
git checkout -b feature/nueva-funcionalidad

# O crear y cambiar en un comando
git switch -c feature/nueva-funcionalidad
```

### 4. Hacer Cambios

```bash
# Ver estado
git status

# Ver cambios
git diff

# Preparar cambios para commit
git add archivo.php
# O todos los cambios
git add .

# Ver cambios preparados
git diff --staged
```

### 5. Hacer Commit

```bash
# Commit simple
git commit -m "fix: corregir error en Module3Controller"

# Commit interactivo (elige qué agregar)
git commit -i

# Commit con descripción larga
git commit -m "feat: agregar nuevo módulo

- Crear controlador
- Crear vistas
- Agregar estilos"
```

### 6. Enviar a Repositorio

```bash
# Empujar rama actual
git push origin main

# Empujar rama específica
git push origin feature/nueva-funcionalidad

# Primera vez en rama nueva
git push -u origin feature/nueva-funcionalidad
```

### 7. Actualizar desde Repositorio

```bash
# Obtener cambios sin fusionar
git fetch

# Actualizar rama local
git pull

# Equivalente a fetch + merge
git pull origin main
```

---

## 📊 Historial de Commits del Proyecto

```
commit 139506b
docs: actualizar descripción del Módulo 3 en README

commit 5af27d5
fix: corregir array incompleto y remover variable no definida en vista optimized-code

commit 5b518f2
fix: corregir errores de sintaxis en vista buggy-code

commit 1f61bd2
fix: corregir URLs en vista index del Módulo 3

commit d62a1b3
fix: corregir errores en Module3Controller

commit a9a0752
fix: corregir rutas y URLs en vistas del Módulo 3

commit 799a5d3
docs: refactorizar README con información del curso y guía de instalación básica

commit 5856c4c
style: agregar estilos CSS para Módulo 3 (depuración e optimización)

commit 9a89987
feat: agregar Módulo 3 con controlador y menú (contiene errores intencionales para demostración)

... (más commits anteriores)
```

---

## 🔍 Comandos Útiles de Git

### Ver Historial

```bash
# Ver commits recientes
git log --oneline -10

# Ver commits con gráfico
git log --graph --oneline --all

# Ver commits de un archivo
git log -- archivo.php

# Ver cambios introducidos por commit
git show abc1234

# Ver autor de cada línea
git blame archivo.php
```

### Buscar y Filtrar

```bash
# Buscar commits con texto
git log --grep="fix"

# Ver commits entre fechas
git log --since="2026-03-01" --until="2026-03-22"

# Ver commits de autor
git log --author="nombre"
```

### Deshacer Cambios

```bash
# Deshacer cambios no guardados
git restore archivo.php

# Deshacer cambios preparados
git restore --staged archivo.php

# Ver commits anteriores (no destructivo)
git revert abc1234

# Volver a commit anterior (destructivo)
git reset --hard abc1234
```

### Ramas

```bash
# Listar ramas
git branch

# Listar ramas remotas
git branch -r

# Cambiar de rama
git checkout main

# Eliminar rama
git branch -d feature/terminada

# Eliminar rama remota
git push origin --delete feature/terminada
```

### Stash (Guardar trabajo temporalmente)

```bash
# Guardar cambios sin commitear
git stash

# Ver stash guardados
git stash list

# Recuperar stash
git stash pop

# Recuperar stash específico
git stash pop stash@{0}
```

---

## 🔐 Seguridad en Git

### Proteger Información Sensible

```bash
# Crear archivo .gitignore
echo "config/db.php" >> .gitignore
echo ".env" >> .gitignore
echo "runtime/" >> .gitignore

# No incluir passwords en commits
git config --local user.password  # ¡MAL!
```

### Archivos que NO deben estar en Git

```
runtime/               # Archivos generados
web/assets/           # Assets compilados
vendor/               # Dependencias de Composer
.env                  # Variables de entorno
*.log                 # Archivos de log
config/db.php         # Credenciales de BD (usa .env.example)
```

### Archivo `.gitignore` del Proyecto

```
# Dependencias
vendor/

# Archivos generados
runtime/
web/assets/

# Variables de entorno
.env
.env.*.php

# IDE
.idea/
.vscode/
*.swp
*.swo

# Sistema operativo
.DS_Store
Thumbs.db

# Logs
*.log
logs/
```

---

## 🤝 Colaboración en Equipo

### Resolver Conflictos

Cuando dos personas editan el mismo archivo:

```bash
# Conflicto encontrado en merge
git status

# Editar archivo manualmente para resolver conflicto
# Archivo tendrá marcadores:
# <<<<<<< HEAD
# Tu código
# =======
# Código del otro
# >>>>>>> rama-otra

# Una vez resuelto:
git add archivo.php
git commit -m "Resolver conflicto en archivo.php"
```

### Pull Requests (Futuro)

Cuando se implemente en GitHub:

1. Fork del repositorio
2. Crear rama para cambio
3. Hacer commits
4. Push a tu fork
5. Crear Pull Request
6. Revisión de código
7. Merge a main

---

## 📈 Versionado (Tags)

### Crear Versión

```bash
# Crear tag anotado
git tag -a v1.0.0 -m "Versión 1.0.0 - Lanzamiento inicial"

# Crear tag ligero
git tag v1.0.0

# Ver tags
git tag -l

# Enviar tags
git push origin --tags

# Enviar tag específico
git push origin v1.0.0
```

### Esquema de Versionado (Semantic Versioning)

```
v[MAJOR].[MINOR].[PATCH]

v1.0.0   → Primera versión estable
v1.1.0   → Nuevas features
v1.1.1   → Bug fixes
v2.0.0   → Cambios breaking
```

Para MOOC IA:
```
v0.1.0   → MVP (Landing + Módulo 1)
v0.2.0   → Módulo 2 completado
v0.3.0   → Módulo 3 completado
v1.0.0   → Todos los módulos, release candidato
```

---

## 📋 Checklist para Commits

Antes de hacer commit, verificar:

- ✅ Los cambios funcionan correctamente
- ✅ No hay código roto
- ✅ La descripción del commit es clara
- ✅ Usa el tipo de commit correcto
- ✅ No incluye archivos sensibles
- ✅ Sigue convención de commits
- ✅ Cambios relacionados en un commit
- ✅ Mensaje en inglés o español consistente

---

## 🚀 Flujo Ideal para el Proyecto

```
1. Recibir solicitud (feature, fix, docs)
   ↓
2. Crear rama local (si es necesario)
   ↓
3. Hacer cambios y testing local
   ↓
4. Múltiples commits pequeños y descriptivos
   ↓
5. Verificar git status y diff
   ↓
6. Push a repositorio remoto
   ↓
7. Crear Pull Request (si aplica)
   ↓
8. Revisión de código
   ↓
9. Merge a main
   ↓
10. Crear tag si es release
    ↓
11. Actualizar README/docs
```

---

## 📚 Recursos Adicionales

- [Documentación oficial Git](https://git-scm.com/doc)
- [GitHub Docs](https://docs.github.com/)
- [Interactive Git Cheat Sheet](https://ndpsoftware.com/git-cheatsheet.html)
- [Conventional Commits](https://www.conventionalcommits.org/)

---

**Relacionado:** [FRAMEWORK.md](./FRAMEWORK.md) | [ARCHITECTURE.md](./ARCHITECTURE.md) | [INDEX.md](./INDEX.md)

