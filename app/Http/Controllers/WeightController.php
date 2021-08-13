<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Weight;
use App\User;
use Illuminate\Support\Facades\Auth;

class WeightController extends Controller
{
    public function index() {
        return view('weight/index');
    }
    
    public function store(Request $request) {
        $day = $request->day;
        $weight = $request->weight;
        $fatpercentage = $request->fatpercentage;
        $fatmass = $request->fatmass;
        $musclemass = $request->musclemass;
        $leanbodymass = $request->leanbodymass;
        $bmi = $request->bmi;
        $west = $request->west;
        $request->validate([
	       'day' => 'required',
	       'weight' => 'numeric',
	       'fatpercentage' => 'numeric',
	       'fatmass' => 'numeric',
	       'musclemass' => 'numeric',
	       'leanbodymass' => 'numeric',
	       'bmi' => 'numeric',
	       'west' => 'numeric',
        ],
        [
            'day.required' => '日時を選択してください',
            'weight.numeric' => '体重に文字は入力できません',
            'fatpercentage.numeric' => '体脂肪率に文字は入力できません',
            'fatmass' => '体脂肪量に文字は入力できません',
            'musclemass.numeric' => '筋肉量に文字は入力できません',
            'leanbodymass.numeric' => '除脂肪体重に文字は入力できません',
            'bmi.numeric' => 'BMIに文字は入力できません',
            'west.numeric' => 'ウエストに文字は入力できません',
        ]
        );
        $user_id = Auth::id();
        $weight_table = new Weight();
        $weight_table->user_id = $user_id;
        $weight_table->day = $day;
        $weight_table->weight = $weight;
        $weight_table->fatpercentage = $fatpercentage;
        $weight_table->fatmass = $fatmass;
        $weight_table->musclemass = $musclemass;
        $weight_table->leanbodymass = $leanbodymass;
        $weight_table->bmi = $bmi;
        $weight_table->west = $west;
        $weight_table->save();
        return redirect('weights');
    }
    
    public function record(Request $request) {
        $user_id = Auth::id();
        $weights = Weight::latest()
                    ->where('user_id', '=', $user_id)
                    ->get();
        return view('weight/record', compact('weights'));
    }
}
