<?php

namespace App\Http\Controllers;

//use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function handler(Request $request){
        // perform validation, if fail then output errors,
        // if pass then return success message
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ];
//
        $validator = Validator::make($request->all(),$rules);
//
        if($validator->fails()){
            $errorData = [
                'name' => $validator->errors()->first('name'),
                'email' => $validator->errors()->first('email'),
                'message' => $validator->errors()->first('message'),
            ];
            return response()->json($errorData,200);
        }

        //get the data and send email
        $contactor_name = $request->json('name');
        $contactor_email = $request->json('email');
        $message = $request->json('message');
        // TODO: send this data to your email
//        $this->sendEmail($request);
        return "success";

    }


//    public function test(){
//        $data = array('name'=>"Virat Gandhi");
//
////        Mail::send(['text'=>'emails.contact_mail'], $data, function($message) {
////            $message->to('shahzaib.mughal02013@gmail.com', 'Tutorials Point')->subject
////            ('Laravel Basic Testing Mail');
////            $message->from('xyz@gmail.com','Virat Gandhi');
////        });
//
//    }
//
//    public function sendEmail($request){
//        $data = array('name'=>"Virat Gandhi");
//
//        Mail::send(['text'=>'mail'], $data, function($message) {
//            $message->to('abc@gmail.com', 'Tutorials Point')->subject
//            ('Laravel Basic Testing Mail');
//            $message->from('xyz@gmail.com','Virat Gandhi');
//        });
//    }
}
