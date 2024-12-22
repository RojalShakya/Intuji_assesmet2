<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PairController extends Controller
{
   public function index(){
    return view('index');
   }
   public function submitForm(Request $request){

    $target=$request->target;
    $num_array=explode(',',$request->number);
    $result=$this->findPair($num_array,$target);
    dd('pairs=',$result);
   }
    public function findPair($nums, $target) {
        $seen = [];
        $pairs = [];

        // Loop through each number in the array
        foreach ($nums as $num) {
            // Calculate the complement
            $complement = $target - $num;

            // Check if the complement exists in the seen array
            if (in_array($complement, $seen)) {
                // Add the pair to the pairs array
                $pairs[] = [$num, $complement];
            }

            // Add the current number to the seen array
            $seen[] = $num;
        }


        if (!empty($pairs)) {
            return $pairs;
        }


        return "Pair not found." ;
}
}


