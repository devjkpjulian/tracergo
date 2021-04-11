<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CForm;
use App\Models\Visitor;
use App\Models\Symptom;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/');
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
        $visitor = Visitor::create([
            'user_id' => $request->user_id,
            'name' => strtoupper($request->name),
            'email' => $request->has('email') ? $request->email : null,
            'age' => $request->has('age') ? $request->age : null,
            'gender' => $request->has('gender') ? $request->gender : null,
            'contact' => strval($request->contact),
            'address' => $request->has('address') ? $request->address : null,
            'state' => $request->state,
            'city' => $request->city,
            'symptoms' => $request->symptoms,
        ]);

        Symptom::create([
            'visitor_id' => $visitor->id,
            'temperature' => $request->temperature,
            'fever' => $request->has('fever') ? true : false,
            'drycough' => $request->has('drycough') ? true : false,
            'sorethroat' => $request->has('sorethroat') ? true : false,
            'difficultbreathing' => $request->has('difficultbreathing') ? true : false,
            'lossofsenses' => $request->has('loseofsenses') ? true : false,
            'fatigue' => $request->has('fatigue') ? true : false,
            'weakness' => $request->has('weakness') ? true : false,
            'sneezing' => $request->has('sneezing') ? true : false,
            'diarrhoea' => $request->has('diarrhoea') ? true : false,
            'headache' => $request->has('headache') ? true : false,
            'q1' => $request->q1,
            'q2' => $request->q2,
            'q3' => $request->q3,       
        ]);

        return view('completed',compact('visitor'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function show($id,User $user)
    {
        $user = $user->findOrFail($id);

        if(is_null(CForm::where('user_id',$user->id)->first()))
        {
            CForm::create([
                'user_id' => $user->id,
            ]);
        }

        return view('visitors.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitor $visitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitor $visitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $visitors = Visitor::where('user_id',$id)->get();
        
        foreach ($visitors as $visitor)
        {
            Visitor::destroy($visitor->id);
        }

        return back();
    }
}
