<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class ChatController extends Controller
{
    public function index()
    {
        return Inertia::render('Chat/Chat');
    }
}
