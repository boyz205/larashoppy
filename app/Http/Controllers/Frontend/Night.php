<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Night extends Controller
{
    //
    public function index() {
        $data = array();
        return view('frontend.pages.night', $data);
    }
}