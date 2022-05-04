<?php

namespace Billy\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TestController extends Controller
{
    public function greet()
    {
        echo 'Hello world package';
    }
}
