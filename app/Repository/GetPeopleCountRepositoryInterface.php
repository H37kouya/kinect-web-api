<?php

namespace App\Repository;

use Carbon\Carbon;

interface GetPeopleCountRepositoryInterface
{
    public function count(Carbon $date): int;
}
