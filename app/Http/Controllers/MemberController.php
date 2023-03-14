<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //list members detaiils for Admin user
        return view('members.index', ['members' => Member::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Register new member
        return view('auth.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
         /**
         * find user id from user table
         * retieving member->segid from User() table one-to-one relationship. 
        */
        $user = auth()->user();
        
        $member = User::find($user->id)->member;
        //dd($member->segid);
        /**
         * check if request has request->user-id
         * if (DB::table('users')->where('id', 1)->exists()) {
         *  // ...
         * }
        */
        if (DB::table('members')->where('user_id', $user->id)->exists())
        {
        /**
         * create new member
         */
        //dd($user->name);
        return redirect('/')->with('success', 'You are already a member, with this following SEGID: ' . $member->segid);
        }
        else
        {
            $request->validate([
                'firstname' => 'required|string',
                'lastname' => 'required|string',
                'email' => 'required|unique:members,email',
                'affilate' => 'required|string',
                'segid' => 'required|numeric|unique:members',
                'DOB' => 'required|date',
            ]);
    
            $member = Member::insert([
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'),
                'email' => $request->input('email'),
                'affilate' => $request->input('affilate'),
                'segid' => $request->input('segid'),
                'DOB' => $request->input('DOB'),
                'user_id' => $user->id,
            ]);     
    
            return redirect('/')->with('success', 'Welcome ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
