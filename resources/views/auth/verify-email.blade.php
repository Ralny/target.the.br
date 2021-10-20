@extends('layout.guest', ['pageclass' => 'login-signin-on'])

@section('content')
<!--begin::Login Sign in form-->
<div class="login-signin">
  <div class="mb-4">
    <h3>Verifique seu e-mail</h3>
    <p class="opacity-60">Obrigado por inscrever-se! Antes de começar, você pode verificar o seu
       endereço de e-mail clicando no link que acabamos de enviar para você? Se você não recebeu o e-mail, nós iremos
       enviar outro.</p>
  </div>
  @if (session('status') == 'verification-link-sent')
  <div class="mb-4 text-success">
    {{ __('A new verification link has been sent to the email address you provided during registration. Please check your inbox!') }}
  </div>
  @endif
  <form method="POST" action="{{ route('verification.send') }}" class="mb-20">
    @csrf
    <div>
      <button type="submit" class="px-5 py-3 m-2 btn btn-pill btn-white font-weight-bold opacity-90">
        {{ __('Resend Verification Email') }}
      </button>
    </div>
  </form>
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <a href="{{ route('logout') }}" onclick="event.preventDefault();
      this.closest('form').submit();"
      class="px-5 py-3 m-2 btn btn-pill btn-outline-white font-weight-bold opacity-70">Sair</a>
  </form>
</div>
<!--end::Login Sign in form-->
@endsection
