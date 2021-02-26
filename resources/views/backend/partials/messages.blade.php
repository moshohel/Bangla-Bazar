@if ($errors->any())
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <ul>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </ul>
    </div>
@endif

{{-- Session Message for Successful Delete --}}
@if (Session::has('success'))
  <div class="alert alert-success">
    {{-- showing Session data --}}
    <p>{{ Session::get('success') }}</p>
  </div>
@endif

@if (Session::has('error'))
  <div class="alert alert-danger">
    <p>{{ Session::get('error') }}</p>
  </div>
@endif
