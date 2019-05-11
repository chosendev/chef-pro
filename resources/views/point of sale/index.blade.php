@extends('partials.master')

@section('header')

    @include('partials.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Point of Sale'])

@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Point of sale:All</div>
        <div class="panel-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <a href="{{route('point_of_sale.create')}}" style="height: 50px;width: 200px;" class="btn
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
                    @foreach($point_of_sale as $point_of_sale)

                        <div class="col-md-4">
                            <div class="panel panel-success">
                                <div class="panel panel-teal"><h2>{{$point_of_sale->first_name}}</h2>
                                    <span class="pull-right clickable panel-toggle"><em
                                            class="fa fa-toggle-up"></em></span></div>
                                <div class="panel-body">
                                    <h3>Last Name</h3><h4>{{$staff->last_name}}</h4>
                                    <h3>Phone Number</h3><h4>{{$staff->phone_number}}</h4>
                                    <h3>Address</h3><h4>{{$staff->address}}</h4>
                                    <h3>Next of Kin Name</h3><h4>{{$staff->next_of_kin_name}}</h4>
                                    <h3>Next of Kin Number</h3><h4>{{$staff->next_of_kin_phone_number}}</h4>


                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
