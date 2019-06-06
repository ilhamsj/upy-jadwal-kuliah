@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Mata Kuliah</div>
                <div class="card-body">
                    
                        <form method="post" action="{{ route('mata-kuliah.update', $makul->id) }}">
                            <div class="form-group">

                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <input type="text" value="{{$makul->kd_mata_kuliah}}" name="kode" class="form-control">
                                </div> 

                                <div class="form-group">
                                    <input type="text" value="{{$makul->nama_mata_kuliah}}" name="nama" class="form-control">
                                </div>

                                <div class="form-group">
                                    <input type="text" value="{{$makul->sks}}" name="sks" class="form-control"> 
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection