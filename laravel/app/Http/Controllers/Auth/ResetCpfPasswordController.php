<?php
 
namespace App\Http\Controllers\Auth;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
 
class ResetCpfPasswordController extends Controller
{
    public function showResetForm()
    {
        return view('auth.reset-cpf-password');
    }
 
    public function reset(Request $request)
    {
        $request->validate([
            'cpf' => 'required|string',
            'password' => 'required|string|confirmed|min:8',
        ]);
 
        $user = User::where('cpf', $request->cpf)->first();
 
        if (!$user) {
            return back()->withErrors(['cpf' => 'CPF não encontrado.']);
        }
 
        $user->password = Hash::make($request->password);
        $user->save();
 
        return redirect()->route('login')->with('status', 'Senha redefinida com sucesso!');
    }
}