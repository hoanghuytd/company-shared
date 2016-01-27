<?php

namespace ShareModel;

use Illuminate\Foundation\Auth\User as Authenticatable;

class ShareUser extends Authenticatable
{
    function add(){
        return 1 + 1;
    }
}
