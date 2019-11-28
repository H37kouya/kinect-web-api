<?php

namespace App\Repository;

use Illuminate\Http\Request;

interface DetectedPersonRepositoryInterface
{
    /**
     * Create new Column
     *
     * @param Request $request
     * @return boolean
     */
    public function create(Request $request): bool;
}
