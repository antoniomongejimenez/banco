<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCuentaRequest;
use App\Http\Requests\UpdateCuentaRequest;
use App\Models\Cliente;
use App\Models\Cuenta;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuentas = Cuenta::all();

        return view('cuentas.index', [
            'cuentas' => $cuentas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cuenta = new Cuenta();

        return view('cuentas.create', [
            'cuenta' => $cuenta
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCuentaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCuentaRequest $request)
    {
        $validados = $request->validated();
        $cuenta = new Cuenta($validados);
        $cuenta->save();
        return redirect()->route('cuentas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function show(Cuenta $cuenta)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuenta $cuenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCuentaRequest  $request
     * @param  \App\Models\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCuentaRequest $request, Cuenta $cuenta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuenta $cuenta)
    {
        $cuenta->clientes()->detach();
        $cuenta->delete();

        return redirect()->route('cuentas.index')->with('success', 'Cuenta borrada con exito.');
    }

    public function titulares(Cuenta $cuenta)
    {
        $clientes = $cuenta->clientes;

        return view('cuentas.titulares', [
            'clientes' => $clientes,
            'cuenta' => $cuenta,
        ]);
    }

    public function verlistadoclientes(Cuenta $cuenta)
    {
        $clientes = Cliente::all();

        return view('cuentas.todoslosclientes', [
            'clientes' => $clientes,
            'cuenta' => $cuenta,
        ]);
    }

    public function meter(Cuenta $cuenta, Cliente $cliente)
    {
        $cuenta->clientes()->attach($cliente);

        return redirect()->route('vertitulares', $cuenta)->with('success', 'Titular añadido con exito.');

    }


    public function movimientoscuenta(Cuenta $cuenta)
    {

        $movimientos = $cuenta->movimientos()->get();

        $saldo = $cuenta->with('movimientos')->withSum('movimientos', 'importe')->find($cuenta->id);



        return view('cuentas.movimiento', [
            'movimientos' => $movimientos,
            'saldo' => $saldo,
        ]);
    }


    public function eliminar(Cuenta $cuenta, Cliente $cliente)
    {
        $cuenta->clientes()->where('id', $cliente->id)->detach();

        return redirect()->route('vertitulares', $cuenta)->with('success', 'Titular eliminado.');

    }





}
