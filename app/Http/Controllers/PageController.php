<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Display icons page
     *
     * @return \Illuminate\View\View
     */
    public function icons()
    {
        return view('pages.icons');
    }

    /**
     * Display maps page
     *
     * @return \Illuminate\View\View
     */
    public function maps()
    {
        return view('pages.maps');
    }

    /**
     * Display tables page
     *
     * @return \Illuminate\View\View
     */
    public function tables()
    {
        return view('pages.tables');
    }

    /**
     * Display notifications page
     *
     * @return \Illuminate\View\View
     */
    public function notifications()
    {
        return view('pages.notifications');
    }

    /**
     * Display rtl page
     *
     * @return \Illuminate\View\View
     */
    public function rtl()
    {
        return view('pages.rtl');
    }

    /**
     * Display typography page
     *
     * @return \Illuminate\View\View
     */
    public function typography()
    {
        return view('pages.typography');
    }

    /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function upgrade()
    {
        return view('pages.upgrade');
    }

  
  
    // my controller for redirect pages
  
    /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function crypprofile(){
        return view('pages.crypprofile');
    }
        /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function crypprofileadd(){
        return view('pages.crypprofileadd');
    }
        /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function crypprofileadacc(){
        return view('pages.crypprofileadacc');
    }
    /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function crypprofileacc(){
        return view('pages.crypprofileacc');
    }

        /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function crypsocialacc(){
        return view('pages.crypsocialacc');
    }
        /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function crypadacc(){
        return view('pages.crypadacc');
    }
        /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function crypfanpages(){
        return view('pages.crypfanpages');
    }
        /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function crypmembers(){
        return view('pages.crypmembers');
    }
        /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function crypshare(){
        return view('pages.crypshare');
    }

}
