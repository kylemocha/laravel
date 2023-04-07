<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  
      
    public function registration()
    {
        return view('auth.registration');
    }
      
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home_user')
                        ->withSuccess('You have successfully logged in');
        }
  
        return redirect("login")->withSuccess('Opps! You have entered invalid credentials');
    }
      
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("login")->withSuccess('Great! You have successfully created your account');
    }
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('home_user');
        }
  
        return redirect("login")->withSuccess('Opps! You did not successfully logged in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => $data['password']
      ]);
    }
    
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('main_home');
    }
}