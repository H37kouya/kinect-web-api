<?php

namespace App\Repository;

use Carbon\Carbon;

interface GetPeopleCountRepositoryInterface
{
    /**
     * Count People Number Function
     *
     * @param Carbon $date
     * @return integer
     */
    public function count(Carbon $date): int;
}
