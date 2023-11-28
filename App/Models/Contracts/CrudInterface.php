<?php
namespace App\Models\Contracts;


interface CrudInterface{

    #create

    public function Create(array $data) : int;

    #read(single|multiple)
    public function find(int $id) : object;
    public function get(array $columns, array $where): array;
    #update
    public function update(array $data, array $where): int;
    #delete
    public function delete(array $where): int;
}