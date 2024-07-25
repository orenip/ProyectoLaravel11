<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//CREADO con php artisan make:controller HomeController
class HomeController extends Controller
{
    //si solo tenemos un metodo se puede dar el nombre __invoke
    public function __invoke()
    {
        return "Bienvenido a la pagina principal";
    }
}
