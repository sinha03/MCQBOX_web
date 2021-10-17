<?php

namespace App\Http\Controllers\Api\Auth;
use DB;
use Validator, Input, Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Auth\APIBaseController as APIBaseController;
use App\Adminmodel;
use App\BiologyModel;
use App\FormulaModel2;
use App\Mathmodel;
use App\insert_course;
use App\insert_item;
use App\insert_question;
use App\insert_chapterName;
use App\Formula;
 use Schema;
use Illuminate\Support\Facades\Auth;

class AdminController extends APIBaseController
{
    protected $redirectPath = 'subject_list';
     protected $redirectPath2 = 'add_mcq';
       protected $redirectPath3 = 'chapterlist';
    protected $redirectPath1 = 'physics1';
   public function showRegistrationForm()
      {
      return view('quiz1.Adminlogin');
     }


  public function login1(Request $request){

         $email=$request->email;

        $password=$request->password;

        $users = DB::table('admin')->where([

            ['email', '=', $email],

            ['password', '=', $password],

                ])->get();
         
          return redirect($this->redirectPath);

        return $this->sendResponse($post->toArray(), 'Post created successfully.');
           

            }

   

     public function course(Request $request)
           
             {
      
           $input = request()->except(['_token']);
          
          
        $validator = Validator::make($input, [

           'course' => 'required|unique:course_list|regex:/^[A-ZÀÂÇÉÈÊËÎÏÔÛÙÜŸÑÆŒa-zàâçéèêëîïôûùüÿñæœ0-9_.,() ]+$/',
           //'image'=> 'required|image|mimes:jpg,jpeg,png,gif',
             
        ]);

        if ($validator->fails()) {
           return redirect('/subject_list')
            ->withInput()
            ->withErrors($validator);
         }     
           
           
            $task = new insert_course;
            $task->course = $request->course;
            $task->save();
 

          //    return redirect('/subject_list');
              return redirect()->action('Api\Auth\AdminController@course');
         }



      public function show_courselist(Request $data)
    {
       
        $post = DB::table('course_list')
                    ->get();
        if (is_null($post)) {
            return $this->sendError('Post not found');
        }      
        return $this->sendResponse($post->toArray(),' retrieved successfully.');
    }
 public function show_questionlist($course)
    {
       
        $post = DB::table('subject_question')->where(['course'=>$course])
                    ->get();
        if (is_null($post)) {
            return $this->sendError('Post not found');
        }      
        return $this->sendResponse($post->toArray(),' retrieved successfully.');
    }

      public function list_subject(Request $request,$id)

             {
          

           $input = request()->except(['_token']);
          $check_action = $request->get('check_action');

           $id = $request->get('id');
        
        $validator = Validator::make($input, [

           'list_subject' => 'required|regex:/^[A-ZÀÂÇÉÈÊËÎÏÔÛÙÜŸÑÆŒa-zàâçéèêëîïôûùüÿñæœ0-9_.,() ]+$/',
          
             
        ]);


        if ($validator->fails()) {
           return redirect('/list_course/{id}')
            ->withInput()
            ->withErrors($validator);
         }     
           
           
            $task = new insert_item;
            $task->id = $request->id;
            $task->check_action = $request->check_action;
            $task->list_subject = $request->list_subject;
            $task->save();
            $list_subject_chapter= DB::table('subject_chapter')->where(['id'=>$id])->get(); 
        
          return redirect()->action(  'Api\Auth\AdminController@list_subject', ['id' => $id]);
    }


  public function course_1(Request $request)
    {
     $list= DB::table('course_list')->get(); 
       return view('adminpanel.add_mcq',['list'=>$list]); 
   }
  
     public function course_list(Request $request)
    {
      
        $post = DB::table('course_list')
                    ->get();
       //  $post= mb_convert_encoding($post, 'UTF-8', 'UTF-8') ;
        if (is_null($post)) {
            return $this->sendError('Post not found');
        }
       
        return $this->sendResponse($post->toArray(),' retrieved successfully.');
    }



 public function list_course(Request $request,$id){
     $id=$request->id;
          $list= DB::table('course_list')
         ->where(['id'=>$id])->get();  
       //  return view('adminpanel.list_course',['list'=>$list]);
           $user= DB::table('subject_chapter')
         ->where(['id'=>$id])->get();  
         return view('adminpanel.list_course',['user'=>$user,'list'=>$list]);
      
          }

public function chapterlist(Request $request,$list_subject,$id){
       $input = request()->except(['_token']);
        $check_question = $request->get('check_question');
           $id = $request->get('id');
           $list_subject = $request->get('list_subject');
        
        $validator = Validator::make($input, [

           'chapter_list' => 'required',
          
             
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $post= DB::table('chapter_list')->insert($input);
        
      return redirect()->action(  'Api\Auth\AdminController@chapterlist', ['list_subject' => $list_subject,'id' => $id]);
}



     public function single_list(Request $request){

   
        $list_id=$request->list_id;
       $user= DB::table('subject_chapter')
            ->join('course_list')
            ->where('subject_chapter.id', '=', 'course_list.id')
            ->get();    
    
        
           return view('adminpanel.single_list',['user'=>$user]);
         }
    
  
    
   
  public function chapter_name(Request $request,$id,$course)
    {
          $input1 = request()->except(['_token']);
           $idd= $request->get('id');
             $coursee = $request->get('course');
           

           if (!Schema::hasTable('chapter_name')) {
            // Code to create table
          Schema::connection('mysql')->create('chapter_name', function($table)
           {
             $table->increments('chap_id');
             $table->integer('id');
             $table->string('course');
              $table->string('chapter');
              $table->string('chapter_name');
            
             $table->timestamps();

          });
         
        };

         $validator = Validator::make($input1, [
              
       //    'chapter' => 'required|/^([0-9\p{Latin}]+[\ \-]?)+[a-zA-Z0-9]+$/',
          'chapter'=>'required', 'confirmed', 'min:30', 'max:200','regex:/^[A-Za-z0-9\p{Bengali}_.,() ]+$/',
            'chapter_name' =>'required', 'confirmed', 'min:30', 'max:200','regex:/^[A-ZÀÂÇÉÈÊËÎÏÔÛÙÜŸÑÆŒa-zàâçéèêëîïôûùüÿñæœ0-9\p{Bengali}_.,() ]+$/',
           

             
        ]);

      /*  if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $post= DB::table('chapter_name')->insert($input1);*/
         if ($validator->fails()) {
           return redirect('/subject_list')
            ->withInput()
            ->withErrors($validator);
         }     
           
           
             $task = new insert_chapterName;
             $task->id = $request->id;
             $task->chapter = $request->chapter;
             $task->chapter_name = $request->chapter_name;
              $task->course = $request->course;
              
            $task->save();

         return redirect()->action('Api\Auth\AdminController@chapter_name', ['id' => $id,'course' => $course]);
     } 

    

  
        public function add_question(Request $request,$id)
    {
              $input1 = request()->except(['_token']);
              $check_question = $request->get('check_question');
             $course = $request->get('course');
             $course_id = $request->get('id');
             $chapter_list = $request->get('chapter_list');

           if (!Schema::hasTable('subject_question')) {
            // Code to create table
          Schema::connection('mysql')->create('subject_question', function($table)
           {
             $table->increments('question_id');
              $table->integer('id');
             $table->string('course');
             $table->integer('check_question');
              $table->string('chapter_list');
              $table->string('question');
             $table->string('option1');
             $table->string('option2');
             $table->string('option3');
             $table->string('option4');
              $table->string('ans');
             $table->timestamps();

          });
       }

         $validator = Validator::make($input1, [
              
           'question' => 'required', 'confirmed', 'min:200', 'max:500','regex:/^[A-Za-z0-9\p{Bengali}_.,() ]+$/',
            'option1' => 'required', 'confirmed', 'min:30', 'max:200','regex:/^[A-Za-z0-9\p{Bengali}_.,() ]+$/',
            'option2' => 'required' ,'confirmed', 'min:30', 'max:200','regex:/^[A-Za-z0-9\p{Bengali}_.,() ]+$/',
            'option3' => 'required', 'confirmed', 'min:30', 'max:200','regex:/^[A-Za-z0-9\p{Bengali}_.,() ]+$/',
             'option4' => 'required' ,'confirmed', 'min:30', 'max:200','regex:/^[A-Za-z0-9\p{Bengali}_.,() ]+$/',
             'ans' => 'required' ,'confirmed', 'min:30', 'max:200','regex:/^[A-Za-z0-9\p{Bengali}_.,() ]+$/',

             
        ]);

       /* if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $post= DB::table('subject_question')->insert($input1);*/
         if ($validator->fails()) {
           return redirect('/showlist')
            ->withInput()
            ->withErrors($validator);
         }     
           
           
            $task = new insert_question;
             $task->id = $request->id;
             $task->course = $request->course;
             $task->chapter_list = $request->chapter_list;
             $task->check_question = $request->check_question;
            $task->question = $request->question;
            $task->option1 = $request->option1;
            $task->option2 = $request->option2;
            $task->option3 = $request->option3;
            $task->option4 = $request->option4;
            $task->ans = $request->ans;
            $task->save();

           
           //  return redirect('subject_list');
        // return redirect()->action( 'Api\Auth\AdminController@add_question', ['id' => $course_id]);
            return redirect()->back();
    }

      public function add_formula(Request $request,$id)
         {
       // $input = $request->all();
           $input = request()->except(['_token']);
           $all_formula = $request->get('id');

           if (!Schema::hasTable('formula')) {
            // Code to create table
          Schema::connection('mysql')->create('formula', function($table)
           {
             $table->increments('all_id');
           $table->integer('id');
              $table->string('formula');
             $table->timestamps();

          });
      }
      
      

        $validator = Validator::make($input, [
              
           
            'formula' => 'required', 'confirmed', 'min:100', 'max:500','regex:/^[A-Za-z0-9\p{Bengali}_.,() ]+$/',
            
             
        ]);
          

       if ($validator->fails()) {
           return redirect('/add_formula')
            ->withInput()
            ->withErrors($validator);
         }     
           
           
            $task = new Formula;
             $task->id = $request->id;
             $task->formula = $request->formula;
              $task->save();

     return redirect()->action('Api\Auth\AdminController@add_formula', ['id' => $all_formula]);     

          }
         public function formula(Request $request){

     $post = DB::table('formula')
                    ->get();
        if (is_null($post)) {
            return $this->sendError('Post not found');
        }      
        return $this->sendResponse($post->toArray(),' retrieved successfully.');

         }


/*public function chapter_name(Request $request,$id,$course){
       $input = request()->except(['_token']);
        $check_question = $request->get('check_question');
           $id = $request->get('id');
           $list_subject = $request->get('list_subject');
        
        $validator = Validator::make($input, [

           'chapter_list' => 'required',
          
             
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $post= DB::table('chapter_list')->insert($input);
        
 return redirect()->action(
    'Api\Auth\AdminController@chapterlist', ['list_subject' => $list_subject,'id' => $id]);
}*/

  public function chaptername($id)
    {
      
        $post = DB::table('chapter_name')->where(['id'=>$id])
                    ->get();
        if (is_null($post)) {
            return $this->sendError('Post not found');
        }      
        return $this->sendResponse($post->toArray(),' retrieved successfully.');
    } 

      public function modeltest(Request $request)
    {
      
        $post = DB::table('phy1modeltest')
                    ->get();
        if (is_null($post)) {
            return $this->sendError('Post not found');
        }      
        return $this->sendResponse($post->toArray(),' retrieved successfully.');
    } 

          public function show_model1(Request $request)
    {
       
        $post = DB::table('Modeltest_list')
                    ->get();
        if (is_null($post)) {
            return $this->sendError('Post not found');
        }      
        return $this->sendResponse($post->toArray(),' retrieved successfully.');
    }
     public function phy1shortcut(Request $request)
    {
       
        $post = DB::table('phy1shortcut')
                    ->get();
        if (is_null($post)) {
            return $this->sendError('Post not found');
        }      
        return $this->sendResponse($post->toArray(),' retrieved successfully.');
    }

}
