<?php 
namespace App\Http\Controllers;
use DB;
class ZbController extends Controller
{	
	public function show()
	{
		$data=DB::table('type')->where('parent_id','!=',0)->get();
		$arr=[];
		foreach ($data as $key => $val) {
			foreach ($val as $k => $v) {
				$arr[$key][$k]=$v;
			}
		}
		$res=[];
		$num=0;
   		while (1) { 
			$a=array_rand($arr);
			if (!in_array($arr[$a],$res)) {
				$res[]=$arr[$a];
				$num++;
			}
			if ($num>8) {
				break;
			}
		}
		return view('l/live_list',['res'=>$res]);
	}
}






 ?>