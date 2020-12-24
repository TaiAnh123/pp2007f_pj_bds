<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin()
    {
        return view('auth/login');
    }

    public function postLogin(Request $request)
    {
        // Kiểm tra dữ liệu nhập vào
        
        $rules = [
            'email' =>'required|string',
            'password' => 'required|min:6'
        ];

        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails())
        {
            // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
            return redirect('login')->withErrors($validator)->withInput();
        }
        else {
                // Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
                $credentials = $request->only('email', 'password');
                $arr = ['email'=> $request['email'],'password' => $request['password']];

                    // dd(Auth::attempt(['email' => $email, 'password' =>$password]));
                // if( Auth::attempt(['email' => $email, 'password' =>$password]))
                // dd(Auth::attempt($credentials));
                if (Auth::attempt($arr)) 
                {
        
                    // Kiểm tra đúng email và mật khẩu sẽ chuyển trang
                    //la admin
                    if (Auth::user()->inRole('admin'))
                    {
                        return redirect('/admin/index');
                    }
                    else
                    {
                        return redirect('/member/index');
                    }

                }
                else
                    {
                        
                    // Kiểm tra không đúng sẽ hiển thị thông báo lỗi
                    Session::flash('error', 'Username hoặc mật khẩu không đúng!');
                    return redirect('login')->with('error', 'Username hoặc mật khẩu không đúng!');
                }
        }
    }
    
}
