<?php

namespace App\Http\Controllers;

use App\Company;
use App\Contact;
use App\Http\Requests\ContactRequest;
use App\User;
use DB;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct(){
    //     $this ->middleware(['auth','verified']);
    // }

    public function index()
    {
        //
        // dd(request()->a,request('a'));
        $company=Company::usercompanies();
        // dd($company);
        // DB::enableQueryLog();

        // for local scope
        $contact=auth()->user()->contacts()->with('company')->LatestFirst()->Filter()->paginate(3);

        // for global scope
        // $contact=Contact::LatestFirst()->paginate(3);
        

        // $query = DB::getQueryLog();

        // dd($query);

        return view('contact.index',compact('contact','company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $companies=Company::orderBy('name')->pluck('name','id')->prepend('all companies','');
        return view('contact.create',compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $request->user()->contacts()->create($request->all());
        return redirect('/contacts')->with('message','Contact has been created successfully...');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
     //$contact=Contact::find($id);
    return view('contact.show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contacts=auth()->user()->contacts()->findOrFail($id);
        $companies=Company::userCompanies();
        return view('contact.edit',compact('companies','contacts'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Contact $contact ,ContactRequest $request)
    {
       
        // $contact=Contact::findOrFail($id);
        $contact->update($request->all());

        return redirect('/contacts')->with('message','Contact has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //$contact=Contact::findOrFail($id);
        $contact->delete();
        return back()->with('message','Contact has been deleted successfully....');
    }
}
