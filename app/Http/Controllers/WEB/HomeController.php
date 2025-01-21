<?php

namespace App\Http\Controllers\WEB;

use JetBrains\PhpStorm\NoReturn;

class HomeController
{
    public function home(): void
    {
        view('home');
    }
    public function login(): void
    {
        view('login');
    }
    public function register(): void
    {
        view('register');
    }
    public function about(): void
    {
        view('about');
    }
    #[NoReturn] public function add_quiz(): void
    {
        if ($_SESSION['email'])
        {
            require "public/js/add-quiz.js";
        }
        redirect('/login');
    }
    #[NoReturn] public function create_quiz(): void
    {
        if ($_SESSION['email'])
        {
        view('create-quiz');
        }
        redirect('/login');
    }
    #[NoReturn] public function dashboard(): void
    {
        if ($_SESSION['email'])
        {
            view('dashboard');
        }
        redirect('/login');
    }
    #[NoReturn] public function my_quizzes(): void
    {
        if ($_SESSION['email'])
        {
            view('my-quizzes');
        }
        redirect('/login');
    }
    #[NoReturn] public function statistics(): void
    {
        if ($_SESSION['email'])
        {
            view('statistics');
        }
        redirect('/login');
    }
    #[NoReturn] public function how_it_works(): void
    {
        if ($_SESSION['email'])
        {
            view('how-it-works');
        }
        redirect('/login');
    }
    public function features(): void
    {
        view('home');
    }
}