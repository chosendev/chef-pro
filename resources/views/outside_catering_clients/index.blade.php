@extends('partials.master')

@section('header')

    @include('partials.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Outside catering Clients'])

@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Outside Catering:All</div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <a href="{{route('outside_catering_clients.create')}}" style="height: 50px;width: 200px;"
                           class="btn
                        btn-success
                        text-right "
                           type="button"><i
                                class="fa
                        fa-plus"></i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="row">
                    @foreach($outside_catering_clients as $outside_catering_client)


                        <div class="col-md-4">
                            <div class="panel panel-success">
                                <div class="panel panel-teal"><h2>{{$outside_catering_client->client_name}}</h2></div>
                                <div class="panel-body ">
                                    <h3>Cost</h3><h4>{{$outside_catering_client->cost}}</h4>
                                    <h3>package</h3> <h4>{{$outside_catering_client->package_id}}</h4>
                                    <h3>address</h3> <h4>{{$outside_catering_client->address}}</h4>

                                </div>
                            </div>
                        </div>


                    @endforeach

                </div>
            </div>
    </div>
@endsection
