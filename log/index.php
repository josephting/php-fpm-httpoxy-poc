<?php

$data = array(
	"PHP_SELF" => $_SERVER["PHP_SELF"],
	"QUERY_STRING" => $_SERVER["QUERY_STRING"],
	"HTTP_PROXY" => $_SERVER["HTTP_PROXY"],
	"HTTP_HEADER" => getallheaders()
);

file_put_contents("./log.log", print_r($data, true), FILE_APPEND);