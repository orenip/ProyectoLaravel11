<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "pagina de inicio";
});

Route::get('/posts', function () {
    return "aqui se mostraran todos los posts";
});
// EL ORDEN ES IMPORTANTE SI HAY UNA VARIABLE DEBE ESTAR DEBAJO SINO NO EJECUTA ESTA LINEA
Route::get('/posts/create', function () {
    return "aqui se mostrara un formulario para crear un nuevo post";
});
// {contenido variable} debemos indicar misma variable a la funcion
Route::get('/posts/{post}', function ($post) {
    return "aqui se mostrara el un nuevo post {$post}";
});

//Añadir mas contenido variable
// Route::get('/posts/{post}/{category}', function ($post, $category) {
//     return "aqui se mostrara el un nuevo post {$post} de la categoria {$category}";
// });
//Si le ponemos ? indicamos que es opcional, sustituiria a ambas de arriba
// Route::get('/posts/{post}/{category?}', function ($post, $category=null) {
//     if($category){
//         return "aqui se mostrara el un nuevo post {$post} de la categoria {$category}";
//     }   
//     return "aqui se mostrara el un nuevo post {$post} sin categoria";
// });