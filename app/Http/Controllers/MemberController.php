<?php

namespace App\Http\Controllers;

use App\Http\Requests\MembershipFormRequest;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('members.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MembershipFormRequest $request)
    {
        $data = $request->validated();

        $member = new Member;
        $member->name = $data['name'];
        $member->contact = $data['contact'];
        $member->email = $data['email'];

        if ($request->hasfile('copy_of_IC')) {
            $file = $request->file('copy_of_IC');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/copy_of_IC', $filename);
            $member->copy_of_IC = $filename;
        }


        $member->package = $request['package'];
        $member->user_id = Auth::user()->id;
        $member->save();

        return redirect('membership')->with('message', 'Membership has been saved successfully.');
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
