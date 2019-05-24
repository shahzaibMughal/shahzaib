<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function handler(Request $request){
        // perform validation, if fail then output errors,
        // if pass then return success message
//        return response()->json($request->all(),200);
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


        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'msg' => $request->input('message')
        ];

        // mail is working fine, with other post request,
//         but when the request is ajax and when we send
        Mail::to('shahzaib.mughal02013@gmail.com')->send(new ContactMail($data));
        return "success";
    }

}
