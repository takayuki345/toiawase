<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Gender;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::with(['category', 'gender'])->paginate(7);
        $categories = Category::all();
        $genders = Gender::all();

        return view('admin', compact('contacts', 'categories', 'genders'));
    }

    public function search(Request $request)
    {
        $contacts = Contact::with(['category', 'gender'])->KeywordSearch($request->keyword)->GenderSearch($request->gender_id)->CategorySearch($request->category_id)->DateSearch($request->date)->paginate(7);
        $categories = Category::all();
        $genders = Gender::all();

        return view('admin', compact('contacts', 'categories', 'genders'));
    }
}
