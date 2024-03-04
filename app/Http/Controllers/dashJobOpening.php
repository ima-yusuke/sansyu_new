<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashJobOpening extends Controller
{
    //
    public function showJobOpeningPage()
    {
//        $messages = Message::all();

        return view("job_opening");
    }

    public function addJobOpening(Request $request)
    {
        $messages = new Message();
        $messages->name = $request->name;
        $messages->role = $request->role!=null?$request->role:null;
        $messages->msg = $request->msg;
        $messages->title = $request->title;
        $messages->path = 'storage/img/'.$file_name;
        $messages->save();

        // 元のページに戻る
        return redirect()->route('show-message');
    }
}
