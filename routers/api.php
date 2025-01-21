<?php

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\QuizController;
use App\Http\Controllers\WEB\HomeController;
use Src\Router;

$router = new Router();

Router::get('/api/users/{id}', [UserController::class, 'show'],'auth:api');
Router::post('/api/register',[UserController::class, 'store']);
Router::post('/api/login',[UserController::class, 'login']);
Router::post('/api/quizzes',[QuizController::class, 'store']);
Router::post('/api/logout',[UserController::class, 'logout']);
Router::get('/dashboard', [HomeController::class,  'dashboard']);

Router::notFound();