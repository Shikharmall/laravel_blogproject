<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Item;
use App\Models\Blog;

class AuthController extends Controller
{

    public function login(Request $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email',$email)->get();

        $name = $user[0]->fname;

        if(empty($user)){
           return back()->with('fail','This email is not registered.');
        }

        else{
            if($user[0]->password == $password){
               $request->session()->put('user' , $name);
               $request->session()->put('userdetails' , $user);


               return redirect('dashboard');
            }

            else{
              return back()->with('fail','Password not matched.');
            }
        }


    }

    public function register(Request $request)
    {
        $user = new User;
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->email = $request->input('email');
        $password = $request->input('password');
        $compassword = $request->input('compassword');

        if($password == $compassword){  
            $user->password = $request->input('password');
            $user->save();
            return redirect('/');
        }

        else{
            return back()->with('fail','Password not matched..');
        }

    }



    public function dashboardview(Request $req)
    {   
        $blogs = Blog::all();
        
        $name = session()->get('user');
        $user = User::where('fname',$name)->get();
        $req->session()->put('userdetails' , $user);

        return view('/dashboard',['blogs'=>$blogs]);
    }

    public function addbloguser(Request $request)
    {

       $blog = new Blog;
       $file = $request->file('file');
       $extension = $file->getClientOriginalExtension();
       $filename = time().'.'.$extension;
       $file->move('uploads' , $filename);
       $blog->img = $filename;

       $blog->writtenby = $request->input('writtenby');
       $blog->title = $request->input('title');
       $blog->content = $request->input('content');
       $blog->save();
       return redirect('/addblog');

    }

    public function edituser(Request $request)
    {
        $name = session()->get('user');
        $usr = User::where('fname' , $name)->first();

        $usr->fname = $request->input('fname');
        $usr->lname = $request->input('lname');
        $usr->email = $request->input('email');
        $password = $request->input('password');
        $compassword = $request->input('compassword');
        $namme = $usr->fname;
        
        if($password == $compassword){  
            $usr->password = $request->input('password');
            $usr->save();

            $request->session()->put('user' , $namme);
            //$request->session()->put('userdetails' , $usr);
            //return back()->with('success','Profile Edited..');
            return redirect('/');
        }
        else{
            return back()->with('fail','Password not matched..');
        }

    }

    public function edit(Request $request)
    {
        $userdetails = session()->get('userdetails');
        return view('/edit',['userdetails'=>$userdetails]);
    }


    
}