<?php

namespace  App\Filters;

class GroupFilter extends QueryFilter{
    public function teecher_id($id = null){
        return $this->builder->when($id, function($query) use($id){
            $query->where('teecher_id', $id);
        });}

    public function search_field($search_string = ''){
        return $this->builder
            ->where('science_time', 'LIKE', '%'.$search_string.'%');
    }







    }
