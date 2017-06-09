<?php

namespace App\Http\Controllers;

use App\AddressEmployee;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Employee;
use View;
use DB;
use Carbon\Carbon;
use GuzzleHttp\Client;
class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $empleados = Employee::all();

        return View::make('empleados.index', [
            'empleados' => $empleados,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View::make('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Employee::create([
            'nombre' => $request->nombre,
            'apellido_paterno' => $request->paterno,
            'apellido_materno' => $request->materno,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'rfc' => $request->rfc,
            'email' => $request->email,
        ]);
        $refID = DB::table('employees')->select('id')->where('id', DB::raw("(select max(`id`) from employees)"))->get();
        AddressEmployee::create([
            'calle' => $request->calle,
            'colonia' => $request->colonia,
            'localidad' => $request->localidad,
            'municipio' => $request->municipio,
            'estado' => $request->estado,
            'pais' => $request->pais,
            'codigo_postal' => $request->codigo_postal,
            'no_exterior' => $request->no_exterior,
            'no_interior' => $request->no_interior,
            'telefono' => $request->telefono,
            'employee_id' => $refID[0]->id,
        ]);
        return redirect()->route('empleado.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $empleado = Employee::find($id);
        $empleado->address()->delete();
        $empleado->delete();
        return redirect()->route('empleado.index');

    }

    public function delete(Employee $empleado)
    {
        return View::make('empleados.delete', [
            'empleado' => $empleado,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function direccionCreate(Employee $empleado)
    {
        return View::make('empleados.direccion.create',[
            'empleado' => $empleado
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeDireccion(Request $request,Employee $empleado)
    {
        AddressEmployee::create([
            'calle' => $request->calle,
            'colonia' => $request->colonia,
            'localidad' => $request->localidad,
            'municipio' => $request->municipio,
            'estado' => $request->estado,
            'pais' => $request->pais,
            'codigo_postal' => $request->codigo_postal,
            'no_exterior' => $request->no_exterior,
            'no_interior' => $request->no_interior,
            'telefono' => $request->telefono,
            'employee_id' => $empleado->id,
        ]);
        return redirect()->route('empleado.index');
    }

    public function getDirecciones($id){
        $direcciones = Employee::find($id);
        return View::make('empleados.direccion.index',[
            'direcciones' => $direcciones->address,
            'empleado' => $direcciones
        ]);
    }

}
