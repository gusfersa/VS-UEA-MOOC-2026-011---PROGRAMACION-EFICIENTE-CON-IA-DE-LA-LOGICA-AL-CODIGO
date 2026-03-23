<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;
use yii\helpers\Url;

$this->title = 'Código con Problemas - Módulo 3';
$this->params['breadcrumbs'][] = ['label' => 'Módulo 3', 'url' => ['/module3']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="module3-buggy module3-hero">
    <div class="module3-code-card">
        <div class="module3-header text-center mb-4">
            <p class="module3-tag">🔴 CÓDIGO CON PROBLEMAS</p>
            <h1>Ejemplo de Código <span>Ineficiente</span></h1>
        </div>

        <div class="module3-code-content">
            <h2>Caso de uso: Procesar lista de usuarios</h2>
            <p class="problem-description">
                El siguiente código intenta procesar una lista de usuarios y enviar notificaciones. 
                ¿Puedes identificar los problemas? 🤔
            </p>

            <div class="code-block">
                <div class="code-header">
                    <span class="code-label">❌ buggy_users.php</span>
                    <button class="btn-copy" onclick="copyCode('buggy-code-1')">Copiar</button>
                </div>
                <pre><code id="buggy-code-1" class="language-php"><?= htmlspecialchars('<?php

class UserProcessor {
    public function processUsers($users) {
        $results = array();
        
        // PROBLEMA 1: Loop ineficiente con búsquedas
        for ($i = 0; $i < count($users); $i++) {
            $user = $users[$i];
            
            // PROBLEMA 2: Sin validación de datos
            $email = $user["email"];
            $name = $user["name"];
            
            // PROBLEMA 3: Múltiples búsquedas en array
            if (in_array($user["id"], array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10))) {
                // PROBLEMA 4: Lógica duplicada
                if ($user["status"] == "active") {
                    $message = "Hola " . $name . ", tu suscripción está activa";
                    sendEmail($email, $message);
                    array_push($results, $user);
                }
            }
        }
        
        // PROBLEMA 5: Sin manejo de errores
        return $results;
    }
}

function sendEmail($email, $message) {
    // PROBLEMA 6: Sin logging o validación
    mail($email, "Notificación", $message);
}
') ?></code></pre>
            </div>

            <div class="problems-list">
                <h3>Problemas identificados:</h3>
                <!-- ERROR 3: Variable $problem no está definida -->
                <p><?= $problem ?></p>
                <ul>
                    <li><strong>Loop ineficiente:</strong> Usando count() en cada iteración (O(n²))</li>
                    <!-- ERROR 4: Sintaxis incorrecta en PHP -->
                    <?php if (true { ?>
                    <li><strong>Sin validación:</strong> Acceso directo a array sin verificar claves</li>
                    <?php } ?>
                    <li><strong>Búsquedas lentas:</strong> in_array() en lista hardcodeada</li>
                    <li><strong>Comparación débil:</strong> Usando == en lugar de ===</li>
                    <li><strong>Sin manejo de errores:</strong> Funciones pueden fallar silenciosamente</li>
                    <li><strong>Sin tipado:</strong> Código poco mantenible y propenso a errores</li>
                    <li><strong>Lógica duplicada:</strong> Código repetido en múltiples lugares</li>
                    <li><strong>Sin logging:</strong> Imposible debuguear en producción</li>
                </ul>
            </div>

            <div class="action-buttons mt-4">
                <a href="<?= Url::to(['/module3/optimized-code']) ?>" class="btn btn-module3-primary">
                    Ver Código Optimizado →
                </a>
                <a href="<?= Url::to(['/module3']) ?>" class="btn btn-module3-secondary">
                    Volver al Módulo
                </a>
            </div>
        </div>
    </div>
</div>

<style>
.btn-copy {
    background: #22d3ee;
    color: #0f172a;
    border: none;
    padding: 4px 12px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 0.85rem;
    font-weight: 600;
}

.btn-copy:hover {
    background: #06b6d4;
}

.problems-list li {
    margin-bottom: 10px;
    color: #cbd5e1;
}
</style>

<script>
function copyCode(elementId) {
    var codeElement = document.getElementById(elementId);
    var text = codeElement.innerText;
    navigator.clipboard.writeText(text).then(() => {
        alert('¡Código copiado!');
    });
}
</script>

