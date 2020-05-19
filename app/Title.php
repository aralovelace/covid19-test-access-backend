<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends ReadOnlyBase
{
    protected $titlesArray = ['Mr','Mrs','Ms','Dr','Mx','Professor'];
}
