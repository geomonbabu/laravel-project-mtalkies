<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use  App\Models\User;
use  App\Models\comment;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CustauthController extends Controller
{
    public function index()
    {
        return view("auth.index");
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'place' => 'required',
            'emailorphone' => 'required|email|unique:users',
            'password' => 'required|min:7|max:12'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->place = $request->place;
        $user->emailorphone = $request->emailorphone;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'You have registered successfully');
        } else {
            return back()->with('fail', 'something went wrong');
        }
    }
    public function loginUser(Request $request)
    {
        $user = User::where('emailorphone', '=', $request->emailorphone)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                // $request->session()->put('loginId', $user->id);
                Session::put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Password is incorrect');
            }
        } else {
            return back()->with('fail', 'Please enter registered email');
        }
    }
    public function dashboard()
    {
        $user_name = user::where('id', '=', Session::get('loginId'))->get();
        $poster_name = user::where('id', '!=', Session::get('loginId'))->get();
        $post_data = DB::table('posts')
            ->select('posts.id', 'posts.description', 'posts.photo', 'posts.updated_at', 'users.name')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->where('user_id', '!=', Session::get('loginId'))->get();

        $post_name = user::where('id', '!=', Session::get('loginId'), '')->get();
        return view("auth.dashboard", compact('post_data', 'user_name', 'poster_name', 'post_name'));
    }
    public function profile()
    {
        $user_posts = post::where('user_id', Session::get('loginId'))->get();
        return view("auth.profile", compact('user_posts'));
    }
    public function fileUser(Request $request)
    {
        $request->validate([
            'description' => 'required',
        ]);
        // dd($request->all());
        $post = new post();
        $post->user_id = Session::get('loginId');
        $post->description = $request->description;
        // uploading file and saving to public/uploads folder
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/', $filename);
            $post->photo = $filename;
        } else {
            $post->photo = 'null';
        }
        $res = $post->save();
        if ($res) {

            return back()->with('success', 'You have uploaded successfully');
        } else {
            return back()->with('fail', 'something went wrong');
        }
        function show()
        {
        }
    }
    public function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('index')->with('success', 'Logout successfully...');;
        } else {
            return back()->with('fail', 'something went wrong');
        }
    }
    public function destroy($id)
    {
        DB::table('posts')->where('id', [$id])->delete();
        return redirect('profile')->with('success', 'Deleted successfully');
    }
    public function details($id)
    {
        // dd($id);
        $post = new post;
        $comments = new comment;
        $user_comments = $comments->where('post_id', $id)->get();
        $post_detail = $post->where('id', $id)->first();
        Session::put('postId', $post->id);
        // dd($post_detail);
        return view("auth.details", compact('post_detail', 'user_comments'));
    }
}
