<?php

namespace App\Repository;

use Illuminate\Http\Request;
use App\Models\DetectedPerson;
use App\Repository\DetectedPersonRepositoryInterface;

class DetectedPersonRepository implements DetectedPersonRepositoryInterface
{
    public function create(Request $request): bool
    {
        DetectedPerson::create($request->all());

        return true;
    }
}
