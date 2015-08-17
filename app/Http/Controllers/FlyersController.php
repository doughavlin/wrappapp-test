<?php

namespace App\Http\Controllers;

use App\Flyer;
use Illuminate\Http\Request;

use App\Http\Requests\FlyerRequest;
use App\Http\Controllers\Controller;


class FlyersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
		//flash () ->message( 'Hello World' , 'this is the message' );
		flash () ->overlay( 'Welcome aboard' , 'Thank you for signing up' );
        return view('flyers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  flyerRequest  $request
     * @return Response
     */
    public function store(FlyerRequest $request)
    {
	
		//persist flyer
		Flyer::create($request->all());
		
		flash('Success!', 'Your flyer has been created');

		return redirect()->back();	
		}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($zip , $street )
    {
		
		
		
		$flyer =  Flyer::locatedAt( $zip , $street )->first();
		
		return view ('flyers.show' , compact ('flyer') );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
