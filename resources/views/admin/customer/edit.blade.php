@extends('admin/template/main')
@section('title','Dashboard Customer Edit')
@extends('admin/template/navbar')
@extends('admin/template/sidebar')
@extends('admin/template/footer')
@extends('admin/template/linkjs')

@section('content')
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <a href="{{route('admin.customer')}}" class="btn btn-danger m-2"><i class="fas fa-arrow-left"></i></a>
            <h1>Edit Customer</h1>
          </div>
          <div class="row">
            <div class="col-12 ">
              <div class="card">
                <div class="card-header d-flex" style="justify-content:space-between">
                  <h4>Form</h4>
                  
                </div>
                <form action="{{route('admin.customer.update',$data->id)}}" method="post">
                    @method('put')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{$data->nama}}">
                             @error('name') 
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
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" value="{{$data->alamat}}">
                             @error('address') 
                                 <small style="color:red">{{ ucwords($message) }}</small>
                             @enderror 
                        </div>
                        <div class="form-group">
                            <label class="d-block">Status</label>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="status" value="A" @if($data->status == "A") checked @endif>
                                Active
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="status" value="D" @if($data->status == "D") checked @endif>
                                Deactive
                                </label>
                            </div>
                            @error('status')
                                <small style="color:red" class="d-block">{{ ucwords($message) }}</small>
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
@section('codejs')
<script>
</script>
@endsection
