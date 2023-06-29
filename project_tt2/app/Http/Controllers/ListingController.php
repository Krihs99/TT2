<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //show all listings
    public function index(){
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(2)
        ]);
    }
   
    //show single listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //show create form
    public function create(){
        return view('listings.create');
    }
    //store listing data
    public function store(Request $request){
        dd($request);
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $formFields['user_id'] = auth()->id();
        Listing::create($formFields);

        return redirect('/')->with('message', 'Post created successfully!');
    }

    public function edit(Listing $listing) {
        return view('listings.edit', ['listing' => $listing]);
    }

    public function update(Request $request, Listing $listing){
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }
        $listing->update($formFields);

        return back()->with('message', 'Post updated successfully!');
    }


    //delete listing
    public function destroy(Listing $listing) {
        $listing->delete();
        return redirect('/')->with('message', 'Post has been deleted successfully!');
    }
}
