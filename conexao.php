<?php

$mysqli = new mysqli("localhost", "root", "", "laboratorio");

$mysqli->set_charset("utf8mb4");

if ($mysqli->connect_error) {
    die('Erro de conexão: ' . $mysqli->connect_error);
    }
