@extends('layouts.main')

@section('title', 'Dashboard')
@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-lg-6 col-sm-6 ">
      <div class="card bg-success">
        <div class="stat-widget-two card-body">
          <div class="stat-content">
            <div class="stat-text text-dark">
              Total Uang Masuk
            </div>
            <div class="stat-digit">
              <i class="fa fa-money"></i> {{$uangmasukformat}}
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="col-lg-6 col-sm-6">
      <div class="card">
        <div class="stat-widget-two card-body bg-danger">
          <div class="stat-content">
            <div class="stat-text text-white">
              Total Uang Keluar
            </div>
            <div class="stat-digit">
              <i class="fa fa-money text-white"></i> <span class="text-white">{{$uangkeluarformat}}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection