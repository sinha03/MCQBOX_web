<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator, Input, Redirect;
 use Schema;
use Illuminate\Support\Facades\Auth;
use App\BiologyModel;
use App\insert_item;
use App\PhysicsModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
     public function subject_list()
    {
        return view('adminpanel.subject_list');
    }
    public function physics1()
    {
        return view('courses.physics1');
    }
     public function physics2()
    {
        return view('courses.physics2');
    }
     public function course_1(Request $request)
    {
     $list= DB::table('course_list')->get(); 
       return view('adminpanel.add_mcq',['list'=>$list]); 
   }


   public function course_2(Request $request)
    {
     $list= DB::table('course_list')->get(); 
     $list2= DB::table('course_list')->get(); 
     $list3= DB::table('course_list')->get(); 
     $list4= DB::table('course_list')->get(); 
       return view('adminpanel.subject_list',['list'=>$list,'list2'=>$list2,'list3'=>$list3,'list4'=>$list4]); 
   }

    public function show_chapter_list(Request $request,$id)

    {

      $check=$request->id;
      if($check==$id){
     $list2= DB::table('chapter_name') ->where(['id'=>$check])->get(); 
      }

       return view('adminpanel.show_chapter_list',['list2'=>$list2]); 
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

           public function showlist(Request $request)
    { 
       $id=$request->id;
      $list= DB::table('course_list')->where(['id'=>$id])->get(); 
        $list1= DB::table('chapter_list')->get(); 
       return view('adminpanel.showlist',['list'=>$list,'list1'=>$list1]);
         
      //  return view('adminpanel.showlist');
    }

    public function chapter_based(Request $request,$list_subject,$id,$check_action){
      /* $id=$request->id;
       $match1=DB::table('subject_chapter')
         ->where(['id'=>$id])->get();     
      $match2=DB::table('course_list')
         ->where(['id'=>$id])->get();  
         if($match1==$match2){
           $user= DB::table('subject_chapter')->get();
           return view('adminpanel.showlist',['user'=>$user]);
         }

         else{
            return view('courses.physics2');
         }*/
          $check_action=$request->check_action;
         $list_subject1=$request->list_subject;
         $check_id=$request->id;

        
              if($list_subject==$list_subject1)
            {
               if($check_id==$id) {
                 if($check_action=='1')
                 {
                $list= DB::table('course_list')
               ->where(['id'=>$id])->get();  
                
                $list1= DB::table('chapter_list')->get(); 
              return view('adminpanel.showlist',['list'=>$list,'list1'=>$list1]);
            }
          }
         }
            /*else  if($list_subject==$list_subject1)
            {
               if($check_id==$id) {
                 if($check_action=='2')
                 {
                $list= DB::table('course_list')
               ->where(['id'=>$id])->get();  
                
                $list1= DB::table('chapter_list')->get(); 
              return view('adminpanel.showlist',['list'=>$list,'list1'=>$list1]);
            }

          }
       }*/
           /*else  if($list_subject=='ADD SINGLE SUBJECT MODEL TEST')
            {
               if($check_id==$id) {
                $list= DB::table('course_list')
               ->where(['id'=>$id])->get();  
                
                $list1= DB::table('chapter_list')->get(); 
              return view('adminpanel.showlist',['list'=>$list,'list1'=>$list1]);
            }
            }
           else if($list_subject=='ADD MIXED CHAPTER MODEL TEST')
            {
               if($check_id==$id) {
                $list= DB::table('course_list')
               ->where(['id'=>$id])->get();  
                
                $list1= DB::table('chapter_list')->get(); 
              return view('adminpanel.showlist',['list'=>$list,'list1'=>$list1]);
            }
            }
             else if($list_subject=='ADD FORMULAS')
            {
               if($check_id==$id) {
                $list= DB::table('course_list')
               ->where(['id'=>$id])->get();  
                
                $list1= DB::table('chapter_list')->get(); 
              return view('adminpanel.showlist',['list'=>$list,'list1'=>$list1]);
            }
            }*/
           
             if($list_subject==$list_subject1)
              {
               if($check_id==$id) {
                 if($check_action=='2')
                 {
                $list= DB::table('subject_chapter')
               ->where(['id'=>$id])->get(); 
               $user11 = DB::table('chapter_list')->get(); 
              return view('adminpanel.chapterlist',['list'=>$list,'user11'=>$user11]);
            }
          }
        }
      }
            /* else if($list_subject=='SHOW CHAPTER BASED MODEL TEST')
            {
              if($check_id==$id) {
                $list= DB::table('subject_chapter')
               ->where(['id'=>$id])->get(); 
               $user11 = DB::table('chapter_list')->get(); 
              return view('adminpanel.chapterlist',['list'=>$list,'user11'=>$user11]);
            }
          }
             else if($list_subject=='SHOW SINGLE SUBJECT MODEL TEST')
            {
              if($check_id==$id) {
                $list= DB::table('subject_chapter')
               ->where(['id'=>$id])->get(); 
               $user11 = DB::table('chapter_list')->get(); 
              return view('adminpanel.chapterlist',['list'=>$list,'user11'=>$user11]);
            }
         }
          else if($list_subject=='SHOW MIXED SUBJECT MODEL TEST')
            {
              if($check_id==$id) {
                $list= DB::table('subject_chapter')
               ->where(['id'=>$id])->get(); 
               $user11 = DB::table('chapter_list')->get(); 
              return view('adminpanel.chapterlist',['list'=>$list,'user11'=>$user11]);
            }
         }
          else if($list_subject=='SHOW FORMULAS')
            {
              if($check_id==$id) {
                $list= DB::table('subject_chapter')
               ->where(['id'=>$id])->get(); 
               $user11 = DB::table('chapter_list')->get(); 
              return view('adminpanel.chapterlist',['list'=>$list,'user11'=>$user11]);
            }
         }*/
    


  public function show_course_data(Request $request,$chapter_id){

           $check_id=$request->chapter_id;
           /*  $show= DB::table('all_subject_question')
            ->leftJoin('chapter_list','all_subject_question.check_question', '=', 'chapter_list.id')
            ->get(); */
            if($check_id==$chapter_id){

              
              $user11=DB::table('subject_question') ->where(['check_question'=>$check_id])->paginate(5,['*'],'user11');

               return view('adminpanel.single_list', ['user11' => $user11]);
            }

          }

             public function delete_course($id,$course){

            DB::table('course_list')->where(['id'=>$id])->delete();      

          return redirect('add_mcq');
          }

          public function edit_course($id,$course){

         $user=DB::select('select * from course_list where id = :id', ['id' => $id]);

          return view('adminpanel.add',['user'=>$user]);
      }

       public function update_course(Request $data,$course){

                $id=$data->id;
                $model= BiologyModel::find($id);
              $model->course=$data->course;
              // $model->image=$data->image;
               $model->save();
              return redirect('/subject_list');


         }

          public function delete_chapterlist($list_id,$list_subject){
        // $list_subject_chapter= DB::table('subject_chapter')->where(['id'=>$id])->get();

            DB::table('subject_chapter')->where(['list_id'=>$list_id])->delete();      

         return redirect()->back();
          }

          public function edit_chapterlist($list_id,$list_subject){

         $user=DB::select('select * from subject_chapter where list_id = :list_id', ['list_id' => $list_id]);

          return view('adminpanel.add1',['user'=>$user]);
      }

       public function update_chapterlist(Request $data,$id){

                 $list_id=$data->list_id;
                 $list_subject=$data->list_subject;
                $user= DB::table('subject_chapter')->where(['list_id'=>$list_id])->update(['list_subject' => $list_subject]);


                if($user){
                 return redirect()->action('HomeController@list_course', ['id' => $id]);
                }
                 /* $model1 = insert_item::findOrFail($list_id);
          //     $model1->list_subject = $data->get('list_subject');
            $model1->fill($data->only('list_subject'));
                  /* $list_id=$data->list_id;
                 $flight = App\Flight::find(list_id);
                   $model1->id=$data->id;
                  $model1->list_subject=$data->list_subject;*/
                /* $model1->save();
                 
                 //  */

         }
           public function delete($question_id,$check_question){

            DB::table('subject_question')->where(['question_id'=>$question_id])->delete();      

          return redirect('single_list');
          }

          public function edit($question_id,$check_question){

           $user1=DB::select('select * from subject_question where question_id = :question_id', ['question_id' => $question_id]);

          return view('adminpanel.update_data',['user1'=>$user1]);
      }

       public function update(Request $data,$check_question){

                $question_id=$data->question_id;
               // $model= PhysicsModel::find($question_id);

                $question=$data->question;
                $option1=$data->option1;
                $option2=$data->option2;
                $option3=$data->option3;
                $option4=$data->option4;
                $ans=$data->ans;
                $user= DB::table('subject_question')->where(['question_id'=>$question_id])->update(['question' => $question,'option1' => $option1,'option2' => $option2,'option3' => $option3,'option4' => $option4,'ans' => $ans]);

                if($user){

             return redirect()->action( 'HomeController@show_course_data', ['check_question' => $check_question]);

                  }
         }


         public function chapter_name1(Request $request,$id,$course)
    {
        $list= DB::table('course_list')->where(['id'=>$id])->get(); 
       return view('adminpanel.chapter_name',['list'=>$list]); 

   }

     public function add_formula1(Request $request,$id)
    {
        $list= DB::table('course_list')->where(['id'=>$id])->get(); 
       return view('adminpanel.Add_formula',['list'=>$list]); 

   }

     public function show_formula1(Request $request,$id)
    {
        $user= DB::table('formula')->where(['id'=>$id])->get(); 
       return view('adminpanel.Show_formula',['user'=>$user]); 

   }

         public function delete_formula($all_id){

            DB::table('formula')->where(['all_id'=>$all_id])->delete();      

          return redirect('single_list');
          }

          public function edit_formula($all_id){

           $user1=DB::select('select * from formula where all_id = :all_id', ['all_id' => $all_id]);

          return view('adminpanel.update_data1',['user1'=>$user1]);
      }

       public function update_formula(Request $data,$id){

                $all_id=$data->all_id;
                $formula=$data->formula;
               
                $user= DB::table('formula')->where(['all_id'=>$all_id])->update(['formula' => $formula]);

                if($user){

             return redirect()->action( 'HomeController@show_formula1', ['id' => $id]);

                  }
         }


         public function delete_chapter($chap_id){

            DB::table('chapter_name')->where(['chap_id'=>$chap_id])->delete();      

          return redirect('single_list');
          }

          public function edit_chapter($chap_id){

           $user1=DB::select('select * from chapter_name where chap_id = :chap_id', ['chap_id' => $chap_id]);

          return view('adminpanel.update_chapter',['user1'=>$user1]);
      }

       public function update_chapter(Request $data,$id,$course){

                $chap_id=$data->chap_id;
                $chapter=$data->chapter;
               $chapter_name=$data->chapter_name;
                $user= DB::table('chapter_name')->where(['chap_id'=>$chap_id])->update(['chapter' => $chapter,'chapter_name'=>$chapter_name]);

                if($user){

             return redirect()->action( 'HomeController@show_chapter_list', ['id' => $id]);

                  }
         }

     

}
