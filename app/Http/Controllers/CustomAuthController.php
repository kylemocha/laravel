<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{    
    use AuthenticatesUsers;
    public function index()
    {
        return view('auth.login');
    }  
      
    public function registration()
    {
        return view('auth.registration');
    }

    protected $redirectTo = 'home_user';
   
   
    public function postLogin(Request $request)
    {   
        $input = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->is_admin == 1) {
                return redirect('admin')->withSuccess('Welcome admin!');
            }elseif(auth()->user()->is_admin == 2){
                return redirect('therapist')->withSuccess('Welcome therapist!');
            }
            else{
                return redirect('home_user')->withSuccess('You have successfully logged in!');
            }
        }else{
            return redirect()->route('login')
                ->withSuccess('Email address And Password are invalid.');
        }   
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
         
        return redirect("login")->withSuccess('Great! You have successfully created your account.');
    }
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('home_user');
        }
  
        return redirect("login")->withSuccess('Opps! You did not successfully logged in.');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
    
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return redirect('main_home');
    }
   
   
}