<?php

namespace App\Http\Controllers\Client;

use App\Traits\ResponsesTrait;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    use ResponsesTrait;
    public function __construct()
    {
        $this->model="App\Models\AboutUs";
    }
    
    public function index(){
        $data=$this->model::first();
        return $this->success($data);
    }
}
