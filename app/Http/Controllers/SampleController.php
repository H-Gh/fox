<?php

namespace App\Http\Controllers;

use Fox\Controller\Controller;

/**
 * The sample Http controller
 * PHP version >= 7.0
 *
 * @category Controllers
 * @package  Fox
 */
class SampleController extends Controller
{
    /**
     * Render a web page
     *
     * @return void
     */
    public function index()
    {
        $this->render("sample/index");
    }
}
