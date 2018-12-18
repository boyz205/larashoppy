<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Kids extends Controller
{
    //
    public function index() {
        $data = array();
        return view('frontend.pages.kids', $data);
    }
}