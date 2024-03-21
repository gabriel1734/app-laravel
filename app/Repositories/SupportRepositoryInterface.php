<?php

namespace App\Repositories;
use App\Repositories\PaginationInterface;

interface SupportRepositoryInterface {

    public function paginate(int $page = 1, int $totalPerPage = 15, string $filter = null) : PaginationInterface;
    public function getAll(string $filter = null) : array;

    public function findOne(string $id) : \stdClass | null;

    public function new(\App\DTO\CreateSupportDTO $dto) : \stdClass;

    public function update(\App\DTO\UpdateSupportDTO $dto) : \stdClass | null;

    public function delete(string $id) : bool | null;

}
