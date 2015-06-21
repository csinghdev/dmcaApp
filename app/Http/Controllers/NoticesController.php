<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrepareNoticeRequest;
use App\Provider;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NoticesController extends Controller
{

    /**
     * create a new notices controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * show all notices.
     *
     * @return Response
     */
    public function index()
    {
        return 'all notices';
    }

    /**
     * Create a new notice.
     *
     * @return Response
     */
    public function create()
    {
        // get list of providers
        $providers = Provider::lists('name', 'id');

        // load a view to create a new notice
        return view('notices.create', compact('providers'));
    }

    public function confirm(PrepareNoticeRequest $request)
    {
        return $request->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
     * @param  int  $id
     * @return Response
     */
    public function update($id)
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
