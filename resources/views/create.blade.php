@extends('layouts.app')

@section('container')
    <form class="w-50 m-auto">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Post Creator</label>
            <select class="form-select">
                <option value="Mariam">Mariam</option>
                <option value="Ali">Ali</option>
                <option value="Samir">Samir</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
