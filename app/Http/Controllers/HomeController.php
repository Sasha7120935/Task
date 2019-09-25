<?php

namespace App\Http\Controllers;
use App\Ingredient;
use App\Recipe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $recipes = Recipe::all();
        $ingredients = Ingredient::all();

        return view('home',
            [
                'ingredient'=> $ingredients,
                'recipe'=> $recipes
            ]


        );
    }
}
