<?php
require_once __DIR__ . '/helpers.php';
require_once __DIR__ . '/logger.php';
session_destroy();
header('Location: /');

// Log --> Déconnexion

write_log(user_id: current_user()['username'] ?? 'ANONYMOUS', action: "Déconnexion.");

exit;
