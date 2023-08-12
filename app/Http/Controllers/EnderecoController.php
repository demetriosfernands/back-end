<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;
use function Termwind\renderUsing;

class EnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $endereco = Endereco::all();
        return json_encode($endereco);
    }

    public function store(Request $request)
    {

        $endereco = Endereco::create($request->all());

        return json_encode($endereco);
    }

    public function show(string $endereco)
    {
        return json_encode(Endereco::find($endereco));
    }

    public function buscar(string $search)
    {
        $enderecos = Endereco::where('rua', 'like', '%' . $search. '%')
            ->orWhere('cep', 'like', '%' . $search . '%')->get();
        return json_encode($enderecos);
    }

    public function update(Request $request, Endereco $endereco)
    {
        $endereco->update($request->all());

        return json_encode($endereco);
    }

    public function destroy(string $endereco)
    {
        Endereco::destroy($endereco);
    }
}
