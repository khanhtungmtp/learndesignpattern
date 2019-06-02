<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
/**
 * Bản vẽ các hàm sẽ code trong BaseReposity
 *
 *
 */
interface BaseRepositoryInterface
{
    public function getAllList();

    public function getListByID($id);

    public function create($data);

    public function update($id, $data);

    public function delete($id);
}
