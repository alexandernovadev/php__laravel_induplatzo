@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($posts as $post)
                        *{{$post->id}} -- {{$post->title}}// {{$post->get_title}}
                        USER: {{$post->user_id}} |

                        <strong>{{ !is_null($post->user) ? $post->user->name : 'SIN NAME' }}</strong>
                    
                        <br>
                    @endforeach
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            @foreach ($users as $user)
                {{$user->name}} | <b>{{$user->posts->count() }}</b><hr>
            @endforeach
        </div>  
    </div>
</div>
@endsection
