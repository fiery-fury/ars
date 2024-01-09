<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\BorrowLog;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Inertia\Inertia;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $userId = $request->user()->id;
        $asset = Asset::with([ 'department', 'category', 'color' ]);
        $userLevelValue = $request->user()->user_detail->user_level->value;

        if($userLevelValue < 255) {
            $asset->where('department_id', $userId);
        }

        return Inertia::render('Assets/Index', [
            'data' => $asset->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $assets = Asset::with([ 'department', 'category', 'color' ])->whereIn('id', $request->assets)->get();

        return Inertia::render('Assets/InputDetails', [
            'data' => $assets
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = BorrowLog::create([
            'created_by' => Auth::user()->id,
            'updated_by' => null,
            'requested_by' => Auth::user()->id,
            'assets' => implode(',', array_column($request->get('data'), 'id')),
        ])->id;

        return to_route('assets.show', [ 'id' => $id ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $borrowLogEntry = BorrowLog::findOrFail($request->id)->with('requestor', 'assets')->first();

        return Inertia::render('Assets/Show', [
            'data' => $borrowLogEntry
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asset $asset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asset $asset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asset $asset)
    {
        //
    }
}
