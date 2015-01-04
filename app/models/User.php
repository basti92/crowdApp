<?php

use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;

class User extends Eloquent implements ConfideUserInterface
{
    use ConfideUser;

    public function supporter()
    {
        return $this->belongsToMany('Project');
    }
}
