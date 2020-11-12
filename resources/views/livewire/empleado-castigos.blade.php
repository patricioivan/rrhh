@extends('layouts.app')
@section('content')
<section>
    @livewire('create-castigo', ['empleado' => $empleado ])
    
</section>
@endsection
