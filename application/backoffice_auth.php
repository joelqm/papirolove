<?php
/**
 * Credenciales del backoffice (password solo como hash bcrypt).
 * NO guardar la contraseña en texto plano en el repositorio.
 */
return array(
    'username' => 'superpapiro',
    // password_hash('...', PASSWORD_DEFAULT)
    'password_hash' => '$2y$10$WAZzbcedJz0.famYSE.8muVgI1R7mKXiw4K2ujZEMgNcN0xFGUnR.',
    'max_attempts' => 5,
    'lockout_minutes' => 15,
    'session_minutes' => 60,
    'parejas' => array(
        array('id' => 1,  'nombre' => 'Sofía y Gabriel', 'slug' => 'sofiaygabriel'),
        array('id' => 2,  'nombre' => 'Fernanda y Romme', 'slug' => 'fernandayromme'),
        array('id' => 3,  'nombre' => 'Zelma y Samuel / María Alejandra y Diego', 'slug' => 'zelmaysamuel'),
        array('id' => 4,  'nombre' => 'Paola y Miguel', 'slug' => 'paolaymiguel'),
        array('id' => 5,  'nombre' => 'Jesyka y Gustavo / Julissa y Rubén', 'slug' => 'jesykaygustavo'),
        array('id' => 6,  'nombre' => 'Flavia y Aníbal', 'slug' => 'flaviayanibal'),
        array('id' => 7,  'nombre' => 'Mayte y Andree', 'slug' => 'mayteyandree'),
        array('id' => 8,  'nombre' => 'Daniela y Jean', 'slug' => 'danielayjean'),
        array('id' => 9,  'nombre' => 'Cynthia y Kevin', 'slug' => 'cynthiaykevin'),
        array('id' => 10, 'nombre' => 'Carmen y Gunther', 'slug' => 'carmenygunther'),
        array('id' => 11, 'nombre' => 'Lizeth y Erick', 'slug' => 'lizethyerick'),
        array('id' => 12, 'nombre' => 'Camila y Diego', 'slug' => 'camilaydiego'),
    ),
);
