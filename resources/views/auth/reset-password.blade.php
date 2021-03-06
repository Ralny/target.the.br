@extends('layout.guest', ['pageclass' => 'login-forgot-on'])

@section('content')
<div class="login-forgot">
	<div class="mb-20">
		<h3>Redefinir senha</h3>
		<p class="opacity-60">Digite seu email e nova senha!</p>
	</div>
	<form class="form" method="POST" action="{{ route('password.update') }}">
		@csrf
		<!-- Password Reset Token -->
		<input type="hidden" name="token" value="{{ $request->route('token') }}">
		<div class="form-group">
			<input
				class="h-auto px-8 py-4 mb-3 text-white placeholder-white border-0 form-control opacity-70 bg-dark-o-70 rounded-pill"
				type="text" placeholder="E-mail" name="email" autocomplete="off" />
		</div>
		<div class="form-group">
			<input
				class="h-auto px-8 py-4 mb-3 text-white placeholder-white border-0 form-control opacity-70 bg-dark-o-70 rounded-pill"
				type="password" placeholder="Nova Senha" name="password" required />
		</div>
		<div class="form-group">
			<input
				class="h-auto px-8 py-4 mb-3 text-white placeholder-white border-0 form-control opacity-70 bg-dark-o-70 rounded-pill"
				type="password" placeholder="Confirmar senha" name="password_confirmation" required />

			<!-- Session Status -->
			<x-auth-session-status :status="session('status')" />

			<!-- Validation Errors -->
			<x-auth-validation-errors :errors="$errors" />
		</div>

		<div class="form-group">
			<button type="submit"
				class="py-3 m-2 btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15">Redifinir Senha</button>
		</div>
	</form>
</div>
@endsection
