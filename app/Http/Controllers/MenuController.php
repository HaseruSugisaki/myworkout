<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    public function index() {
        $menu = Menu::get();
        return view('menu/index', compact('menu'));
    }
    public function edit() {
        $menu = Menu::get();
        return view('menu/create', compact('menu'));
    }
    
    public function store(Request $request) {
        $part = $request->part;
        $name = $request->name;
        $request->validate([
	       'name' => 'required|unique:menus',
        ],
        [
            'name.required' => '種目名を登録してください',
            'name.unique' => 'この種目は登録済みです'
        ]);
        $menu_table = new Menu();
        $menu_table->part = $part;
        $menu_table->name = $name;
        $menu_table->save();
        return redirect('/menus');
    }
    
    public function delete($id) {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect('/menus');
    }
    
}
