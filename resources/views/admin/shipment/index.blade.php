@extends('layouts.admin.adminnav')

@section('title', 'My Shipment')
@section('content')
<div class="container">
<div class="row">
        <div class="col-md-10  mx-auto">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-ticket"> My Tickets</i>
                </div>

                <div class="panel-body">
                    @if ($shipments->isEmpty())
                        <p>You have no shipment</p>
                    @else
                        <table class="table table-responsive table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Shipment Title</th>
                                    <th>Tracking Code</th>  
                                    <th>Add Event</th>
                                    <th>Add Image</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($shipments as $shipment)
                                <tr>
                                    <td>
                                        {{$shipment->id}}
                                    </td>
                                    <td>
                                        {{ $shipment->shipment_title }} 
                                    </td>
                                    <td>
                                        {{$shipment->tracking_code}}
                                    </td></span>
                                    <td>
                                        <a class="btn btn-success" href="{{ url('admin/create_event/' . $shipment->id) }}">Add Event</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-warning" href="">Add Image</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $shipments->render() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection