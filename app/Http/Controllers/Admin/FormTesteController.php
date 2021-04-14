<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateProfileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;

class FormTesteController extends Controller
{

    protected $repository;

    public function __construct(Profile $profile)
    {
        $this->repository = $profile;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = $this->repository->paginate(3);
        return view('admin.pages.formtest.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.formtest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProfileRequest $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('formteste.index')
                         ->with('record_added', 'Salvo com sucesso');
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
        $profile = $this->repository->where('id', $id)->first();
        
        if(!$profile)
            return redirect()->back();

        return view('admin.pages.formtest.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateProfileRequest $request, $id)
    {
        $profile = $this->repository->where('id', $id)->first();
        
        if(!$profile)
            return redirect()->back();

        $profile->update($request->all());

        return redirect()->route('formteste.index');

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
