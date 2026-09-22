<?php

$mysqli = new mysqli("localhost", "root", "", "churrasco");

$mysqli->set_charset("utf8mb4");

if ($mysqli->connect_error) {
    die('Erro de conexão: ' . $mysqli->connect_error);
    }
