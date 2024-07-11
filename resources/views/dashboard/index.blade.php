@extends('dashboard.layouts.main')
@section('content')
    <div class="max-w-lg p-4 text-center bg-white border border-gray-300 rounded-md">
        <p>Welcome to admin {{ $user->name }}!</p>
    </div>
@endsection
