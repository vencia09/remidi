@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Home</h1>
    </div>
    @include('dashboard.categories.linkback')
    <div class="col-md-5">
        <form method="POST" action="/dashboard/categories">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Tambahkan Home</label>
                <input type="text" class="form-control" id="name" name="name" />
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        const nama = document.getElementById("name");
        const slug = document.getElementById("slug");

        nama.addEventListener("keyup", function() {
            let preslug = nama.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });
    </script>
@endsection
