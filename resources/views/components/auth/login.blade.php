@extends('templates.layouts.index')
@section('content')
<section class="container max-width-adaptive-xs margin-top-md margin-bottom-md text-center">
    <h1>Login</h1>
    <x-auth.login-form />
</section>
@endsection

@push('module-scripts')
<x-auth.script.signin-script />
@endpush