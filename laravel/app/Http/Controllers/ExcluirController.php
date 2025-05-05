<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ExcluirController extends Controller
{
    public function destroy(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'cpf' => 'required|string',
            'email' => 'required|email',
        ]);

        if ($request->cpf !== $user->cpf || $request->email !== $user->email) {
            return back()->withErrors(['cpf' => 'CPF ou E-mail incorretos.']);
        }

        Auth::logout();

        $user->delete();

        return redirect('/')->with('status', 'Conta excluída com sucesso.');
    }
}
