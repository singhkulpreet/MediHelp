<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\result;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verify');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function check()
    {

            if(Auth::check())
            {
              return view('home');
            }

            else return view('auth.login');
    }

    public function ret(Request $request)
    {
        
        $data = $request->id;

$take=result::where(['name'=>$data])->first();

        if($take)
        {
            if(($take->sympt1)!="")
            {
            
                $arr=array($take->sympt1);

                if($take->sympt2!="")
                {
                    $arr=array($take->sympt1,$take->sympt2);
                   


                  if($take->sympt3!="")
                    {
                        $arr=array($take->sympt1,$take->sympt2,$take->sympt3);
                            

                      if($take->sympt4!="")
                      {
                                        //$arr[3]=$take->symt4;
                            $arr=array($take->sympt1,$take->sympt2,$take->sympt3,$take->sympt4);


                            if($take->sympt5!="")
                             {
                                //$arr[4]=$take->sympt5;
                                $arr=array($take->sympt1,$take->sympt2,$take->sympt3,$take->sympt4,$take->sympt5);
                             }
                        }

                    }


                }

                   

            }

            
            return response()->json(array('msg'=>$arr), 200);
        }

        else return response()->json(array('msg'=> "nothing is available"), 200);
        
      

    }
}
