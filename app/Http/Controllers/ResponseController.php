<?php

namespace App\Http\Controllers;

use App\Models\Response;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userresponse = new Response();
        $userresponse->company = $request->company;
        $userresponse->location = $request->location;
        $userresponse->question1 = $request->question1;
        $userresponse->response1 = $request->response1;
        $userresponse->story1 = $request->story1;
        $userresponse->question2 = $request->question2;
        $userresponse->response2 = $request->response2;
        $userresponse->story2 = $request->story2;
        $userresponse->question3 = $request->question3;
        $userresponse->response3 = $request->response3;
        $userresponse->story3 = $request->story3;
        $userresponse->question4 = $request->question4;
        $userresponse->response4 = $request->response4;
        $userresponse->story4 = $request->story4;
        $userresponse->question5 = $request->question5;
        $userresponse->response5 = $request->response5;
        $userresponse->story5 = $request->story5;
        $userresponse->question6 = $request->question6;
        $userresponse->response6 = $request->response6;
        $userresponse->story6 = $request->story6;
        $userresponse->role = $request->role;
        $userresponse->timeAtCompany = $request->timeAtCompany;
        $userresponse->email = $request->email;
        $userresponse->gender = $request->gender;
        $userresponse->race = $request->race;
        $userresponse->age = $request->age;
        $userresponse->religion = $request->religion;
        $userresponse->disability = $request->disability;
        $userresponse->ip = $request->ip();
        $userresponse->save();
        return;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function show(Response $response)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function edit(Response $response)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Response $response)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function destroy(Response $response)
    {
        //
    }
}
