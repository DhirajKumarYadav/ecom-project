@extends('layout')
@section('content')
<style>
    .card-title{
        color: black;
    }
    .col-sm-3{
    margin-left: 230px;
    margin-bottom: 50px
    }
    .fas {
        color: black;
        font-size: 102px;

    }
    /* .card-body{
        padding-left: 100px;
    } */
</style>
<br><br><br><br><br><br><br><br>
<div class="row">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <center>
      <i class="fas fa-check"></i>
        <h2 class="card-title" >Approve Leave </h2>
        <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
        <a href="apply.earn" class="btn btn-primary">APPROVE</a>
      </div>
      </center>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <center>
      <i class="fas fa-window-close"></i>
        <h1 class="card-title">Reject Leave </h1>
        <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
        <a href="apply.casual" class="btn btn-primary">REJECT</a>
      </div>
      </center>
    </div>
  </div>
</div>
@endsection