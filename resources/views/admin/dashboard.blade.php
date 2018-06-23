@extends('layouts.admin.adminnav')
@section('content')

<section class="mx-auto">
  <div class="container ">
    <div class="row">
        <div class="col-md-12  my-5" >
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>  
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                <div class="container">
                    <div class="col-md-6 mx-auto">
                        <img src="/img/{{ Session::get('path') }}">
                    </div>
                </div>
                
            @endif
            <form action="{{ url('admin/create_shipment') }}" enctype="multipart/form-data" method="POST">
                <div>
                        {{ csrf_field() }}
                    <div class="form-group col-md-12">
                        <label for="inputEmail3" class=" col-form-label col-md-3">Product Title</label>
                        <div class="col-md-9">
                             <input type="title" name="shipment_title" class="form-control" id="email" placeholder="Shipment Title" >
                             <input type="hidden" name="tracking_code" value="">
                             <div class="form-group">
                                <input type="file" name="filename" />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block">Submit</button>
                            </div>
                        </div>
                    </div>  
                </div>  
            </form>
        </div>
    </div>
  </div>
</section>
@endsection
