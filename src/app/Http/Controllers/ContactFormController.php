<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use Packages\UseCase\ContactForm\Create\ContactFormCreateUseCaseInterface;
use Packages\UseCase\ContactForm\Create\ContactFormCreateRequest;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contacts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactFormCreateUseCaseInterface $createUseCase)
    {
        dd('aa');
        // $validated = $request->validated();

        // $name    = $validated['name'];
        // $title   = $validated['title'];
        // $email   = $validated['email'];
        // $url     = $validated['url'];
        // $gender  = $validated['gender'];
        // $age     = $validated['age'];
        // $contact = $validated['contact'];
        $name    = $request->name;
        $title   = $request->title;
        $email   = $request->email;
        $url     = $request->url;
        $gender  = $request->gender;
        $age     = $request->age;
        $contact = $request->contact;

        $input = new ContactFormCreateRequest(
            $name,
            $title,
            $email,
            $url,
            $gender,
            $age,
            $contact
        );

        $contactForm = $createUseCase($input);

        return to_route('contacts.index', ['contactForm' => $contactForm]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}