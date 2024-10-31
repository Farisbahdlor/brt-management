<?php

namespace App\Http\Controllers\API;

use App\Models\BRT;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\BRTNotificationEvent;
use Illuminate\Support\Facades\Auth;

class BRTController extends Controller
{
    public function index() {
        $brts = Auth::user()->brts;
        return response()->json($brts);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'brt_code' => 'required|unique:brts',
            'reserved_amount' => 'required|numeric',
            'status' => 'required|string',
        ]);

        $brt = Auth::user()->brts()->create($validated);
        broadcast(new BRTNotificationEvent($brt));

        return response()->json($brt, 201);
    }

    public function show($id) {
        $brt = Auth::user()->brts()->findOrFail($id);
        return response()->json($brt);
    }

    public function update(Request $request, $id) {
        $brt = Auth::user()->brts()->findOrFail($id);
        $brt->update($request->all());
        broadcast(new BRTNotificationEvent($brt));

        return response()->json($brt);
    }

    public function destroy($id) {
        $brt = Auth::user()->brts()->findOrFail($id);
        $brt->delete();
        broadcast(new BRTNotificationEvent($brt));

        return response()->json(null, 204);
    }
}
