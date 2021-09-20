<?php


namespace App\Filters;


class ProductFilter extends  QueryFilter
{
    public function category($id){
        return $this->builder->where('id', $id);
    }
}
