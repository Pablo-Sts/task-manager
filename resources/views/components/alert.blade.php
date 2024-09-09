@if (session()->has("success"))
<div class="container-fluid p-3">
        <ul class="list-group">
            <li class="list-group-item list-group-item-success text-dark fs-5 p-3">{{ session("success") }}</li>
        </ul>
    </div>
@endif

@if (session()->has("message"))
<div class="container-fluid p-3">
        <ul class="list-group">
            <li class="list-group-item list-group-item-info text-dark fs-5 p-3">{{ session("message") }}</li>
        </ul>
    </div>
@endif

@if (session()->has("errror"))
<div class="container-fluid p-3">
        <ul class="list-group">
            <li class="list-group-item list-group-item-danger text-dark fs-5 p-3">{{ session("error") }}</li>
        </ul>
    </div>
@endif

@if ($errors->any())
    <div class="container-fluid p-3">
        <ul class="list-group">
            @foreach ($errors->all() as $error)
                <li class="list-group-item list-group-item-danger text-danger fs-5 p-3">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif