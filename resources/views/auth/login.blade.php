@extends('layout.guest', ['pageclass' => 'login-signin-on'])

@section('content')
<!--begin::Login Sign in form-->
<div class="login-signin">
  <div class="mb-20">
    <h2>Para entrar, Informe seus dados!</h2>
  </div>

  <!-- Session Status -->
  {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

  <form class="form" id="kt_login_signin_form2" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
      <input
        class="h-auto px-8 py-4 mb-5 text-white placeholder-white border-0 form-control opacity-70 bg-dark-o-70 rounded-pill"
        id="email" type="email" placeholder="E-mail" name="email" :value="old('email')" autocomplete="off" />
    </div>
    <div class="form-group">
      <input
        class="h-auto px-8 py-4 mb-3 text-white placeholder-white border-0 form-control opacity-70 bg-dark-o-70 rounded-pill"
        type="password" placeholder="Senha" name="password" id="password" class="block w-full mt-1" type="password"
        wire:name="password" required autocomplete="current-password" />

      <!-- Validation Errors -->
      <x-auth-validation-errors :errors="$errors" />

      <!-- Session Status -->
      <x-auth-session-status :status="session('status')" />
    </div>

    <div class="flex-wrap px-8 form-group d-flex justify-content-between align-items-center">
      <div class="checkbox-inline">
        <label class="m-0 text-white checkbox checkbox-outline checkbox-white">
          <input type="checkbox" name="remember" />
          <span></span>Lembra-me</label>
      </div>
      <a href="{{ route('password.request') }}" id="kt_login_forgot" class="text-white font-weight-bold">
        {{ __(' Esqueçeu sua senha?') }}
      </a>
    </div>
    <div class="mt-10 text-center form-group">
      <button id="kt_login_signin_submit2" type="submit"
        class="py-3 btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15">Entrar</button>

    </div>
  </form>
  <div class="mt-10">
    <span class="mr-4 opacity-70">Não tem uma conta?</span>
    <a href="/register" id="kt_login_signup" class="text-white font-weight-bold">Experimente grátis!</a>
  </div>
</div>
<!--end::Login Sign in form-->
@endsection
