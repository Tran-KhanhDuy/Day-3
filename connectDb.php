<?php

const DB_SERVER = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'demo1';

function connectDb() {
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            if ($conn->connect_error) {
                die('Connection failed: ' . $conn->connect_error);
                //die = echoo + exit
            }

            return $conn;
}

