<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamTranslation extends Model
{
    public $fillable = ['name','job','slogan','team_desc'];
}
