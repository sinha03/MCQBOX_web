<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Modeltest_model;
use App\Modeltest_model1;
use App\Modeltest_mixed;
use App\Modeltest_phy1;
use App\FormulaModel;
use App\Physics1Model\Phy1chapter1;
use App\Physics1Model\Phy1model1;
use App\Physics2Model\Phy2chapter1;
use App\Physics2Model\phy2Model1;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
 use Schema;
use Validator, Input, Redirect;

class AdminEntry extends Controller{
      protected $redirectPath1 = 'physics1';
 protected $redirectPath2 = 'formulaphy';
  protected $redirectPath3 = 'physics2';

     protected $redirectPath = 'subject_list';
   /*protected $redirectPath4 = 'chapter_phy1';
           public function add_phy1($id){

          $user=DB::select('select * from phychapter1 where id = :id', ['id' => $id]);

          return view('courses.physics1',['user'=>$user]);
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 public function showlist(Request $request)
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
             $table->integer('course_id');  
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
        };

         $validator = Validator::make($input1, [
              
           'question' => 'required',
            'option1' => 'required',
            'option2' => 'required|',
            'option3' => 'required|',
             'option4' => 'required|',
             'ans' => 'required|',

             
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $input_data= DB::table('subject_question')->insert($input1);

         
        /*   if( $physics1=='2'){
             $post= DB::table('Question_chapter'.$physics1)->insert($input1);
              
           }
           elseif( $physics1=='3'){
             
             $post= DB::table('Question_chapter'.$physics1)->insert($input1);
           }
             elseif( $physics1=='4'){
             $post= DB::table('Question_chapter'.$physics1)->insert($input1);
           }
           elseif( $physics1=='5'){
             $post= DB::table('Question_chapter'.$physics1)->insert($input1);
           }*/
           
             return redirect('add_mcq');
    }




   /* public function add_phy(Request $request)
    {
          $input1 = request()->except(['_token']);
           $physics1 = $request->get('physics1');
         //  $input1 =  $request->get('ans');

           if (!Schema::hasTable('phy1chapter'.$physics1)) {
            // Code to create table
          Schema::connection('mysql')->create('phy1chapter'.$physics1, function($table)
           {
             $table->increments('id');
             $table->integer('physics1');
              $table->string('question');
             $table->string('option1');
             $table->string('option2');
             $table->string('option3');
             $table->string('option4');
              $table->string('ans');
             $table->timestamps();

          });
        };

         $validator = Validator::make($input1, [
              
           'question' => 'required',
            'option1' => 'required',
            'option2' => 'required|',
            'option3' => 'required|',
             'option4' => 'required|',
             'ans' => 'required|',

             
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $post= DB::table('phy1chapter1')->insert($input1);

         
           if( $physics1=='2'){
             $post= DB::table('phy1chapter'.$physics1)->insert($input1);
              
           }
           elseif( $physics1=='3'){
             
             $post= DB::table('phy1chapter'.$physics1)->insert($input1);
           }
             elseif( $physics1=='4'){
             $post= DB::table('phy1chapter'.$physics1)->insert($input1);
           }
           elseif( $physics1=='5'){
             $post= DB::table('phy1chapter'.$physics1)->insert($input1);
           }
           elseif( $physics1=='6'){
             $post= DB::table('phy1chapter'.$physics1)->insert($input1);
           }
           elseif( $physics1=='7'){
             $post= DB::table('phy1chapter'.$physics1)->insert($input1);
           }
           elseif( $physics1=='8'){
             $post= DB::table('phy1chapter'.$physics1)->insert($input1);
           }
           elseif( $physics1=='9'){
             $post= DB::table('phy1chapter'.$physics1)->insert($input1);
           }
           elseif( $physics1=='10'){
             $post= DB::table('phy1chapter'.$physics1)->insert($input1);
           }
             return redirect($this->redirectPath1);
    }
*/
       
           
	  public function physics1st(Request $data){


          $user11 = DB::table('phy1chapter1')->where('physics1','1')->paginate(10,['*'],'user11');
          $user22 = DB::table('phy1chapter1')->where('physics1','2')->paginate(2,['*'],'user22');
          $user33 = DB::table('phy1chapter1')->where('physics1','3')->paginate(2,['*'],'user33');
          $user44= DB::table('phy1chapter1')->where('physics1','4')->paginate(2,['*'],'user44');
          return view('adminpanel.physics1st',compact('phy1chapter1','phy1chapter1','phy1chapter1','phy1chapter1'/*,'phy1chapter5','phy1chapter6','phy1chapter7','phy1chapter8','phy1chapter9','phy1chapter10'*/), ['user11' => $user11,'user22' => $user22,'user33' => $user33,'user44' => $user44/*,'user5' => $user5,'user6' => $user6,'user7' => $user7,'user8' => $user8,
            'user9' => $user9,'user10' => $user10*/]);
          

          }
    
           public function delete($id,$physics1){

            DB::table('phy1chapter1')->where(['id'=>$id])->delete();      

          return redirect('physics1st');
          }

          public function edit($id,$physics1){

 	       $user1=DB::select('select * from phy1chapter1 where id = :id', ['id' => $id]);

          return view('adminpanel.update_data',['user1'=>$user1]);
      }

       public function update(Request $data,$physics1){

         	      $id=$data->id;
                $model= phy1chapter1::find($id);
              $model->question=$data->question;
        	    $model->option1=$data->option1;
        	    $model->option2=$data->option2;
        	    $model->option3=$data->option3;
        	    $model->option4=$data->option4;
        	    $model->ans=$data->ans;
               $model->save();
              return redirect('physics1st');


         }

         public function show_phy1(Request $data){
  
            $phy1_model1 = DB::table('phy1modeltest')
            ->where('model_phy1','1')
            ->paginate(4,['*'],'phy1_model1');
            
               $phy1_model2 = DB::table('phy1modeltest') ->where('model_phy1','1')->paginate(4,['*'],'phy1_model2');
             
              $phy1_model3 = DB::table('phy1modeltest') ->where('model_phy1','2')->paginate(3,['*'],'phy1_model3');
              $phy1_model4 = DB::table('phy1modeltest') ->where('model_phy1','3')->paginate(3,['*'],'phy1_model4');

         return view('modeltest.show_phy1',['phy1_model1' => $phy1_model1,'phy1_model2' => $phy1_model2,'phy1_model3' => $phy1_model3,'phy1_model4' => $phy1_model4]);
          
          }
            public function delete_phy1model($model_phy1,$id){
            DB::table('phy1modeltest')->where(['id'=>$id])->delete();  

         DB::table('phy1modeltest')->where(['id'=>$id])->delete();
           
          return redirect('show_phy1');


          }

          public function edit_phy1model($model_phy1,$id){
           $phy1_model11=DB::select('select * from phy1modeltest where id = :id', ['id' => $id]);    
           return view('adminpanel.model_phy1update',[ 'phy1_model11' => $phy1_model11]);
      }

       public function update_phy1model(Request $data,$model_phy1){

                 $id=$data->id;

                $model= Phy1model1::find($id);
              $model->question=$data->question;
              $model->option1=$data->option1;
              $model->option2=$data->option2;
              $model->option3=$data->option3;
              $model->option4=$data->option4;
              $model->ans=$data->ans;
              $model->save();

              return redirect('show_phy1');


         }
          public function update_phy1model1(Request $data){

                $id=$data->id;
                $model= Modeltest_model::find($id);

          
              $model->question=$data->question;
              $model->option1=$data->option1;
              $model->option2=$data->option2;
              $model->option3=$data->option3;
              $model->option4=$data->option4;
              $model->ans=$data->ans;


              $model->save();

              return redirect('show_phy1');


         }

           public function show_mixed(){
   //   $mixed_model = ChemistryModel::orderBy(DB::raw('RAND()'))->whereBetween('id', [1, 7])->take(3)->get();
            $mixed_model1=  DB::table('mixed_modeltest')->paginate(2,['*'],'mixed_model1');
    
          return view('modeltest.show_mixed', ['mixed_model1' => $mixed_model1]);
          

          }
            public function delete_mixed($id){

          DB::table('mixed_modeltest')->where(['id'=>$id])->delete();

          return redirect('show_mixed');


          }

          public function edit_mixed($id){

          $phy1_model11=DB::select('select * from mixed_modeltest where id = :id', ['id' => $id]);

          return view('adminpanel.update_mixed',['phy1_model11'=>$phy1_model11]);
      }

       public function update_mixed(Request $data){

                $id=$data->id;
                $model= Modeltest_mixed::find($id);

          
              $model->question=$data->question;
              $model->option1=$data->option1;
              $model->option2=$data->option2;
              $model->option3=$data->option3;
              $model->option4=$data->option4;
              $model->ans=$data->ans;


              $model->save();

              return redirect('show_mixed');


         }
         public function show_phy1single(){

             $single_model1 = DB::table('phy1_singletest')->paginate(2,['*'],'single_model1');
          return view('modeltest.phy1_singletest', ['single_model1' => $single_model1]);
          

          }
            public function delete_phy1single($id){

          DB::table('phy1_singletest')->where(['id'=>$id])->delete();

          return redirect('phy1_singletest');


          }

          public function edit_phy1single($id){

          $phy1_model1=DB::select('select * from phy1_singletest where id = :id', ['id' => $id]);

          return view('adminpanel.single_phy1update',['phy1_model1'=>$phy1_model1]);
      }

       public function update_phy1single(Request $data){

                $id=$data->id;
                $model= Modeltest_phy1::find($id);

          
              $model->question=$data->question;
              $model->option1=$data->option1;
              $model->option2=$data->option2;
              $model->option3=$data->option3;
              $model->option4=$data->option4;
              $model->ans=$data->ans;


              $model->save();

              return redirect('phy1_singletest');


         }

          public function add_phy2(Request $request)
    {
      $input1 = request()->except(['_token']);
           $physics1 = $request->get('physics2');
          $ans=$request->get('ans');

           if (!Schema::hasTable('phy2chapter'.$physics1)) {
            // Code to create table
          Schema::connection('mysql')->create('phy2chapter'.$physics1, function($table)
           {
             $table->increments('id');
             $table->integer('physics2');
              $table->string('question');
             $table->string('option1');
             $table->string('option2');
             $table->string('option3');
             $table->string('option4');
              $table->string('ans');
             $table->timestamps();

          });
        };

         $validator = Validator::make($input1, [
              
           'question' => 'required',
            'option1' => 'required',
            'option2' => 'required|',
            'option3' => 'required|',
             'option4' => 'required|',
             //'ans' => 'required|',

             
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

     $post= DB::table('phy2chapter1')->insert($input1);

            if( $physics1=='1'){
             $post= DB::table('phy2chapter'.$physics1)->insert($input1);

           }
           elseif( $physics1=='2'){
             $post= DB::table('phy2chapter'.$physics1)->insert($input1);
              
           }
           elseif( $physics1=='3'){
             
             $post= DB::table('phy2chapter'.$physics1)->insert($input1);
           }
             elseif( $physics1=='4'){
             $post= DB::table('phy2chapter'.$physics1)->insert($input1);
           }
           elseif( $physics1=='5'){
             $post= DB::table('phy2chapter'.$physics1)->insert($input1);
           }
           elseif( $physics1=='6'){
             $post= DB::table('phy2chapter'.$physics1)->insert($input1);
           }
           elseif( $physics1=='7'){
             $post= DB::table('phy2chapter'.$physics1)->insert($input1);
           }
           elseif( $physics1=='8'){
             $post= DB::table('phy2chapter'.$physics1)->insert($input1);
           }
           elseif( $physics1=='9'){
             $post= DB::table('phy2chapter'.$physics1)->insert($input1);
           }
           elseif( $physics1=='10'){
             $post= DB::table('phy2chapter'.$physics1)->insert($input1);
           }
           return redirect($this->redirectPath3);
    }
          public function formula(Request $request)
         {
       // $input = $request->all();
           $input = request()->except(['_token']);
           $physics1 = $request->get('all_formula');

           if (!Schema::hasTable('formula'.$physics1)) {
            // Code to create table
          Schema::connection('mysql')->create('formula'.$physics1, function($table)
           {
             $table->increments('id');
           $table->integer('all_formula');
              $table->string('formula');
             $table->timestamps();

          });
      }
      
      

        $validator = Validator::make($input, [
              
           
            'formula' => 'required',
            
             
        ]);
          

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $post= DB::table('formula')->insert($input);

        if( $physics1=='1'){
             $post= DB::table('formula'.$physics1)->insert($input);

           }
           elseif( $physics1=='2'){
             $post= DB::table('formula'.$physics1)->insert($input);             
           }
           elseif( $physics1=='3'){
             
             $post= DB::table('formula'.$physics1)->insert($input);
           }
              return redirect($this->redirectPath2);
          

          }

          public function formula_show(){

          $phy1_model1 = DB::table('formula') ->where('all_formula','1')->paginate(6,['*'],'phy1_model1');
        
           return view('adminpanel.showphy',['phy1_model1' => $phy1_model1]); 
          

          }
          
           public function delete_formula($id,$all_formula){

       
            DB::table('formula')->where(['id'=>$id])->delete();

          return redirect('showphy');


          }

          public function edit_formula($id,$all_formula){

          $user1=DB::select('select * from formula where id = :id', ['id' => $id]);
      
          return view('adminpanel.phy2_update',['user1'=>$user1]);
      }

       public function update_formula(Request $data,$all_formula){

                 $id=$data->id;
                  $model= FormulaModel::find($id);
                 $model->formula=$data->formula;
                $model->save();
              
              return redirect('showphy');


         }

         public function physics2nd(){

             $user11 = DB::table('phy2chapter1')->where('physics2','1')->paginate(2,['*'],'user11');
          $user22 = DB::table('phy2chapter1')->where('physics2','2')->paginate(2,['*'],'user22');
          $user33 = DB::table('phy2chapter1')->where('physics2','3')->paginate(2,['*'],'user33');
          $user44= DB::table('phy2chapter1')->where('physics2','4')->paginate(2,['*'],'user44');
      
          return view('adminpanel.physics2nd', ['user11' => $user11,'user22' => $user22,'user33' => $user33,'user44' => $user44]);     

          }

            public function delete_chapter1($id,$physics2){
      
            DB::table('phy2chapter1')->where(['id'=>$id])->delete();
        

          return redirect('physics2nd');
          }

          public function edit_chapter1($id,$physics2){

         $user=DB::select('select * from phy2chapter1 where id = :id', ['id' => $id]);
       
           return view('adminpanel.update_data1',[ 'user1' => $user1]);

         // return view('adminpanel.update_data',['user'=>$user]);
      }

       public function update1(Request $data,$physics2){

                $id=$data->id;
         
                $model= phy2chapter1::find($id);
              $model->question=$data->question;
              $model->option1=$data->option1;
              $model->option2=$data->option2;
              $model->option3=$data->option3;
              $model->option4=$data->option4;
              $model->ans=$data->ans;
               $model->save();
            
              return redirect('physics2nd');


         }
          public function show_phy2(Request $data){

        $phy1_model1 = DB::table('model_phy2chapter1')->where('matching_id','1')->paginate(2,['*'],'phy1_model1');
         

              $phy1_model2 = DB::table('model_phy2chapter1')->where('matching_id','2')->paginate(2,['*'],'phy1_model2');
              $phy1_model3 = DB::table('model_phy2chapter1')->where('matching_id','3')->paginate(3,['*'],'phy1_model3');
              $phy1_model4 = DB::table('model_phy2chapter1')->where('matching_id','4')->paginate(3,['*'],'phy1_model4');
            

         return view('modeltest.show_phy2',['phy1_model1' => $phy1_model1,'phy1_model2' => $phy1_model2,'phy1_model3' => $phy1_model3,'phy1_model4' => $phy1_model4]); 
       }

               public function delete_phy2model($matching_id,$id){
              
           
            DB::table('model_phy2chapter1')->where(['id'=>$id])->delete();
           
          return redirect('show_phy2');


          }

          public function edit_phy2model($matching_id,$id){
             
           $phy1_model11=DB::select('select * from model_phy1chapter1 where id = :id', ['id' => $id]);
           
         
           return view('adminpanel.model_phy2update',[ 'phy1_model11' => $phy1_model11]);
      }

       public function update_phy2model(Request $data,$matching_id){

                 $id=$data->id;
                 
           

                $model= phy2Model1::find($id);
              $model->question=$data->question;
              $model->option1=$data->option1;
              $model->option2=$data->option2;
              $model->option3=$data->option3;
              $model->option4=$data->option4;
              $model->ans=$data->ans;
              $model->save();
           

              return redirect('show_phy2');


         }

          public function show_phy2single(){

             $single_model1 = DB::table('phy2_singletest')->paginate(2,['*'],'single_model1');
          return view('modeltest.phy2_singletest', ['single_model1' => $single_model1]);
          

          }
            public function delete_phy2single($id){

          DB::table('phy2_singletest')->where(['id'=>$id])->delete();

          return redirect('phy2_singletest');


          }

          public function edit_phy2single($id){

          $phy1_model1=DB::select('select * from phy2_singletest where id = :id', ['id' => $id]);

          return view('adminpanel.single_phy2update',['phy1_model1'=>$phy1_model1]);
      }

       public function update_phy2single(Request $data){

                $id=$data->id;
                $model= Modeltest_phy2::find($id);

          
              $model->question=$data->question;
              $model->option1=$data->option1;
              $model->option2=$data->option2;
              $model->option3=$data->option3;
              $model->option4=$data->option4;
              $model->ans=$data->ans;


              $model->save();

              return redirect('phy2_singletest');


         }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function show($id)
    {
        $post = Chapter10Model::find($id);
        if (is_null($post)) {
            return $this->sendError('Post not found.');
        }


        return $this->sendResponse($post->toArray(), 'Post retrieved successfully.');
    }
*/

        public function model_phy1chapter1(Request $request)
    {
     
     
            $input1 = request()->except(['_token']);
           $physics1 = $request->get('model_phy1');
        
          //  $ans = $request->get('ans');
           if (!Schema::hasTable('model_phy1chapter'.$physics1)) {
            // Code to create table
          Schema::connection('mysql')->create('model_phy1chapter'.$physics1, function($table)
           {
             $table->increments('id');
             $table->integer('model_phy1');
              $table->string('question');
             $table->string('option1');
             $table->string('option2');
             $table->string('option3');
             $table->string('option4');
              $table->integer('ans');
             $table->timestamps();

          });
      
      }
        

        
         $validator = Validator::make($input1, [
              
           'question' => 'required',
            'option1' => 'required',
            'option2' => 'required|',
            'option3' => 'required|',
             'option4' => 'required|',
             'ans' => 'required|',

             
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $post= DB::table('phy1modeltest')->insert($input1);

        if( $physics1=='1'){
             $post= DB::table('model_phy1chapter'.$physics1)->insert($input1);

           }
           elseif( $physics1=='2'){
             $post= DB::table('model_phy1chapter'.$physics1)->insert($input1);
              
           }
           elseif( $physics1=='3'){
             
             $post= DB::table('model_phy1chapter'.$physics1)->insert($input1);
           }
             elseif( $physics1=='4'){
             $post= DB::table('model_phy1chapter'.$physics1)->insert($input1);
           }
           elseif( $physics1=='5'){
             $post= DB::table('model_phy1chapter'.$physics1)->insert($input);
           }
           elseif( $physics1=='6'){
             $post= DB::table('model_phy1chapter'.$physics1)->insert($input);
           }
           elseif( $physics1=='7'){
             $post= DB::table('model_phy1chapter'.$physics1)->insert($input);
           }
           elseif( $physics1=='8'){
             $post= DB::table('model_phy1chapter'.$physics1)->insert($input);
           }
           elseif( $physics1=='9'){
             $post= DB::table('model_phy1chapter'.$physics1)->insert($input);
           }
           elseif( $physics1=='10'){
             $post= DB::table('model_phy1chapter'.$physics1)->insert($input);
           }
         return redirect($this->redirectPath4);
          
    }

     public function mixed_test(Request $request)
    {
        $input = $request->all();
        $input = request()->except(['_token']);
          

        $validator = Validator::make($input, [
              
           'question' => 'required',
            'option1' => 'required',
            'option2' => 'required|',
            'option3' => 'required|',
             'option4' => 'required|',
             'ans' => 'required|',
             
        ]);
          

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $post= DB::table('mixed_modeltest')->insert($input);

      
          
        
            return redirect($this->redirectPath);
    }
     public function single_test1(Request $request)
    {
       $input = $request->all();
           $input = request()->except(['_token']);
         
         if (!Schema::hasTable('phy1_singletest')) {
           Schema::connection('mysql')->create('phy1_singletest', function($table)
           {
             $table->increments('id');
              $table->string('question');
             $table->string('option1');
             $table->string('option2');
             $table->string('option3');
             $table->string('option4');
              $table->integer('ans');
             $table->timestamps();

          });
         }

        $validator = Validator::make($input, [
              
           'question' => 'required',
            'option1' => 'required',
            'option2' => 'required|',
            'option3' => 'required|',
             'option4' => 'required|',
             'ans' => 'required|',
             
        ]);
          

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $post= DB::table('phy1_singletest')->insert($input);

        
            return redirect($this->redirectPath);
    }
  /*public function show_mixed(){

      $mixed_model1 = ChemistryModel::orderBy(DB::raw('RAND()'))->whereBetween('id', [1, 7])->take(3)->get();
           if (is_null($mixed_model1)) {
            return $this->sendError('Post not found');
        }      
        return $this->sendResponse($mixed_model1->toArray(), ' retrieved successfully.');

          }*/

        
}

