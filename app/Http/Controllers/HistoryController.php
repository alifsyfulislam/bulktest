<?php

namespace Bulkly\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HistoryController extends Controller
{
//    public function index(){
//        return view('my-history')->with('title', "History");
//    }

	public function Show(){
		$posts = DB::table('social_posts')
		        ->join('social_post_groups','social_posts.group_id','social_post_groups.id')
		        ->select('social_posts.*','social_post_groups.name')
		        ->orderBy('id', 'desc')
                ->get();


     return view('show')->with('posts', $posts);
   
   }


  }
   

