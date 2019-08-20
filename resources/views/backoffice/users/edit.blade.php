@extends('backoffice.layout')

@section('content')
<section class="column">
    <h1 class="title">Edit User</h1>
    <form method="POST" action="/users/{{$user->id}}">
        @method('PATCH')
        @csrf

        <div class="field">
        <label class="label" for="name">User Name</label>
        <div class="control">
            <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" name="name" type="text" placeholder="User name" value="{{ old('name', $user->name)}}">
        </div>
        </div>

        <div class="field">
        <label class="label" for="email">Email</label>
        <div class="control">
            <textarea class="textarea {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" placeholder="User email" >{{ old('email', $user->email) }}</textarea>
        </div>
        </div>

        <div class="field">
        <label class="label" for="avatar">avatar</label>
        <div class="control">
                <input class="input {{ $errors->has('avatar') ? 'is-danger' : '' }}" name="avatar" type="text" placeholder="avatar Url" value="{{ old('avatar', $user->avatar)}}">
            </div>
        </div>

        <div class="field is-grouped">
        <div class="control">
            <button type="submit" class="button is-link">Submit</button>
        </div>
        
        @include('partials.errors')
    </form>
</section>
@endsection