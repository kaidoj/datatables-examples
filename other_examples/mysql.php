<?php
// add composer autoload.
require '../vendor/autoload.php';

use Ozdemir\Datatables\Datatables;
use Ozdemir\Datatables\DB\MySQL;

// set your database config.
$config = ['host'     => 'localhost',
           'port'     => '3306',
           'username' => 'homestead',
           'password' => 'secret',
           'database' => 'sakila'];

// load your library
$dt = new Datatables(new MySQL($config));
// set sql query
$dt->query("Select film_id, title, description from film ;");
// run it.
echo $dt->generate();

// it is super easy.