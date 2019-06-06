@extends('partials.master')

@section('header')

    @include('partials.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'outside_catering_packages'])

@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">outside catering packages:All</div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-12 text-right">
                    <a href="{{route('outside_catering_packages.create')}}" style="height: 50px;width: 200px;"
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
                @foreach($outside_catering_packages as $outside_catering_package)

                    <div class="col-md-4">
                        <div class="panel panel-success">
                            <div class="panel panel-teal"><h2>{{$outside_catering_package->food_combination}}</h2>
                                <span class="pull-right clickable panel-toggle"><em
                                        class="fa fa-toggle-up"></em></span></div>
                            <div class="panel-body">
                                <h3>Price</h3><h4>{{$outside_catering_package->price}}</h4>
                                <h3>Status</h3><h4>{{$outside_catering_package->status}}</h4>


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
