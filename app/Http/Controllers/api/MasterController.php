<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Area;
use App\Models\Logistic;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;


class MasterController extends Controller
{
    public function area(Request $request)
    {
        $user = User::where('id', $request->user_id)
            ->first();

        if (!$user) {
            return response()->json([
                'message' => 'User not found.',
                'status' => 0,
                'data' => [],
            ], 404);
        }

        $area = Area::where('area_company_id', $user->company_id)->get();

        if (!$area) {
            return response()->json([
                'message' => 'area not found.',
                'status' => 0,
                'data' => [],
            ], 404);
        }

        return response()->json([
            'message' => 'area retrieved successfully.',
            'data' => $area,
            'status' => 1
        ]);
    } 

    public function logistic(Request $request)
    {


        $logistic =Logistic::get();

        if (!$logistic) {
            return response()->json([
                'message' => 'area not found.',
                'status' => 0,
                'data' => [],
            ], 404);
        }

        return response()->json([
            'message' => 'logistic retrieved successfully.',
            'data' => $logistic,
            'status' => 1
        ]);
    } 
}
