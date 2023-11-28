<?php
namespace App\Models\Contracts;
use App\Models\Contracts\CrudInterface;

abstract class BaseModel implements CrudInterface{
    protected $connection;
    protected $table ;
    protected $primaryKey = 'id';
    protected $pageSize;
    protected $attributes;


    public function __construct()
    {
        
    }
    public function getAttribute($key)
    {

    }


}