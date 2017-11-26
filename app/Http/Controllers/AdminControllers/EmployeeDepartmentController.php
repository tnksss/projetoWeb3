<?php

namespace ProjetoWeb3\Http\Controllers\EmployeeDepartmentController;

use ProjetoWeb3\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

class AdminController extends Controller
{
    public function create(){
    	$departments = Department::all()
    					->get()
    					->pluck('nome','id')
    					->prepend('', '');
    }
}