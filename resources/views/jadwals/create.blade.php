@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <ul class="breadcrumb">
        <li> <a href=" {{ url('/home') }}">Dashboard</a></li>
        <li><a href="{{ url('fields.index') }}">Lapangan</a></li>
        <li><a href="{{ url('jadwals.index') }}">Jadwal</a></li>
        <li class="active">Tambah Jadwal</li>
      </ul>
      <div class="panel panel-default">

        <div class="panel-heading">
          <h2 class="panel-title">Tambah Jadwal</h2>
        </div>

        <div class="panel-body">
          {!! Form::open(['url'=>route('jadwals.store'),
          'method'=>'post','files'=>'true','class'=>'form-horizontal']) !!}
          @include('jadwals._form')
          {!! Form::close() !!}
        </div>

      </div>
    </div>
  </div>
</div>
@endsection
<!-- ,'enctype'=>'multipart/form-data' -->
