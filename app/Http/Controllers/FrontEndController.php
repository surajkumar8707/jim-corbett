<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /**
     * Description of your controller function.
     * @Route : home
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('home');
    }

    /**
     * Description of your controller function.
     * @Route : about
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function about(){
        return view('about');
    }

    /**
     * Description of your controller function.
     * @Route : contact
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function contact(){
        return view('contact');
    }

    /**
     * Description of your controller function.
     * @Route : jungle-safari
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function jungleSafari(){
        return view('jungle_safari');
    }

    /**
     * Description of your controller function.
     * @Route : canter-ride
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function canterRide(){
        return view('canter_ride');
    }

    /**
     * Description of your controller function.
     * @Route : resorts
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function resorts(){
        return view('resorts');
    }

    /**
     * Description of your controller function.
     * @Route : school-group
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function schoolGroup(){
        return view('school_group');
    }

    /**
     * Description of your controller function.
     * @Route : destinationd-wedding
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destinationdWedding(){
        return view('destinationd_wedding');
    }

    /**
     * Description of your controller function.
     * @Route : coorporate-group
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function coorporateGroup(){
        return view('coorporate_group');
    }

    /**
     * Description of your controller function.
     * @Route : privacy-policy
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function privacyPolicy(){
        return view('privacy_policy');
    }

    /**
     * Description of your controller function.
     * @Route : term-condition
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function termCondition(){
        return view('term_condition');
    }

}
