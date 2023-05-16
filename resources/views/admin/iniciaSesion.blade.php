@extends('layouts.base')
@section('title', 'login')
@section('body')
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-md-8">

                    <div class="card shadow-lg rounded-5 bg-light">
                        <div class="card-header text-muted">{{ __('INTRANET') }}</div>

                        <div class="card-body">
                            <h1 class="fs-4 card-title fw-bold mb-3">Acceso</h1>
                            <form id="inicio_sesion_form">

                                <div class="row mb-3">
                                    <label for=""
                                        class="col-md-4 col-form-label text-md-end">{{ __('Usuario') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control bg-light rounded-5"
                                            @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                            required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control bg-light rounded-5"
                                            @error('password') is-invalid @enderror" name="password" required
                                            autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 offset-md-3">
                                        <div class="form-check">
                                            <div class="d-flex justify-content-center">
                                                <img class="m-3" src="{{ captcha_src() }}">
                                            </div>
                                            
                                            <input type="text" class="form-control bg-light rounded-5" name="captcha">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4 d-flex justify-content-end">
                                        <button type="button" name="check" class="btn rounded-5 btn-blue"
                                            onclick="login()">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        const login = async () => {
            // URL para iniciar sesion POST
            const url = route('usuario_sesion');
            // Obtener formulario y convertirlo a FormData
            const formulario = document.getElementById('inicio_sesion_form');
            const formData = new FormData(formulario);
            // Establecer metodo y encabezados
            const init = {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': $('#csrf').attr('content'),
                    Accept: 'application/json'
                }
            }
            // Mandar peticion al back
            const req = await fetch(url, init);
            // Checar si la respuesta es un 200
            if (req.ok) {
                window.location.href = route('panel_admin');
                return;
            } else if (req.status == 429) {
                // Obtener respuesta del servidor
                const res = await req.json();
                await Swal.fire({
                    icon: 'error',
                    title: 'ERROR',
                    text: res
                });
                location.reload();
                return;
            }

            Swal.fire({
                icon: 'error',
                title: 'ERROR',
                text: 'Credenciales incorrectas'
            });
        }
    </script>
@endpush
