<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;
use App\Models\Orders;
use App\Models\Events;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class HomeController extends Controller
{


    public function index()
    {
        $data = new Events(); 
        $event = $data->all();
       
        return view('home',compact('event'));
    }

    public function orders(Request $request){
        $validate= $request->validate([
   
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

        $data = array();

            $data['event_id'] = $request->event_id;
            $data['amount'] = $request->amount;
            $data['date'] = $request->date;
            $data['name'] = $request->name;
            $data['phone'] = $request->phone;
            $data['email'] = $request->email;
            $data['created_at'] = now();
            $data['updated_at'] = now();
        
        $id = DB::table('orders')->insertGetId($data);

        $request->session()->put('id', $id);
        $request->session()->put('price', $request->event_id);
        $request->session()->put('amount', $request->amount);
        $request->session()->put('date', $request->date);
        $request->session()->put('name', $request->name);
        $request->session()->put('phone', $request->phone);
        $request->session()->put('email', $request->email);
      
        return view('payment');
    }
    public function orders_save(Request $request){
        // $validate= $data->validate([
   
        //     'number'=>['required'],
        //     'ten'=>['required','min:5'],
        //     'ngay'=>['required'],
        //     'CVV'=>['required'],

        // ],
        
        // [
        //     'number.required'=>'Số thẻ không được bỏ trống',
        //     'ten.required'=>'Họ tên không được bỏ trống',  
        //     'ten.min'=>'Họ tên ít nhất 6 ký tự',
        //     'ngay.required'=>'Số điện thoại không được bỏ trống',
        //     'CVV.required'=>'email không được bỏ trống',
        // ]);

        // [      
        //     'number' => $data['number'],
        //     'ten' => $data['ten'],
        //     'ngay' => $data['ngay'],
        //     'CVV' => $data['CVV'],

        // ];
        
        return redirect('payment-success',compact('data'));
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

            Mail::send('noidungmail',[
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'address' => $data['addpress'],
                'comment' => $data['comment']

            ],function($mail) use ($data){
                $mail->to('nhitty28@gmail.com','nhitty28@gmail.com');
                $mail->from('nhitty28@gmail.com');
                $mail->subject('THƯ GÓP Ý CỦA KHÁCH HÀNG');
            });

            return redirect('/home')->withSuccess('Gửi liên hệ thành công.Chúng tôi sẽ phản hồi bạn sớm nhất có thể.');
    }
}