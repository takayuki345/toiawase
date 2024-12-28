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
        $categories = Category::all();
        $genders = Gender::all();
        return view('index', compact('categories', 'genders'));
    }

    public function confirm(ContactRequest $request) {
        $contacts = $request->only(['first_name', 'last_name', 'gender_id', 'email', 'tel_1', 'tel_2', 'tel_3', 'address', 'building', 'category_id', 'detail']);
        $gender = Gender::find($request->gender_id);
        $category = Category::find($request->category_id);

        $params = [
            'gender' => $gender,
            'category' => $category
        ];

        return view('confirm', compact('contacts', 'params'));
    }

    public function store(Request $request){
        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender_id', 'email', 'tel', 'address', 'building', 'detail']);
        Contact::create($contact);

        return view('thanks');
    }
}
