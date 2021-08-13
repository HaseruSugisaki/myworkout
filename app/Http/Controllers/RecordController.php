<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Record;
use App\Aerobic;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
{
    // public function index() {
    //     $day = Carbon::today();
    //     $day2 = Carbon::today();
    //     $records = Record::get();
    //     $aerobics = Aerobic::get();
    //     return view('record/index', compact('records', 'aerobics', 'day', 'day2'));
    // }
    
    public function create($id) {
        $user_id = Auth::id();
        $menu = Menu::find($id);
        return view('record/create', compact('menu'));
    }
    
    public function aerobic($id) {
        $user_id = Auth::id();
        $menu = Menu::find($id);
        return view('record/aerobic', compact('menu'));
    }
    
    public function store(Request $request) {
        $name = $request->name;
        $part = $request->part;
        $trained_at = $request->trained_at;
        $weight = $request->weight;
        $counts = $request->counts;
        $set = $request->set;
        $memo = $request->memo;
        $request->validate([
	       'trained_at' => 'required',
	       'weight' => 'required|numeric',
	       'counts' => 'required|numeric',
	       'set' => 'required|numeric',
	       'memo' => 'nullable',
        ],
        [
            'trained_at.required' => '日時を選択してください',
            'weight.required' => '重さを入力してください',
            'weight.numeric' => '重さに文字は入力できません',
            'counts.required' => '回数を入力してください',
            'counts.numeric' => '回数に文字は入力できません',
            'set.required' => 'セット数を入力してください',
            'set.numeric' => 'セット数に文字は入力できません',
            
        ]
        );
        $user_id = Auth::id();
        $record_table = new Record();
        $record_table->user_id = $user_id;
        $record_table->name = $name;
        $record_table->part = $part;
        $record_table->trained_at = $trained_at;
        $record_table->weight = $weight;
        $record_table->counts = $counts;
        $record_table->set = $set;
        $record_table->memo = $memo;
        $record_table->save();
        return redirect('/records/search');
    }
    
    public function aero(Request $request) {
        $name = $request->name;
        $part = $request->part;
        $trained_at = $request->trained_at;
        $times = $request->times;
        $set = $request->set;
        $memo = $request->memo;
        $request->validate([
	       'trained_at' => 'required',
	       'times' => 'required|numeric',
	       'set' => 'required|numeric',
	       'memo' => 'nullable',
        ],
        [
            'trained_at.required' => '日時を選択してください',
            'times.required' => '時間を入力してください',
            'times.numeric' => '時間に文字は入力できません',
            'set.required' => 'セット数を入力してください',
            'set.numeric' => 'セット数に文字は入力できません',
            
        ]
        );
        $user_id = Auth::id();
        $aerobic_table = new Aerobic();
        $aerobic_table->user_id = $user_id;
        $aerobic_table->name = $name;
        $aerobic_table->part = $part;
        $aerobic_table->trained_at = $trained_at;
        $aerobic_table->times = $times;
        $aerobic_table->set = $set;
        $aerobic_table->memo = $memo;
        $aerobic_table->save();
        return redirect('/records');
    }
    
    public function search(Request $request) {
        $day = $request->day;
        $day2 = $request->day2;
        $part = $request->part;
        $menus = Menu::get();
        $user_id = Auth::id();
        $recordQuery = Record::select('*');
        $aerobicQuery = Aerobic::select('*');
        
        // 開始日と終了日の指定がなかった場合
        if ($day == null && $day2 == null) {
            $day = Carbon::today();
        }

        // 開始日が入力されていた場合
        if ($day != null) {
            $recordQuery->where('trained_at', '>=', $day)->where('user_id', '=', $user_id);
            $aerobicQuery->where('trained_at', '>=', $day)->where('user_id', '=', $user_id);
        }

        // 終了日が入力されていた場合
        if ($day2 != null) {
            $day2_search = Carbon::parse($day2)->addDay();
            $recordQuery->where('trained_at', '<', $day2_search)->where('user_id', '=', $user_id);
            $aerobicQuery->where('trained_at', '<', $day2_search)->where('user_id', '=', $user_id);
        }
        // 部位が検索条件にある場合
        // if ($part != '全部') {
        //     $recordQuery->where('part', '=', $part);
        //     $aerobicQuery->where('part', '=', $part);
        // }

        $records = $recordQuery->get();
        $aerobics = $aerobicQuery->get();
        
        return view('/record/index',compact('records', 'aerobics', 'menus', 'day', 'day2'));
        
    }
    
    public function part(Request $request) {
        $part = $request->part;
        $records = Record::select(DB::raw("DATE_FORMAT(trained_at, '%Y-%m-%d') as day"))
                    ->where('part', '=', $part)
                    ->groupBy('day')
                    ->get();
        return view('record/part', compact('records', 'part'));
    }
    
    public function event(Request $request) {
        $name = $request->name;
        $menus = Menu::get();
        $records = Record::select(DB::raw("DATE_FORMAT(trained_at, '%Y-%m-%d') as day"))
                    ->where('name', '=', $name)
                    ->groupBy('day')
                    ->get();
        return view('record/event', compact('menus', 'name', 'records'));
    }
}
