<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CartController extends Controller
{

    public function index()
    {
        $cart = session()->get('cart');
        return view('student/my-cart', compact('cart'));
    }

    public function add(Request $request,$course_id)
    {
        $cart = session()->get('cart');

        $course_detail=Course::find($course_id)->toArray();
       
        if (!$cart) {
            $cart = [
                $course_id => $course_detail
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Course added Successfully!');
        }

        if (isset($cart[$course_id])) {
            return redirect()->back()->with('success', 'Course already added!');
        }

        $cart[$course_id] = $course_detail;

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Course added Successfully!');
    }

   
    public function remove(Request $request,$course_id)
    {
       
        $cart = session()->get('cart');

        if (isset($cart[$course_id])) {
            unset($cart[$course_id]);
            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Course removed from cart successfully');
        }
    }
}
