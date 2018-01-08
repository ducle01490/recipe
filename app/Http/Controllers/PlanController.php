<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Response;

use App\Recipe;
use App\Customer;
use App\Order;
use App\Menu;
use Carbon\Carbon;

class PlanController extends Controller
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
        $dt = Carbon::tomorrow();
        $dtSevent = Carbon::tomorrow()->addDays(7);
        $tomorrow = $dt->format("d/m/Y");


        $tomorowMenu = Menu::whereDate('publishDate', $dt)->get()->first();

        $sevenMenus = Menu::whereDate('publishDate', '>', $dt)->whereDate('publishDate', '<', $dtSevent)->get();


        return view('plan.index', compact('tomorrow', 'tomorowMenu', 'sevenMenus'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function two()
    {
        $now = Carbon::today();

        return view('plan.two');
    }

    public function family()
    {
        $now = Carbon::now();

        return view('plan.family');
    }

    public function detail(Request $request, $title)
    {
        if (!(strpos($title, '-') !== FALSE)) {
            //not found
            return Redirect::back();
        }

        $arrId = explode('-',$title);
        $menuId = $arrId[count($arrId) - 1];

        $recipe = Menu::find($menuId);

        return view('plan.detail', compact('recipe'));
    }
}
