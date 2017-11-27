<?php

namespace ProjetoWeb3\Http\Controllers\AdminControllers;

use ProjetoWeb3\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ProjetoWeb3\Models\Employee;
use ProjetoWeb3\Models\Department;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$employees = Employee::orderBy('id')->paginate(5);
    	
        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        $departments = Department::all();
        
        return view('employee.create', [
            'employee' => new Employee(), 'departments' => $departments
        ]);
    }
	
	public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|between:2,100',
            'lastName' => 'required|between:2,255',
            'role' => 'required|between:2,50',
            'department_id' => 'required|integer',

        ]);

        $fields = $request->only('name', 'lastName','role', 'department_id');
        Employee::create($fields);

        return redirect()
            ->route('employees.index')
            ->with('success', 'Funcionário cadastrado com sucesso');
    }




    public function edit($id)
    {
        $departments = Department::all();
        return view('employee.edit', [
            'employee' => Employee::find($id), 'departments' => $departments
        ]);
    }

    public function update(Request $request, $id)
    {
        $departments = Department::all();
        
        $this->validate($request, [
            'name' => 'required|between:2,100',
            'lastName' => 'required|between:4,255',
            'role' => 'required|between:4,50',
        ]);

        $fields = $request->only('name', 'lastName','role');
        Employee::find($id)->fill($fields)->save();

        return redirect()
            ->route('employees.show', ['id' => $id])
            ->with('success', 'Funcionário atualizado com sucesso.');
    }
    public function show($id)
    {
        $employee = Employee::find($id);
        
        return view('employee.show', [
            'employee' => $employee
        ]);
    }
    public function destroy($id)
    {
        Employee::destroy($id);
        return redirect()
            ->route('employees.index')
            ->with('success', 'Funcionário deletado com sucesso.');
    }

    public function upload()
    {
    }

    public function move()
    {
    }
    
}
