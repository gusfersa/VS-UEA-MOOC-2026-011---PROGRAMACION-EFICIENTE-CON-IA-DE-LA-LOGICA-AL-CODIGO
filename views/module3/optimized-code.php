<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;

$this->title = 'Código Optimizado - Módulo 3';
$this->params['breadcrumbs'][] = ['label' => 'Módulo 3', 'url' => ['/module3']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="module3-optimized module3-hero">
    <div class="module3-code-card">
        <div class="module3-header text-center mb-4">
            <p class="module3-tag">✅ CÓDIGO OPTIMIZADO</p>
            <h1>Solución <span>Mejorada</span></h1>
        </div>

        <div class="module3-code-content">
            <h2>Refactorización completa con mejores prácticas</h2>
            <p class="solution-description">
                La IA sugirió las siguientes mejoras para resolver todos los problemas identificados. 
                Fíjate en cada cambio y por qué es importante. ✨
            </p>

            <div class="code-block">
                <div class="code-header">
                    <span class="code-label">✅ optimized_users.php</span>
                    <button class="btn-copy" onclick="copyCode('optimized-code-1')">Copiar</button>
                </div>
                <pre><code id="optimized-code-1" class="language-php"><?= htmlspecialchars('<?php

use Psr\Log\LoggerInterface;

class UserProcessor {
    private array $premiumUserIds;
    private LoggerInterface $logger;
    private EmailService $emailService;
    
    public function __construct(
        LoggerInterface $logger,
        EmailService $emailService,
        array $premiumUserIds = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
    ) {
        $this->logger = $logger;
        $this->emailService = $emailService;
        // MEJORA 1: Usar array_flip para búsquedas O(1)
        $this->premiumUserIds = array_flip($premiumUserIds);
    }
    
    /**
     * @param array $users Lista de usuarios a procesar
     * @return array Usuarios procesados exitosamente
     * @throws InvalidArgumentException Si los datos son inválidos
     */
    public function processUsers(array $users): array {
        $results = [];
        
        // MEJORA 2: Iterate sin count() en cada loop
        foreach ($users as $user) {
            try {
                // MEJORA 3: Validar datos antes de usar
                $this->validateUser($user);
                
                $userId = (int) $user["id"];
                $email = (string) $user["email"];
                $name = (string) $user["name"];
                $status = (string) $user["status"];
                
                // MEJORA 4: Simplificar con método dedicado
                if ($this->isPremiumAndActive($userId, $status)) {
                    $this->notifyUser($email, $name);
                    $results[] = $user;
                    
                    $this->logger->info("Usuario procesado", [
                        "user_id" => $userId,
                        "email" => $email
                    ]);
                }
            } catch (Exception $e) {
                // MEJORA 5: Manejo de errores con logging
                $this->logger->error("Error procesando usuario", [
                    "error" => $e->getMessage(),
                    "user" => $user
                ]);
            }
        }
        
        return $results;
    }
    
    // MEJORA 6: Métodos pequeños y testables
    private function validateUser(array $user): void {
        $required = ["id", "email", "name", "status"];
        foreach ($required as $field) {
            if (!isset($user[$field]) || empty($user[$field])) {
                throw new InvalidArgumentException(
                    "Campo requerido ausente: $field"
                );
            }
        }
    }
    
    // MEJORA 7: Lógica clara con nombre descriptivo
    private function isPremiumAndActive(int $userId, string $status): bool {
        // MEJORA 4: isset es más rápido que in_array
        return isset($this->premiumUserIds[$userId]) 
            && $status === "active"; // MEJORA: Usar ===
    }
    
    // MEJORA 8: Inyección de dependencia
    private function notifyUser(string $email, string $name): void {
        $message = "Hola $name, tu suscripción está activa";
        $this->emailService->send($email, "Notificación", $message);
    }
}

// MEJORA 9: Clase separada con responsabilidad única
class EmailService {
    private LoggerInterface $logger;
    
    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }
    
    public function send(string $to, string $subject, string $body): bool {
        try {
            // Validar email
            if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
                throw new InvalidArgumentException("Email inválido: $to");
            }
            
            $success = mail($to, $subject, $body);
            
            if (!$success) {
                throw new RuntimeException("mail() falló para: $to");
            }
            
            return true;
        } catch (Exception $e) {
            $this->logger->error("Error enviando email", [
                "to" => $to,
                "error" => $e->getMessage()
            ]);
            return false;
        }
    }
}
') ?></code></pre>
            </div>

            <div class="improvements-grid">
                <h3>Mejoras aplicadas:</h3>
                <div class="improvement-item">
                    <span class="badge">1</span>
                    <div>
                        <strong>Construcción eficiente:</strong> Inyección de dependencias y uso de array_flip para búsquedas O(1)
                    </div>
                </div>
                <div class="improvement-item">
                    <span class="badge">2</span>
                    <div>
                        <strong>Iteración correcta:</strong> foreach en lugar de for con count() en cada iteración
                    </div>
                </div>
                <div class="improvement-item">
                    <span class="badge">3</span>
                    <div>
                        <strong>Validación robusta:</strong> Método dedicado para validar datos antes de procesarlos
                    </div>
                </div>
                <div class="improvement-item">
                    <span class="badge">4</span>
                    <div>
                        <strong>Lógica clara:</strong> Métodos pequeños con nombres descriptivos
                    </div>
                </div>
                <div class="improvement-item">
                    <span class="badge">5</span>
                    <div>
                        <strong>Manejo de errores:</strong> Try-catch con logging para debugging en producción
                    </div>
                </div>
                <div class="improvement-item">
                    <span class="badge">6</span>
                    <div>
                        <strong>Tipado:</strong> Tipos de retorno y parámetros para mayor seguridad
                    </div>
                </div>
                <div class="improvement-item">
                    <span class="badge">7</span>
                    <div>
                        <strong>Operadores correctos:</strong> === en lugar de == para comparaciones estrictas
                    </div>
                </div>
                <div class="improvement-item">
                    <span class="badge">8</span>
                    <div>
                        <strong>Responsabilidad única:</strong> Cada clase tiene una única razón para cambiar
                    </div>
                </div>
            </div>

            <div class="comparison-box">
                <h3>Comparación de rendimiento:</h3>
                <table class="comparison-table">
                    <tr>
                        <th>Aspecto</th>
                        <th>❌ Versión Original</th>
                        <th>✅ Versión Optimizada</th>
                    </tr>
                    <tr>
                        <td>Complejidad de búsqueda</td>
                        <td>O(n) - in_array</td>
                        <td>O(1) - isset en array_flipped</td>
                    </tr>
                    <tr>
                        <td>Iteración</td>
                        <td>O(n²) - count() en loop</td>
                        <td>O(n) - foreach directo</td>
                    </tr>
                    <tr>
                        <td>Comparaciones</td>
                        <td>== (débil, ambiguo)</td>
                        <td>=== (estricta, segura)</td>
                    </tr>
                    <tr>
                        <td>Testabilidad</td>
                        <td>Difícil de testear</td>
                        <td>Fácil con inyección de dependencias</td>
                    </tr>
                    <tr>
                        <td>Debugging</td>
                        <td>Sin logging</td>
                        <td>Logging completo</td>
                    </tr>
                </table>
            </div>

            <div class="action-buttons mt-4">
                <a href="<?= Html::url(['/module3/buggy-code']) ?>" class="btn btn-module3-secondary">
                    ← Ver Código Problemático
                </a>
                <a href="<?= Html::url(['/module3']) ?>" class="btn btn-module3-primary">
                    Volver al Módulo
                </a>
            </div>
        </div>
    </div>
</div>

<style>
.improvement-item {
    display: flex;
    gap: 12px;
    margin-bottom: 12px;
    padding: 12px;
    background: rgba(34, 211, 238, 0.1);
    border-left: 3px solid #22d3ee;
    border-radius: 6px;
}

.improvement-item .badge {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    background: #22d3ee;
    color: #0f172a;
    border-radius: 50%;
    font-weight: 700;
    flex-shrink: 0;
}

.comparison-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 12px;
}

.comparison-table th,
.comparison-table td {
    padding: 12px;
    border: 1px solid rgba(148, 163, 184, 0.2);
    text-align: left;
    color: #cbd5e1;
}

.comparison-table th {
    background: rgba(34, 211, 238, 0.1);
    color: #22d3ee;
    font-weight: 600;
}

.comparison-table tr:hover {
    background: rgba(34, 211, 238, 0.05);
}
</style>

