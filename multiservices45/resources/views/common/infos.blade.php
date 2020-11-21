@if (session()->has('success'))
    <div class="container mt-5 text-center">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            @if(is_array(session()->get('success')))
            <ul>
                @foreach (session()->get('success') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
            @else
                {{ session()->get('success') }}
            @endif
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@endif

@if (session()->has('error'))
    <div class="container mt-5 text-center">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            @if(is_array(session()->get('error')))
            <ul>
                @foreach (session()->get('error') as $key => $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
            @else
                {{ session()->get('error') }}
            @endif
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@endif