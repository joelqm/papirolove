<?php
/**
 * Credenciales del backoffice (password solo como hash bcrypt).
 * Las bodas se guardan en application/backoffice_parejas.json
 */
return array(
    'username' => 'superpapiro',
    'password_hash' => '$2y$10$WAZzbcedJz0.famYSE.8muVgI1R7mKXiw4K2ujZEMgNcN0xFGUnR.',
    'max_attempts' => 5,
    'lockout_minutes' => 15,
    'session_minutes' => 60,
);
