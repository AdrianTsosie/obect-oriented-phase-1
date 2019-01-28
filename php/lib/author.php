<?php
//require_once(dirname(__DIR__, 1) . "/classes/autoload.php");

//use Atsosie11\Author\Author;
	namespace atsosie11\Author;

	require_once ("../classes/Author.php");
	require_once ("../classes/autoload.php");

		require_once (dirname(__DIR__, 2) . "/vendor/autoload.php");

$john = new Author("d8f6b7a8-b434-433b-9fd5-5a338074d2c9",
	"www.google.com",
	"abcdefghijklmnopqrstuvwxyzabcdef",
	"test@test.com",	"abcdefghijklmnopqrstuvwxyzabcdefabcdefghijklmnopqrstuvwxyzabcdefabcdefghijklmnopqrstuvwxyzabcdefg",
	"Testuser");

var_dump($john);