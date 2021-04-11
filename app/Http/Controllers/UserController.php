<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $users)
    {
        $users = $users->where('admin',false)->paginate(10);
        return view('users.index',compact('users'));
    }

    public function search(Request $request, User $users)
    {
        $users = $users->search($request->get('search'))->paginate(10);

        if (!$users->count()) {
            return back()->with('alert', 'No Data Found!');
        } else {
            if ($request->has('search')) {
                return view('users.index',compact('users'));
            } else {
                $users = $users->search($request->get('search'))->paginate(10);
                $users->searchable();
                return view('users.index',compact('users'));
            }
        }
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
        //
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
        User::destroy($id);

        return back();
    }

    public function subscribe(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->trial = false;
        $user->save();

        return redirect('/');
    }
    
}
