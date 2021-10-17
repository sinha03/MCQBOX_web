<?php

namespace App\Http\Controllers\Api\Physics1;

use Illuminate\Http\Request;

use Validator,Input,Redirect;
use App\Http\Controllers\Api\Auth\APIBaseController as APIBaseController;
use DB;

class Chapter1Controller extends APIBaseController{
     public function all_course1($id){

         $user=DB::select('select * from course_list where id = :id', ['id' => $id]);

          

          return view('quiz1.introduction', ['user' => $user]);
          

          }  
     
      
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $post = Chapter1Model::find($id>"2");
       //$post = Chapter1Model::whereBetween('phychapter1', ['2', '3'])->get();
        //$post= DB::select("SELECT * FROM phychapter1");
        $post = DB::table('phychapter1')
                    ->whereBetween('id', [1, 100])->get();
        if (is_null($post)) {
            return $this->sendError('Post not found');
        }      
        return $this->sendResponse($post->toArray(), ' retrieved successfully.');
    }
     public function chapter1(Request $data)
    {
       
        $post = DB::table('phy1modeltest')
                    ->get();
   /*  $postss = DB::table('phy1modeltest')
                     ->where('model_phy1','2')->get();
        if (is_null($postss)) {
            return $this->sendError('Post not found');
        } */
        if (is_null($post)) {
            return $this->sendError('Post not found');
        }      
        return $this->sendResponse($post->toArray(),' retrieved successfully.');
    }
public function chapter2(Request $data)
    {
        $postss = DB::table('phy1modeltest')
                     ->where('model_phy1','2')->get();
        if (is_null($postss)) {
            return $this->sendError('Post not found');
        }      
        return $this->sendResponse($postss->toArray(), ' retrieved successfully.');
    }
    public function chapter3($id,$third_id,$second_id)
    {
      
        $posts = DB::table('phychapter1')
                    ->whereBetween('id', [3, 100])->get();
        if (is_null($posts)) {
            return $this->sendError('Post not found');
        }      
        return $this->sendResponse($posts->toArray(), ' retrieved successfully.');
    }


   
          
}
