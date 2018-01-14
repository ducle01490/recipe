<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

use App\Recipe;

class RecipeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::where('status', 1)->orderBy('updated_at', 'DESC')->paginate(10);

        return view('recipes.index', compact('recipes'));
    }

    public function detail(Request $request, $recipe_id)
    {
        if (!(strpos($recipe_id, '-') !== FALSE)) {
            //not found
            return Redirect::back();
        }

        $arrId = explode('-',$recipe_id);
        $recipe_id = $arrId[count($arrId) - 1];

        $recipe = Recipe::where('id', $recipe_id)->where('status', 1)->get()->first();
        if (is_null($recipe)) {
            abort(404);
        }

        $siteTitle = $recipe->title;
        $siteDescription = 'Click để xem các món ăn hấp dẫn!';
        $siteImage = $recipe->thumb;

        return view('recipes.detail', compact('recipe', 'siteTitle', 'siteDescription', 'siteImage'));
    }
}
