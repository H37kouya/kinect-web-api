<?php

namespace App\Services;

use Exception;
use Illuminate\Http\Request;
use App\Repository\DetectedPersonRepositoryInterface;

class DetectedPersonService
{
    /**
     * DetectedPersonRepositoryInterface
     *
     * @var DetectedPersonRepositoryInterface
     */
    protected $_detected_person_repository;

    public function __construct(DetectedPersonRepositoryInterface $detected_person_repository)
    {
        $this->_detected_person_repository = $detected_person_repository;
    }

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
}
