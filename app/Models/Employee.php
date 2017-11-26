<?php

namespace ProjetoWeb3\Models;

use Illuminate\Database\Eloquent\Model;
use ProjetoWeb3\Models\Department;

class Employee extends Model
{
    protected $fillable = ['name','lastName','role','department_id'];
    protected $guarded = ['id', 'created_at', 'update_at'];	
   
  	public function department()
  	{
  		return $this->belongsTo('ProjetoWeb3\Models\Department');
  	}

    
}
