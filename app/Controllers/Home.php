<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function abrirFone(): string
    {
        return view('card_fone');
    }
    public function abrirProfile(): string
    {
        return view('card_profile');
    }
}
