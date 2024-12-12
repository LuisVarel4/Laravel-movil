<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

$string =  "- LUIS ALEJANDRO VARELA OJEDA CC 1017280316

- MONICA SOFIA RESTREPO LEÓN CC 1000181289";

Route::get('/holamundo', function () use ($string) {
    // Usamos la etiqueta <pre> para preservar los saltos de línea y el formato
    return "
        <html>
            <body>
                <h2>Estudiantes</h2>
                <pre>$string</pre>
            </body>
        </html>
    ";
});

//Ir a postman registrar un usuario y luego loguearse
//Luego copiar el token, ir a autorizaciones, escoger Bearer Token, pegar el token y hacer la solicitud deseada
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/products/{id}', [ProductController::class, 'show']);
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
});
Route::get('/products', [ProductController::class, 'index']); // Esta ruta es la unica que funciona sin loguearse, se creo un seeder con 3 productos para probarlo

Route::post('/signup', [AuthController::class, 'register']);
Route::post('/signin', [AuthController::class, 'login']);

