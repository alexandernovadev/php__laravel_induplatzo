<div class="mt-3 col-8 mx-auto">
    @if ($errors->any())
        @foreach ($errors->all() as $err)
            - {{ $err }} <br>
        @endforeach    
        
    @endif

    <form action="{{ route('pages.store') }}" method="POST">
        @csrf
        <div class="col-sm-4">
            <input 
            type="text" 
            name="name"
            class="form-control"
            value="{{ old('name') }}"
            placeholder="Ingresa your Name"
        />
        <button class="btn btn-danger">SEND</button>
        </div>
    </form>
</div>