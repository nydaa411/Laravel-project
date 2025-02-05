@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header text-center bg-primary text-white fw-bold">
                    {{ __('Dashboard') }}
                </div>

                <div class="card-body p-4">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="d-flex flex-column flex-md-row gap-3 mb-4">
                        <a href="{{ route('posts.index') }}" class="btn btn-primary flex-grow-1">View Posts</a>
                        <a href="{{ route('posts.create') }}" class="btn btn-success flex-grow-1">Create New Post</a>
                    </div>

                    <div class="text-end">
                        <a href="{{ route('logout') }}" class="btn btn-danger"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </div>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

