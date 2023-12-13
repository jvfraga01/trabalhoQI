<?php
$a = explode("\\", __DIR__);
$path = "/{$a[1]}/{$a[2]}/{$a[3]}";
$root = "/{$a[3]}";

define("TITLE"      , "Pokédle");
define("DESCRIPTION", "Jogo de adivinhação de pokémon");
define("KEYWORDS"   , "login, senha, cadastro, php, sql, sistema, web");
define("AUTHOR"     , "João, Luciano, Fábio e Jess");

define("ROOT"       , $root);
define("PATH"       , $path);

define("ASSETS"     , ROOT."/assets");
define("MODEL"      , PATH."/src/model");
define("VIEW"       , ROOT."/src/view");
define("CONTROLLER" , PATH."/src/controller");
define("FOOTER"     , PATH."/src/controller/footer.php");

//Banco de dados
define("MYSQL_SERVER"   , "localhost");
define("MYSQL_PORT"     , 3306);
define("MYSQL_DATABASE" , "access_control");
define("MYSQL_CHARSET"  , "utf8");
define("MYSQL_USER"     , "root");
define("MYSQL_PASS"     , "");