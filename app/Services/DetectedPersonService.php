<?php

namespace App\Services;

use Exception;
use Carbon\Carbon;
use App\Helpers\Str;
use Illuminate\Http\Request;
use App\Repository\DetectedPersonRepositoryInterface;
use App\Repository\GetPeopleCountRepositoryInterface;

class DetectedPersonService
{
    /**
     * DetectedPersonRepositoryInterface
     *
     * @var DetectedPersonRepositoryInterface
     */
    protected $_detected_person_repository;

    /**
     * Undocumented variable
     *
     * @var GetPeopleCountRepositoryInterface
     */
    protected $_get_people_count_repository;

    public function __construct(
        DetectedPersonRepositoryInterface $detected_person_repository,
        GetPeopleCountRepositoryInterface $get_people_count_repository
    ) {
        $this->_detected_person_repository = $detected_person_repository;
        $this->_get_people_count_repository = $get_people_count_repository;
    }

    /**
     * create new column
     *
     * @param Request $request
     * @return string
     */
    public function create_column(Request $request): string
    {
        try {
            $this->_detected_person_repository->create($request);
            return 'success';
        } catch (Exception $e) {
            \Log::debug($e);
            return 'false';
        }
    }

    /**
     * get People Counter from DB
     *
     * @param Request $request
     * @return string
     */
    public function getPeopleCount(Request $request): string
    {
        try {
            $date = $request->query('date') ?? 'today';

            if (Str::strcmpBool($date, 'today')) {
                $now = Carbon::now();
                return (string)$this->_get_people_count_repository->count($now);
            }

            if (Str::strcmpBool($date, 'yesterday')) {
                $now = Carbon::now();
                return (string)$this->_get_people_count_repository->count($now->subDay());
            }

            return 'false';
        } catch (Exception $e) {
            \Log::debug($e);
            return 'false';
        }
    }
}
