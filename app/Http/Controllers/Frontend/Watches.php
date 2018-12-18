<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Watches extends Controller
{
    //
    public function index() {
        $data = array();
        return view('frontend.pages.watches', $data);
    }
}