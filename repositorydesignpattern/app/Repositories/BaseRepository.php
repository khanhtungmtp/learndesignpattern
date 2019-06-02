<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAllList(){
        return $this->model->all();
    }

    public function getListByID($id){
        return $this->model->findOrFail($id);
    }

    public function create($data){
        return $this->model->create($data);
    }

    public function update($id, $data){
        $model = $this->getListByID($id);
        return $model->update($data);
    }

    public function delete($id){
        $model = $this->getListByID($id);
        return $model->delete();
    }
}
