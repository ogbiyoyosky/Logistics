@extends('layouts.admin.adminnav')
@section('content')
<section class="section section--neutral ">

    <div class="container mx-auto">
    @if (count($errors) > 0)
                <div class="alert alert-danger mb-4">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>  
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block  mb-4">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
    @endif
        <div class="row">
        
                <div class="container">
                    <div class="">
                        <form action="{{ url('admin/create_event/' . $shipment_id) }}" class="col-md-10" method="POST">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <label class="col-sm-2 col-md-3" for="exampleFormControlSelect1">Add Event</label>
                                <div class="col-sm-10 col-md-9">
                                <textarea name="event" id="text-area" class="form-control"cols="10" placeholder="Enter event" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="location" class="col-sm-2 col-md-3 col-form-label">Location</label>
                                <div class="col-sm-10 col-md-9">
                                    <input type="text" class="form-control" id="location" value="" name="location" placeholder="location">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="recipient" class="col-sm-2  col-md-3 col-form-label">Recipient</label>
                                <div class="col-sm-10 col-md-9">
                                    <input type="text" class="form-control" id="recipient" name="recipient" value=""  placeholder="Recipient">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="sender" class="col-sm-2  col-md-3 col-form-label">Sender</label>
                                <div class="col-sm-10 col-md-9">
                                    <input type="text" class="form-control" id="sender" name="sender" value=""  placeholder="Sender">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Add Event</button>
                            </div>
                        </form>                        
                    </div>
                </div>
        </div>
    </div>
</section>
@endsection
