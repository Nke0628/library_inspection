<?php
namespace App\Http\Controllers\ClockWork;

use App\Clockwork;

class ClockWorkController
{
    public function show()
    {
//        clock()->event('Importing tweets')->begin();
        $all = Clockwork::all();
        $all = Clockwork::first();
        $this->test();
//        clock()->event('Importing tweets')->end();
        return view('welcome');
    }

    public function test()
    {
        for ( $i = 0; $i < 10 ; $i++){
            $test = date('ymd');
        }
    }
}
