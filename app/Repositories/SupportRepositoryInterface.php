<?php

namespace App\Repositories;

interface SupportRepositoryInterface {
    public function getAll(string $filter = null) : array;

    public function findOne(string $id) : \stdClass | null;

    public function new(\App\DTO\CreateSupportDTO $dto) : \stdClass;

    public function update(\App\DTO\UpdateSupportDTO $dto) : \stdClass | null;

    public function delete(string $id) : bool | null;

}
