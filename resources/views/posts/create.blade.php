@extends('partials.layout')
@section('title', __('New Post'))
@section('content')
    <div class="card bg-base-300 shadow-sm w-1/2 mx-auto">
        <div class="card-body">
            <h1 class="card-title">{{ __('New post') }}</h1>
            <form action="{{route('posts.store')}}" method="POST">
                @csrf
            <form>
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Title') }}</legend>
                    <input name="title" type="text" class="input w-full" placeholder="Title" value= "{{old ('title') }}" />
                    @error('title')
                    <p class="label text-error">{{$message}}</p>
                    @enderror
                </fieldset>
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{__('Content') }}</legend>
                    <textarea name='body' class="textarea @error('body') border-error @enderror h-48 input w-full"  placeholder="{{__('Write something amazing...') }}">{{old ('body') }}</textarea>
                    @error('body')
                    <p class="label text-error">{{$message}}</p>
                    @enderror
                </fieldset>
                <button class="btn btn-primary mt-2">Create</button>
            </form>
        </div>
    </div>
@endsection
