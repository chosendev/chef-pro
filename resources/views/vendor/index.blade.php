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
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Item Id</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vendors as $vendor)
                            <tr>
                                <td><a href="/vendor/{{ $vendor->id }}">{{ $vendor->name }}</a></td>
                                <td>{{ $vendor->item_id }}</td>
                                <td>{{ $vendor->phone_number }}</td>
                                <td>{{ $vendor->location }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
