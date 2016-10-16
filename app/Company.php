<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $table = 'companies';
  protected $fillable = ['name','bidding_capacity','resource', 'project_manager_id'];
  public function projectManager() {
      return $this->hasOne('App\ProjectManager','id', "project_manager_id");
  }
}
