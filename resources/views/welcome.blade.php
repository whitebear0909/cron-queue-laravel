@extends('layout.mainlayout')
@section('content')
<section class="jumbotron text-center">
    <div class="container">
        <form method="post" action="/gather" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="number">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="please input email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>

@endsection
<b></b>
