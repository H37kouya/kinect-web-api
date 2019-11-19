<?php

namespace App\Repository;

use Illuminate\Http\Request;

interface DetectedPersonRepositoryInterface
{
    public function create(Request $request): bool;
}
