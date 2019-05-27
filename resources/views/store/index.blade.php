@extends('partials.master')

@section('header')

    @include('partials.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Store'])

@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Staff Type:All</div>
        <div class="panel-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <a href="{{route('store.create')}}" style="height: 50px;width: 200px;" class="btn
                        btn-success
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
                            <th scope="col">Item Id</th>
                            <th scope="col">Quantity Stocked</th>
                            <th scope="col">Status</th>
                            <th scope="col">Vendor Id</th>
                            <th scope="col">Date</th>
                            
                        </tr>
                    </thead>
                    <body>
                        @foreach($stores as $store)
                        <tr>
                            <td><a href="/store/{{ $store->id }}">{{ $store->item_id }}</a></td>
                            <td>{{ $store->quantity_stocked }}</td>
                            <td>{{ $store->status }}</td>
                            <td>{{ $store->vendor_id }}</td>
                            <td>{{ $store->date }}</td>
                        </tr>
                        @endforeach
                    </body>
                </table>
            </div>
        </div>
    </div>
@endsection
