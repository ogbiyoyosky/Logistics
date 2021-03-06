@extends('layouts.dashboardnav')

@section('content')

 <div class=" text-center">
      <div class="overlay"></div>
      <div class="container">
      @if (count($errors) > 0)
                <div class="alert alert-danger mb-4">
                    <strong>Whoops!</strong> Please Enter a tracking code <br><br>  
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
      @endif
        <div class="row">
          <div class="col-xl-12  col-sm-12 mx-auto">
            <h2 class="mt-5">Track your product to know it's location</h2>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <form method="POST" action="{{ url('/track_shipment') }}">
            {{csrf_field()}}
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="text" name="tracking_code"class="form-control form-control-lg" placeholder="Enter Code...">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Track</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection