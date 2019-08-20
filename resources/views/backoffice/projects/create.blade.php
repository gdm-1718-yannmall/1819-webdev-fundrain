@extends('backoffice.layout')

@section('content')
<section class="column">
    <h1 class="title">Create new project</h1>
    <form method="POST" action="/backoffice/projects">
        @csrf

        <div class="field">
        <label class="label" for="name">Project Name</label>
        <div class="control">
            <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" name="name" type="text" placeholder="Project name" value="{{ old('name')}}">
        </div>
        </div>

        <div class="field">
        <label class="label" for="description">Description</label>
        <div class="control">
            <textarea class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" placeholder="Project description" >{{ old('description') }}</textarea>
        </div>
        </div>

        <div class="field">
        <label class="label" for="image">Image</label>
        <div class="control">
                <input class="input {{ $errors->has('image') ? 'is-danger' : '' }}" name="image" type="text" placeholder="Image Url" value="{{ old('image')}}">
            </div>
        </div>

        <div class="field">
                <label class="label" for="funds_goal">Funds Goal</label>
                <div class="control">
                        <input class="input {{ $errors->has('funds_goal') ? 'is-danger' : '' }}" name="funds_goal" type="number" placeholder="Funds Goal" value="{{ old('funds_goal')}}">
                    </div>
                </div>

        <div class="field">
                <label class="label" for="category">Category</label>
                <div class="select">
                    <select name="categorie">
                        @foreach ($categories as $categorie)
                            <option>{{ $categorie->name }}</option>
                        @endforeach
                    </select>
                </div>
        </div>

        <div class="field is-grouped">
        <div class="control">
            <button type="submit" class="button is-link">Submit</button>
        </div>
        <div class="control">
            <button class="button is-text">Cancel</button>
        </div>
        </div> 
        
        @include('partials.errors')
    </form>
</section>
@endsection