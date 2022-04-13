<?php

namespace App\Http\Controllers;

use App\Models\odel;
use Illuminate\Http\Request;
use DB;
use Auth;

class MenuController extends Controller
{
    /**
     * Menu landing.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all food menu
        $food_menu = DB::table('menu')->get();

        // get active user ID
        $user = Auth::user()->id;

        // get items in tray of current user
        $tray = DB::table('tray')->where('user_id', $user)->get();

        // get total in tray of current user
        $total = DB::table('tray')->where('user_id', $user)->sum('price');

        // return in view
        return view('menu')->with(['food_menu' => $food_menu, 'tray'=>$tray, 'total' => $total ]);
    }

    /**
     * Add food to tray.
     *
     * @return \Illuminate\Http\Response
     */
    public function addToTray($id, $price)
    {

        // get active user ID
        $user = Auth::user()->id;
        
        // form array for insertion
        $menu=array( 'user_id'=>$user, 'food_id'=>$id, 'price'=>$price);

        // insert data into tray table
        $food_menu = DB::table('tray')->insert($menu);

        // get all food menu
        $food_menu = DB::table('menu')->get();

        // get items in tray of current user
        $tray = DB::table('tray')->where('user_id', $user)->get();

        // get total in tray of current user
        $total = DB::table('tray')->where('user_id', $user)->sum('price');

        // return in view
        return view('menu')->with(['food_menu' => $food_menu, 'tray'=>$tray, 'total' => $total ]);
    }

    /**
     * Complete purchase.
     *
     * @return \Illuminate\Http\Response
     */
    public function completePurchase()
    {

        // get active user ID
        $user = Auth::user()->id;
        
        // delete data in tray table
        DB::table('tray')->where('user_id', $user)->delete();

        // return in view
        return view('success');
    }

}
