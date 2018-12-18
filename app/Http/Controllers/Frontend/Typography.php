<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Typography extends Controller
{
    //
    public function index() {
        $data = array();
        return view('frontend.pages.typography', $data);
    }
}