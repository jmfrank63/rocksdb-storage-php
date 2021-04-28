<?php
if (!extension_loaded("rocksdb")) {
    echo "No rocksdb extension";
    die();
}
$rocksdb_path = '/vagrant/rocksdb';
$db = new RocksDb\RocksDb($rocksdb_path, ['create_if_missing' => true]);
var_dump($db->put('key', 'value'));
var_dump($db->get('key'));
var_dump($db->get('non-exists-key'));
var_dump($db->put('name', 'justinas'));
var_dump($db->get('name'));
var_dump($db->delete('name'));
var_dump($db->get('name'));

