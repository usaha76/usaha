@extends('layouts.app')
@section('content')
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="active">Seting Harga</li>
          </ul>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2 class="panel-title">Seting Harga</h2>
            </div>

            <div class="panel-body">
              <p><a class="btn btn-primary" href="{{route('hargas.create')}}">Tambah</a></p>
              {!! $html->table(['class'=>'table-striped table-bordered']) !!}
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('scripts')
  {!! $html->scripts() !!}
@endsection
