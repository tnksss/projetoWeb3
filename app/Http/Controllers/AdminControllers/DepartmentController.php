<?php

namespace ProjetoWeb3\Http\Controllers\AdminControllers;

use ProjetoWeb3\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ProjetoWeb3\Models\Department;
use ProjetoWeb3\Models\Employee;

class DepartmentController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$departments = Department::orderBy('id')->paginate(5);

        return view('department.index', compact('departments'));
    }

    public function create()
    {
        return view('department.create', [
            'department' => new Department()
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|between:2,100',
            'description' => 'required',
        ]);

        $fields = $request->only('name', 'description');
        (new Department($fields))->save();

        return redirect()
            ->route('departments.index')
            ->with('success', 'Departamento cadastrado com sucesso');
    }
    public function edit($id)
    {
        return view('department.edit', [
            'department' => Department::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|between:2,100',
            'description' => 'required',
        ]);

        $fields = $request->only('name', 'description');
        Department::find($id)->fill($fields)->save();

        return redirect()
            ->route('departments.show', ['id' => $id])
            ->with('success', 'Departamento atualizado com sucesso.');
    }
    public function show($id)
    {
            
        $department = Department::find($id);
        
        $employees = Employee::orderBy('id')->paginate(5);
        
        return view('department.show', [
            'department' => $department, 'employees' => $employees
        ]);
    }
    public function destroy($id)
    {
        
        Department::destroy($id);
        return redirect()
            ->route('departments.index')
            ->with('success', 'Departamento deletado com sucesso.');
    }
}
