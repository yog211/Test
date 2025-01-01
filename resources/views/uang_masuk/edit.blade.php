@extends('layouts.main')

@section('title', 'Profile')
@section('content')



<div class="container-fluid">
  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
      <div class="Welcome-text">
        <span class="ml-1">Edit</span>
      </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Uang Masuk</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
      </ol>
    </div>
  </div>


  @if ($errors->any())
  <div class="alert alert-warning alert-dismissible alert-alt solid fade show">
    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
      class="mdi mdi-close"></i></span>
    </button>
    <ul>
      @foreach ($errors->all() as $error)
      <li><strong>Warning!</strong> {{ $error }}. Silahkan Cek
        Kembali.</li>
      @endforeach
    </ul>
  </div>
  @endif

  @if (session('success'))
  <div class="alert alert-success alert-dismissible alert-alt solid fade show">
    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
      class="mdi mdi-close"></i></span>
    </button>
    <li><strong>Success!</strong> {{ session('success') }}. Silahkan Cek
      Kembali.</li>
  </div>
  @endif

  @if (session('warning'))
  <div class="alert alert-warning alert-dismissible alert-alt solid fade show">
    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
      class="mdi mdi-close"></i></span>
    </button>
    <li><strong>Warning!</strong> {{ session('warning') }}. Silahkan Cek
      Kembali.</li>
  </div>
  @endif

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Profile</h4>
        </div>
        <div class="card-body">
          <div class="basic-form text-dark">
            <form action="{{ route('uang_masuk.update', $uangmasuk->id) }}" method="post"
              enctype="multipart/form-data">
              @csrf
              @method('put')

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">sumber uang masuk</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="sumber_uang_masuk"
                  value="{{ $uangmasuk->sumber_uang_masuk }}" required>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nominal</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nominal"
                  value="{{$uangmasuk->nominal}}" required>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Masuk Uang</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="tgl_masuk"
                  value="{{ $uangmasuk->tgl_masuk}}" required>
                </div>
              </div>




              <div class="form-group row">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection