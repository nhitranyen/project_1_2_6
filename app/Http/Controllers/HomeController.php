<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Orders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function __construct(){

    }

    public function index()
    {
        return view('home');
    }

    public function orders(Request $data){
        $validate= $data->validate([
   
            'amount'=>['required'],
            'date'=>['required'],
            'name'=>['required','min:5'],
            'phone'=>['required'],
            'email'=>['required'],

        ],
        
        [
            'amount.required'=>'Không được bỏ trống',
            'date.required'=>'Vui lòng nhập ngày',
            'name.required'=>'Họ tên không được bỏ trống',  
            'name.min'=>'Họ tên ít nhất 6 ký tự',
            'phone.required'=>'Số điện thoại không được bỏ trống',
            'email.required'=>'Email không được bỏ trống',
            'email.ends_with'=>'Email không đúng định dạng ví dụ:(nguyenvana@gmail.com)',
                 
        ]);

        $data = [      
            'option' => $data['option'],
            'amount' => $data['email'],
            'date' => $data['date'],
            'name' => $data['name'],
            'phone' =>$data['phone'],
            'email' =>$data['email'],

        ];
      
        return redirect('/payment',compact('data'));
    }
    public function orders_save(Request $data){
        var_dump($data);
        exit();
        $validate= $data->validate([
   
            'number'=>['required'],
            'ten'=>['required','min:5'],
            'ngay'=>['required'],
            'CVV'=>['required'],

        ],
        
        [
            'number.required'=>'Số thẻ không được bỏ trống',
            'ten.required'=>'Họ tên không được bỏ trống',  
            'ten.min'=>'Họ tên ít nhất 6 ký tự',
            'ngay.required'=>'Số điện thoại không được bỏ trống',
            'CVV.required'=>'email không được bỏ trống',
        ]);

        [      
            'number' => $data['number'],
            'ten' => $data['ten'],
            'ngay' => $data['ngay'],
            'CVV' => $data['CVV'],

        ];
        
        return redirect('payment',compact('data'));
    }

    public function contact()
    {   
        return view('contact');
    }

    public function send_mail(Request $data){
        $validate= $data->validate([
            'name'=>['required','min:5'],
            'email'=>['required'],
            'phone'=>['required'],
            'address'=>['required'],
            'comment'=>['required'],
        ],
        
        [
           'name.required'=>'Họ tên không được trống', 
           'name.min'=>'Họ tên ít nhất 6 ký tự',   
           'email.required'=>'Email không được trống',
           'email.ends_with'=>'Email không đúng định dạng ví dụ:(nguyenvana@gmail.com)',
           'phone.required'=>'Số điện thoại không được trống',
           'phone.ends_with'=>'Số điện thoại không đúng định dạng ví dụ:(0988888888)',
           'address.required'=>'Địa chỉ không được trống',
           'comment.required'=>'Lời nhắn không được trống'
        ]);

            Mail::send('home',[
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => $data['password'],
                
            ],function($mail) use ($data){
                $mail->to($data['email'],$data['name']);
                $mail->from($data['email']);
                $mail->subject('Gởi Mail thành công');
            });

            return redirect('/home')->withSuccess('Gởi Mail thành công');
    }
}