<?php

namespace App\Http\Controllers\Front;

use App\Model\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SubscriberController extends FrontController
{
    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'email' => 'required|unique:subscribers,email',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator);
        }
        $subscriber = new Subscriber();
        $subscriber->email = $request->input('email');
        $subscriber->save();

        Session::flash('flash_title', 'Success');
        Session::flash('flash_message', 'Вы успешно подписались на этот веб-сайт.');

        return redirect('/');
    }
}
