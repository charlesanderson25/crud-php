<!-- Conexão / comunicação com o Banco de Dados -->

<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'cadastro_cisterna');

    $conn = new MySqli(HOST, USER, PASS, BASE);
