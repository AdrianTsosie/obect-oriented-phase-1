<?php
require_once(dirname(__DIR__, 1) . "/classes/autoload.php");
use  Atsosie11\Author\Author;
$john = new Author("032d9d9a-7195-4961-b84e-dfb0f420af72", "www.google.com", "abcdefghijklmnopqrstuvwxyzabcdef", "test@test.com", "abcdefghijklmnopqrstuvwxyzabcdefabcdefghijklmnopqrstuvwxyzabcdefabcdefghijklmnopqrstuvwxyzabcdefg", "Testuser");

var_dump($john);