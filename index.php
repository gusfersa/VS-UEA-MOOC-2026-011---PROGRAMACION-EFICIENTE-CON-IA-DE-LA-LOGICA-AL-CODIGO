<?php
// Redirect root access to Yii2 front controller under /web.
header('Location: ./web/', true, 302);
exit;

