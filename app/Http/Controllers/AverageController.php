<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Exception;
use App\Address;

class AverageController extends Controller
{
    /**
     * Calculate average # of cars and addresses for owners
     *
     * @return JsonResponse
     */
    public function owners(): JsonResponse
    {
        // tried but could not get this in one query
        // also tried to nest the select so that i could use AVG() but failed there too

        $carsCount = DB::table('owners')
            ->join('cars', 'owners.id', '=', 'cars.owner_id')
            ->selectRaw('COUNT(cars.id) as cars_count')
            ->groupBy('owners.id')
            ->get()
            ->avg('cars_count');

        $addressesCount = DB::table('owners')
            ->join('addresses', 'addresses.owner_id', '=', 'owners.id')
            ->selectRaw('count(addresses.id) as addresses_count')
            ->groupBy('owners.id')
            ->get()
            ->avg('addresses_count');

        return response()->json([
            'cars' => $carsCount,
            'addresses' => $addressesCount,
        ]);
    }

    /**
     * Calculate average # of cars for addresses
     *
     * @return JsonResponse
     */
    public function addresses(): JsonResponse
    {
        $carsCount = DB::table('addresses')
            ->join('cars', 'cars.address_id', '=', 'addresses.id')
            ->selectRaw('COUNT(cars.id) as cars_count')
            ->groupBy('addresses.id')
            ->get()
            ->avg('cars_count');

        return response()->json([
            'cars' => $carsCount,
        ]);
    }
}
