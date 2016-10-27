<?php
require '../../vendor/autoload.php';

use Ozdemir\Datatables\Datatables;
use Ozdemir\Datatables\DB\SQLite;

class myClass {

    function ajax()
    {
        $path = realpath(dirname(__FILE__) . '/../../db/Chinook_Sqlite_AutoIncrementPKs.sqlite');
        $dt = new Datatables(new SQLite($path));

        $dt->query("Select TrackId, Name, UnitPrice from Track");

        echo $dt->generate();
    }
}

$my_class = new myClass();
$my_class->ajax();


