<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Models\Clients;
use App\MyClass\Message;
use Illuminate\Http\Request;

class WebController extends Controller {
    public $message;

    public function __construct() {
        $this->message = new Message();
    }

    /**
    * Display a listing of the resource.
    */

    public function index( ?Request $request ) {
        $search = request( 'search' );
        if ( $search ) {
            $s = Clients::where( 'genre', 'like', '%'.$request->genre .'%' );
            if ( $request->name ) {
                $s->where( 'name', 'like', '%'.$request->name.'%' );
            }
            if ( $request->document ) {
                $s->where( 'document', 'like', '%'. preg_replace( '/[^0-9]/', '', $request->document ) .'%' );
            }
            if ( $request->date_birth ) {
                $s->where( 'date_birth', 'like', '%'.$request->date_birth.'%' );
            }
            if ( $request->states != 'all' ) {
                $s->where( 'states', 'like', '%'.$request->states.'%' );
            }
            if ( $request->city != 'all' ) {
                $s->where( 'city', 'like', '%'.$request->city.'%' );
            }

            $clients = $s->get();
        } else {
            $clients = Clients::all();
        }

        return view( 'web.view.home', [
            'title' => 'Aplicação UPD8',
            'client' => $clients
        ] );
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create() {

        return view( 'web.createdClient', [
            'title' => 'Aplicação UPD8 | Criar Cliente',
        ] );
    }

    public function created( ClientRequest $request ) {
        $newClient = new Clients();

        $newClient->name = $request->name;
        $newClient->document = preg_replace( '/[^0-9]/', '', $request->document );
        $newClient->date_birth = $request->date_birth;
        $newClient->genre = $request->genre;
        $newClient->address = $request->address;
        $newClient->states = $request->states;
        $newClient->city = $request->city;

        if ( $newClient->save() ) {
            return redirect( 'created' )->with( 'sucesso', 'Cliente cadastrado!' );
        }

    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( string $id ) {
        $client = Clients::findOrFail( $id );

        return view( 'web.updateClient', [
            'title' => 'Aplicação UPD8 | Update Cliente',
            'client' => $client
        ] );
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( Request $request, string $id ) {
        $client = Clients::findOrFail( $id );
        $client->name = $request->name;
        $client->document = preg_replace( '/[^0-9]/', '', $request->document );
        $client->date_birth = $request->date_birth;
        $client->genre = $request->genre;
        $client->address = $request->address;
        $client->states = $request->states;
        $client->city = $request->city;
        $client->update();

        return redirect( '/update/'.$id )->with( 'sucesso', 'Cliente atualizado!' );
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( string $id ) {
        Clients::findOrFail( $id )->delete();

        return redirect( '/' )->with( 'sucesso', 'Cliente Deletado!' );
    }
}
