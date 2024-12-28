<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Gender;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class AuthController extends Controller
{
    public function index() {
        $contact = [
            'first_name' => null,
            'last_name' => null,
            'gender_id' => 1,
            'email' => null,
            'tel_1' => null,
            'tel_2' => null,
            'tel_3' => null,
            'address' => null,
            'building' => null,
            'category_id' => null,
            'detail' => null,
        ];
        $genders = Gender::all();
        $categories = Category::all();
        return view('index', compact('contact', 'genders', 'categories'));
    }

    public function confirm(ContactRequest $request) {
        $contact = $request->only(['first_name', 'last_name', 'gender_id', 'email', 'tel_1', 'tel_2', 'tel_3', 'address', 'building', 'category_id', 'detail']);
        $gender = Gender::find($request->gender_id);
        $category = Category::find($request->category_id);

        $params = [
            'gender' => $gender,
            'category' => $category
        ];

        return view('confirm', compact('contact', 'params'));
    }

    public function store(Request $request){
        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender_id', 'email', 'tel', 'address', 'building', 'detail']);
        Contact::create($contact);

        return view('thanks');
    }

    public function modify(Request $request) {
        $contact = $request->only(['first_name', 'last_name', 'gender_id', 'email', 'tel_1', 'tel_2', 'tel_3', 'address', 'building', 'category_id', 'detail']);
        $genders = Gender::all();
        $categories = Category::all();

        return view('index', compact('contact', 'genders', 'categories'));
    }
}
