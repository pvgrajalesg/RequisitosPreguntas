<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectManager extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'project_managers';
    public $timestamps = false;
    protected $fillable = ['user_id'];
    public function user() {
        return $this->hasOne('App\User','id', "user_id");
    }
}
