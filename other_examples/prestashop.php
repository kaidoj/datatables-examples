<?php

use Ozdemir\Datatables\Datatables;
use Ozdemir\Datatables\DB\PSAdapter;

/**
 * Example for Prestashop FrontController
 */
class ModuleNameControllerNameModuleFrontController extends ModuleFrontController
{
    public function displayAjaxDatatableResults()
    {
        $dt = new Datatables(new PSAdapter([]));
        $dt->query('SELECT * FROM ' . _DB_PREFIX_ . '_table');

        return $dt->generate();
    }
}