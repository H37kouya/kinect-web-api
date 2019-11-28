<?php

namespace App\Repository;

use Carbon\Carbon;
use App\Models\DetectedPerson;
use App\Repository\GetPeopleCountRepositoryInterface;

class GetPeopleCountRepository implements GetPeopleCountRepositoryInterface
{
    /**
     * Count People Number Function
     *
     * @param Carbon $date
     * @return integer
     */
    public function count(Carbon $date): int
    {
        return DetectedPerson::whereDate('created_at', '=', $date->format("Y-m-d"))->count();
    }
}
