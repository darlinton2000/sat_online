<?php

namespace App\Http\Controllers;

use App\Models\Om;
use App\Models\PostoGrad;
use App\Models\Setor;
use App\Models\Subunidade;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.user_list',[
            'users' => User::with('posto_grad', 'subunidade', 'setor', 'om')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.user_form', [
            'user' => null,
            'posto_grads' => PostoGrad::all(),
            'subunidades' => Subunidade::all(),
            'setores' => Setor::all(),
            'oms' => Om::all()
        ]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.user_form', [
            'user' => $user,
            'posto_grads' => PostoGrad::all(),
            'subunidades' => Subunidade::all(),
            'setores' => Setor::all(),
            'oms' => Om::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|min:4',
            'cpf' => 'digits:11',
            'prec_cp' => 'digits:9',
            'idt_militar' => 'digits:10'
        ]);
        try {
            $user->name = $request->name;
            $user->cpf = $request->cpf;
            $user->prec_cp = $request->prec_cp;
            $user->idt_militar = $request->idt_militar;
            $user->posto_grad_id = $request->posto_grad_id;
            $user->subunidade_id = $request->subunidade_id;
            $user->setor_id = $request->setor_id;
            $user->om_id = $request->om_id;
            
            $user->save();
            
            $key = 'success';
            $message = "Usuário {$user->name} atualizado com sucesso.";
        } catch (\Exception $e) {
            $key = 'error';
            $message = 'Erro ao atualizar o usuário: ' . $e->getMessage();
        }
    
        return redirect(route('users.index'))->with($key, $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
