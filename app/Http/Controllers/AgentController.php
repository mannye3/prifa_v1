<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {
        return view('agent.index');
    }




    public function createPoperty()
    {
        return view('agent.create');
    }
}
