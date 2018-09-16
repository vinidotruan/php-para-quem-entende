<?php

function connect() {
    $pdo = new \PDO("mysql:host=localhsot;dbname=blog;charset=utf8", "root", "");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

}

function create($table, $fields) {
    dd($fields);
}

function update() {

}

function find() {

}

function delete() {

}