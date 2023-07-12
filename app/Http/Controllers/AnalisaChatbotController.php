<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnalisaChatbotController extends Controller
{
    public function index()
    {
        return view('pages/chatbot/analisa-chatbot');
    }
    public function chat(Request $request)
{
    
}

public function getItemsData(){
    
}


}