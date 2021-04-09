<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
        <div class="container pt-3">
            <div class="row">
                <div class="col-sm-8 mx-auto">
                    <div class="card p-3">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $err)
                                    - {{ $err}} <br>
                                @endforeach
                            </div>
                        @endif

                        <h3>Mi Form</h3>
                        <form action="{{ route('user.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-3">
                                    <input 
                                        type="text" 
                                        name="name"
                                        class="form-control"
                                        value="{{ old('name') }}"
                                        placeholder="Ingresa your name"
                                    />
                                </div>
                                <div class="col-sm-4">
                                    <input 
                                    type="text" 
                                    name="email"
                                    class="form-control"
                                    value="{{ old('email') }}"
                                    placeholder="Ingresa your Email"
                                />
                                </div>
                                <div class="col-sm-3">
                                    <input 
                                    type="text" 
                                    name="password"
                                    class="form-control"
                                    placeholder="Ingresa your password"
                                />
                                </div>
                                <div class="col">
                                    <button class="btn btn-success">ADD</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br>
                    <h3><u>Mis users</u></h3>
                    <table class="mt-1 table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <form action="{{ route('user.destroy', $user) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" value="Eliminar" class="btn btn-sm btn-danger" 
                                        onclick="return confirm(`¿Desea eliminar el usuario?`)">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
