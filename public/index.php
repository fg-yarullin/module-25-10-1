<?php
    require __DIR__ . '/../includes/autoload.php';

    ob_start();
    
    include __DIR__ . '/../layouts/members.layout.php';

    $output = ob_get_clean();

    include __DIR__ . '/../layouts/master.layout.php';