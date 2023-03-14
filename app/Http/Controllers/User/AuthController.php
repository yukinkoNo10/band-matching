<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.login');
    }

    //ログイン処理
    public function login(Request $request)
    {
        $credencials = $request->validate([
            'email'=>['required', 'email'],
            'password'=>['required'],
        ]);
        
        //ログイン情報が正しいかを判断
        if(Auth::attempt($credencials, $request->is_remember)) {
            //セッション再生成
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'メールアドレスまたはパスワードが正しくありません。',
        ])->onlyInput('email');

    }

    //ログアウト
    public function logout(Request $request)
    {
        //ログアウト処理
        Auth::logout();
        //現在使っているセッションの無効化
        $request->session()->invalidate();
        //セッション無効化を再生成
        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
