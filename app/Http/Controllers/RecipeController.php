<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use App\Recipe;
use App\Compilation;
use App\Libs\Paginator;

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
    public function index(Request $request)
    {
        $compilation = DB::table('compilations')->where('status', 1)->select('id', 'title', 'thumb', 'video', 'status', DB::raw("'compilation' as type"), 'updated_at');

        $recipe = DB::table('recipes')->where('status', 1)->whereNull('compilationId')->select('id', 'title', 'thumb', 'video', 'status', DB::raw("'recipe' as type"), 'updated_at')->union($compilation);;

        $page = $request->get('page')?:1;
        $paginator = new Paginator();

        $recipes = $paginator->setQuery($recipe)->setCurrentPage($page)->setPerPage(15)->getData();


        return view('recipes.index', compact('recipes', 'paginator'));
    }

    public function recipe(Request $request, $recipe_id)
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


    public function compilation(Request $request, $compilation_id)
    {
        if (!(strpos($compilation_id, '-') !== FALSE)) {
            //not found
            return Redirect::back();
        }

        $arrId = explode('-',$compilation_id);
        $compilation_id = $arrId[count($arrId) - 1];

        $compilation = Compilation::where('id', $compilation_id)->where('status', 1)->get()->first();
        if (is_null($compilation)) {
            abort(404);
        }

        $recipes = Recipe::where('compilationId', $compilation_id)->where('status', 1)->get();

        $siteTitle = $compilation->title;
        $siteDescription = 'Click để xem các món ăn hấp dẫn!';
        $siteImage = $compilation->thumb;

        return view('compilations.detail', compact('compilation', 'recipes', 'siteTitle', 'siteDescription', 'siteImage'));
    }
}
