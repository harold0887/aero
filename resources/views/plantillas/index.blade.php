@extends('layouts.app',[
'class' => '',
'folderActive' => '',
'elementActive' => 'dashboard',
'title'=>'Plantillas',
'navbarClass'=>'navbar-transparent',
'activePage'=>'plantillas',
])

@section('content')

<livewire:admin.index-posts />

@endsection
@include('includes.alert-error')