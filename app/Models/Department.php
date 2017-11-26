<?php

namespace ProjetoWeb3\Models;

use Illuminate\Database\Eloquent\Model;
use ProjetoWeb3\Models\Employee;
class Department extends Model
{
    protected $fillable = ['name', 'description'];
    protected $guarded = ['id', 'created_at', 'update_at'];	
    public function countEmployees(){

  		return $this->hasMany('ProjetoWeb3\Models\Employee');

  		// return DB:table('employees')->where('department_id','$this->id')->count(); 		 
  	}

    
    
}
