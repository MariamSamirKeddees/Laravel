@extends('layouts.app')

@section('container')
<div class="card w-50 m-auto mt-5">
    <h5 class="card-header">Post Info</h5>
    <div class="card-body">
        <h5 class="card-title">Title:- {{current($post)['title']}}</h5>
        <h6>Description:-</h6>
        <p>Lorem ipsum, dolor sit amet consectetur, cupiditate nostrum quisquam amet? Obcaecati inventore aspernatur aliquam distinctio voluptatibus quae! Hic, illo deserunt.</p>
    </div>
</div>
@endsection
