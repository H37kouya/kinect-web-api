<?php

namespace App\Repository;

use Illuminate\Http\Request;
use App\Models\DetectedPerson;
use App\Repository\DetectedPersonRepositoryInterface;

class DetectedPersonRepository implements DetectedPersonRepositoryInterface
{
    /**
     * Create new Column
     * This function should throw error, but I have no time to make Throw Error Functions.
     *
     * @param Request $request
     * @return boolean
     */
    public function create(Request $request): bool
    {
        DetectedPerson::create($request->all());

        return true;
    }
}
