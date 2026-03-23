<?php

namespace app\controllers;

use yii\web\Controller;

class Module3Controller extends Controller
{
    /**
     * Displays the Module 3: Intelligent Debugging and Optimization page
     * @return string
     */
    public function actionIndex()
    {
        // ERROR 1: Variable undefined $titulo
        echo "Bienvenido a " . $titulo;
        return $this->render('index');
    }

    /**
     * Shows example with problematic code
     * @return string
     */
    public function actionBuggyCode()
    {
        // ERROR 2: Comparación débil y lógica incorrecta
        $access_level = 1;
        if ($access_level == "1") {  // Debería ser ===
            $permission = true;
        }
        
        // ERROR 3: Array mal formado
        $data = array('name' => 'Test' 'age' => 25);
        
        return $this->render('buggy-code');
    }

    /**
     * Shows optimized code solution
     * @return string
     */
    public function actionOptimizedCode()
    {
        return $this->render('optimized-code');
    }
}

