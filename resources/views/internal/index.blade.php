@extends('layouts.app',[
'class' => '',
'folderActive' => '',
'elementActive' => 'dashboard',
'title'=>'Contacto Interno',
'navbarClass'=>'navbar-transparent',
'activePage'=>'internal',
])

@section('content')

<livewire:admin.index-internal />

@endsection
@include('includes.alert-error')