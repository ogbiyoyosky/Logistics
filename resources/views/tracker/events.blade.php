@extends('layouts.dashboardnav')
@section('content')
<style>
* {
    box-sizing: border-box;
}

.row1 {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column1 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
}
bg-gray {
    background-color: black  !important;
}
.u-bold {
    font-weight: bolder;
}

.column1 img {
    margin-top: 8px;
    vertical-align: middle;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
    .column1 {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column1 {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
    }
}
</style>

<div class="container py-2">
    
    @if($medias !== null)
    <div class="mt-1 lead text-center ">Shipment Image</div>
        @foreach($medias as $media)
    <div class="row1">
        <div class="column1">
            <img src="/img/{{$media->filename}}" alt="" style="width:100%">
        </div> 
    </div>
        @endforeach
    @endif

    @if (($shipments || $events) == null)
        <h1>There are no shipment Events with the Tracking code {{$data['tracking_code']}}</h1>
    @else 
    <p class="text-center lead text-muted py-3">Shipment Event</p>
    @for ($i = count($events) - 1; $i >= 0; $i--)
    <div class="row">
        <div class="col-auto text-center flex-column  d-sm-flex">
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <h5 class="m-2">
                @if ($i === count($events) - 1)
                <span class="badge badge-pill bg-success">&nbsp;</span>
                @else
                <span class="badge badge-pill bg-gray" style="background-color: black;">&nbsp;</span>               
                @endif
            </h5>
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
        </div>
        <div class="col py-2">
            <div class="card shadow">
                <div class="card-body">
                    <div class="float-right">{{$events[$i]->created_at}}</div>
                    @if($events[$i]->event)
                        @if ($i === count($events) - 1)
                            <h5 class="mx-4 text-success">{{$events[$i]->event}}</h5>
                        @else
                            <p class="mx-4 lead" style="color: black; ">{{$events[$i]->event}}</p>             
                        @endif
                    @endif
                    @if($events[$i]->location)
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 ">

                                    <div class="col-md-4 float-left">
                                    <span class="u-bold">Location :</span>
                                    </div>
                                    <div class="col-md-4 float-right " style="font-size: 0.9rem">
                                    <span>{{$events[$i]->location}}</span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($events[$i]->recipient)
                    <div class="container">
                            <div class="row">
                                <div class="col-md-8 ">
                                    <div class="col-md-4 float-left">
                                    <span class="u-bold">Recipient :</span>
                                    </div>
                                    <div class="col-md-4 float-right  " style="font-size: 0.9rem">
                                    <span>{{$events[$i]->recipient}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($events[$i]->sender)
                    <div class="container">
                            <div class="row">
                                <div class="col-md-8 ">
                                    <div class="col-md-4 float-left">
                                    <span class="u-bold ">Sender :</span>
                                    </div>
                                    <div class="col-md-4 float-right" style="font-size: 0.9rem">
                                    <span>{{$events[$i]->sender}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endfor

    @endif
@endsection