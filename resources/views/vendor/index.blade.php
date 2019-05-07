@extends('partials.master')

@section('header')

    @include('partials.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Vendor'])

@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Vendor:All</div>
        <div class="panel-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <a href="{{route('vendor.create')}}" style="height: 50px;width: 200px;" class="btn btn-success
                        text-right "
                           type="button"><i
                                class="fa
                        fa-plus"></i>
                            Add
                        </a>
                    </div>
                </div>
                this is gona be so much awesome .kitchen staff goes in here........ from the database

            </div>
        </div>
    </div>
@endsection
