<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Weight;

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
        $record_table = new Weight();
        $record_table->day = $day;
        $record_table->weight = $weight;
        $record_table->fatpercentage = $fatpercentage;
        $record_table->fatmass = $fatmass;
        $record_table->musclemass = $musclemass;
        $record_table->leanbodymass = $leanbodymass;
        $record_table->bmi = $bmi;
        $record_table->west = $west;
        $record_table->save();
        return redirect('weights');
    }
    
    public function record(Request $request) {
        $weights = Weight::latest()->get();
        return view('weight/record', compact('weights'));
    }
}
