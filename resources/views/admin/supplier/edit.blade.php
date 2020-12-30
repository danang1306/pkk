@extends('admin/template/main')
@section('title','Dashboard Supplier Edit')
@extends('admin/template/navbar')
@extends('admin/template/sidebar')
@extends('admin/template/footer')
@extends('admin/template/linkjs')

@section('content')
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <a href="{{route('admin.supplier')}}" class="btn btn-danger m-2"><i class="fas fa-arrow-left"></i></a>
            <h1>Edit Supplier</h1>
          </div>
          <div class="row">
            <div class="col-12 ">
              <div class="card">
                <div class="card-header d-flex" style="justify-content:space-between">
                  <h4>Form</h4>
                  
                </div>
                <form action="{{route('admin.supplier.update',$data->id)}}" method="post">
                    @method('put')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control" name="company_name" value="{{$data->nama_company}}">
                             @error('company_name') 
                                 <small style="color:red">{{ ucwords($message) }}</small>
                             @enderror 
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{$data->email}}">
                             @error('email') 
                                 <small style="color:red">{{ ucwords($message) }}</small>
                             @enderror 
                        </div>
                        <div class="form-group">
                            <label>Telephone Number</label>
                            <input type="text" class="form-control" name="no_telp" value="{{$data->no_telp}}">
                             @error('no_telp') 
                                 <small style="color:red">{{ ucwords($message) }}</small>
                             @enderror 
                        </div>
                    </div>
                    <div class="card-footer text-right mb-4">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    </div>
                </form>
            </div>
          </div>
        </section>
      </div>

@endsection
