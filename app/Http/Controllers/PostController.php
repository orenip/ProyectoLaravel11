<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "aqui se mostraran todos los posts";
    }

    public function create()
    {
        return "aqui se mostrara un formulario para crear un nuevo post";
    }
    public function show()
    {
        return "aqui se mostrara el un nuevo post";
    }
}
