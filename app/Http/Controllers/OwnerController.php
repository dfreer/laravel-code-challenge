<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Exception;
use App\Owner;

class OwnerController extends Controller
{
    /**
     * Return a list of all owners.
     *
     * @return array
     */
    public function index(): array
    {
        return Owner::withCount('cars', 'addresses')->get()->toArray();
    }

    /**
     * Return a single owner.
     *
     * @param Owner $owner
     * @return Owner
     */
    public function show(Owner $owner): Owner
    {
        return $owner->load('addresses', 'cars');
    }

    /**
     * Store an owner.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $owner = Owner::create($request->all());

        return response()->json($owner, 201);
    }

    /**
     * Update an owner.
     *
     * @param Request $request
     * @param Owner $owner
     * @return JsonResponse
     */
    public function update(Request $request, Owner $owner): JsonResponse
    {
        $owner->update($request->all());

        return response()->json($owner, 200);
    }

    /**
     * Delete an owner.
     *
     * @param Owner $owner
     * @return JsonResponse
     * @throws Exception
     */
    public function delete(Owner $owner): JsonResponse
    {
        $owner->delete();

        return response()->json(null, 204);
    }
}
