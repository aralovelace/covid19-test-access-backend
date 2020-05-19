<?php

namespace App;


class ReadOnlyBase
{
    protected $titlesArray =[];

    public function all(){
        return $this->titlesArray;
    }
    public function get( $id ){
        return $this->titlesArray[$id];
    }
}
