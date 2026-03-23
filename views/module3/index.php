<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;

$this->title = 'Módulo 3: Depuración Inteligente y Optimización';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="module3-index module3-hero">
    <div class="module3-card">
        <div class="module3-header text-center mb-5">
            <p class="module3-tag">MÓDULO 3</p>
            <h1>Depuración Inteligente y <span>Optimización</span></h1>
            <p class="module3-subtitle">Aprende a identificar y resolver problemas de código con IA</p>
        </div>

        <div class="module3-content">
            <p class="module3-intro">
                En este módulo aprenderás cómo los agentes de IA pueden ayudarte a depurar código, 
                identificar ineficiencias y optimizar soluciones. Exploraremos código con problemas comunes 
                y veremos cómo la IA puede sugerirte mejoras.
            </p>

            <div class="module3-grid">
                <div class="module3-item">
                    <div class="item-icon">🔴</div>
                    <h3>Código con Problemas</h3>
                    <p>
                        Ejemplos reales de código ineficiente, con bugs y malas prácticas que enfrentarás en proyectos reales.
                    </p>
                    <a href="<?= Html::url(['/module3/buggy-code']) ?>" class="btn btn-module3-secondary">
                        Ver código problemático
                    </a>
                </div>

                <div class="module3-item">
                    <div class="item-icon">✅</div>
                    <h3>Código Optimizado</h3>
                    <p>
                        Soluciones mejoradas con explicaciones de cómo la IA nos ayudó a refactorizar y optimizar.
                    </p>
                    <a href="<?= Html::url(['/module3/optimized-code']) ?>" class="btn btn-module3-primary">
                        Ver código optimizado
                    </a>
                </div>
            </div>

            <div class="module3-learning-goals mt-5">
                <h2>Objetivos de aprendizaje:</h2>
                <ul>
                    <li>Identificar patrones de código ineficiente</li>
                    <li>Entender cómo la IA analiza y sugiere mejoras</li>
                    <li>Aplicar optimizaciones recomendadas por IA</li>
                    <li>Evaluar rendimiento antes y después de optimizaciones</li>
                    <li>Desarrollar pensamiento crítico sobre sugerencias de IA</li>
                </ul>
            </div>
        </div>
    </div>
</div>

