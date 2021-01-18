@extends('layouts.appbuild')

@section('content')
<div class="card text-center">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            @foreach($cats as $cat)
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('faqs.index', $cat->id) }}">{{ $cat->name }}</a>
            </li>
            @endforeach
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('faqs.create') }}">Create new Category +</a>
            </li>
        </ul>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a new FAQ</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('faq.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="categoryName" class="col-md-4 col-form-label text-md-right">Category Name
                                    :</label>
                                <div class="col-md-6">
                                    <input id="categoryName" type="text"
                                        class="form-control @error('categoryName') is-invalid @enderror"
                                        name="categoryName" value="{{ old('categoryName') }}"
                                        autocomplete="categoryName" autofocus>

                                    @error('question')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="question" class="col-md-4 col-form-label text-md-right">Question :</label>
                                <div class="col-md-6">
                                    <input id="question" type="text"
                                        class="form-control @error('question') is-invalid @enderror" name="question"
                                        value="{{ old('question') }}" autocomplete="question" autofocus>

                                    @error('question')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="shortansw" class="col-md-4 col-form-label text-md-right">shortansw :</label>
                                <div class="col-md-6">
                                    <input id="shortansw" type="text"
                                        class="form-control @error('shortansw') is-invalid @enderror" name="shortansw"
                                        autocomplete="current-shortansw">

                                    @error('shortansw')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="longansw" class="col-md-4 col-form-label text-md-right">longansw :</label>
                                <div class="col-md-6">
                                    <input id="longansw" type="text"
                                        class="form-control @error('longansw') is-invalid @enderror" name="longansw"
                                        autocomplete="current-longansw">

                                    @error('longansw')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Post
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
