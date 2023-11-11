<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Client;
use App\Models\Gender;
use App\Models\IdentityType;
use App\Models\Nation;
use App\Models\Occupation;
use App\Models\Region;
use App\Models\Relation;
use App\Models\Religion;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('clients.index')->with('clients', Client::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create')
            ->with('titles', Title::all())
            ->with('genders', Gender::all())
            ->with('regions', Region::all())
            ->with('occupations', Occupation::all())
            ->with('relations', Relation::all())
            ->with('nations', Nation::all())
            ->with('religions', Religion::all())
            ->with('identityTypes', IdentityType::all())
            ->with('branches', Branch::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // stores image in the public folder
        $image = $request->image->store('clients', 'public');

        // generating client number per branch.
        $branchcode = DB::table('branches')->where('id', $request->branchid)->value('code');
        $countClient = DB::table('clients')->where('branchid', $request->branchid)->count();
        $clientNumber = $branchcode . ($countClient + 1000);


        Client::create([
            'clientNumber' => $clientNumber,
            'titleId' => $request->titleid,
            'surname' => $request->surname,
            'othernames' => $request->othernames,
            'dob' => $request->dob,
            'genderid' => $request->genderid,
            'resAddress' => $request->resAddress,
            'town' => $request->town,
            'homeTown' => $request->homeTown,
            'regionId' => $request->regionid,
            'occupationid' => $request->occupationid,
            'phoneNumber' => $request->phoneNumber,
            'isActive' => true,
            'nextOfKin' => $request->nextOfKin,
            'relationid' => $request->relationid,
            'kinNumber' => $request->kinNumber,
            'nationalityid' => $request->nationid,
            'religionid' => $request->religionid,
            'placeOfWorship' => $request->placeOfWorship,
            'identityTypeid' => $request->identityTypeid,
            'idNumber' => $request->idNumber,
            'image' => $image,
            'branchid' => $request->branchid,
        ]);

        session()->flash('success', 'New client has being added successfully');

        return redirect()->route('client.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
