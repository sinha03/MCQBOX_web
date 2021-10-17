<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;

use validator;
use App\Http\Controllers\Api\Auth\APIBaseController as APIBaseController;
use App\RegModel;


//Auth Facade used in guard
//use Auth;

class RegController extends APIBaseController{

  protected $redirectPath = 'introduction';

    public function showRegistrationForm()
  {
      return view('quiz1.login');
  }
    public function register(Request $request){

        $this->validate($request, [
            'username' => 'required',
            'fullname' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
           

        ]);

       $post = RegModel::create([
            'username' => request('username'),
            'fullname' => request('fullname'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            

        ]);
        return redirect($this->redirectPath);

        return $this->sendResponse($post->toArray(), 'Post created successfully.');

    }
    
    public function index()
    {
        $posts = RegModel::all();
        return $this->sendResponse($posts->toArray(), 'Posts retrieved successfully.');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();


        $validator = Validator::make($input, [
           'username' => 'required',
            'fullname' => 'required',
            'email' => 'required|email|unique:register,email',
            'password' => 'required|min:6',
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }


        $post = RegModel::create($input);


        return $this->sendResponse($post->toArray(), 'Post created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = RegModel::find($id);
        if (is_null($post)) {
            return $this->sendError('Post not found.');
        }


        return $this->sendResponse($post->toArray(), 'Post retrieved successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();


        $validator = Validator::make($input, [
         'username' => 'required',
            'fullname' => 'required',
            'email' => 'required|email|unique:register,email',
            'password' => 'required|min:6',
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }


        $post = RegModel::find($id);
        if (is_null($post)) {
            return $this->sendError('Post not found.');
        }


        $post->username = $input['username'];
        $post->fullname = $input['fullname'];
        $post->email = $input['description'];
        $post->password = $input['password'];
        
        $post->save();


        return $this->sendResponse($post->toArray(), 'Post updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = RegModel::find($id);


        if (is_null($post)) {
            return $this->sendError('Post not found.');
        }


        $post->delete();


        return $this->sendResponse($id, 'Tag deleted successfully.');
    }
}
