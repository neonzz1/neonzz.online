<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Models\Project;



class ProjectController extends Controller
{
    //

    public function welcome() {
        return view('welcome');
    }

    public function Wormy() {
        return view('Wormy');
    }

    public function Pong() {
        return view('Pong');
    }
    
    public function Python($Project) {
        return view('404');
    }

    public function BuildingEscape() {
        return view('BuildingEscape');
    }

    public function BattleTank() {
        return view('Battle-Tank');
    }

    public function UE4($Project) {
        return view('404');
    }
}
