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
                    {{-- <div class="col-sm-12 text-right">
                        <a href="{{route('store.index')}}" style="height: 50px;width: 200px;" class="btn
                        btn-success
                        text-right "
                           type="button"><i
                                class="fa
                        fa-plus"></i>
                            Add
                        </a>
                    </div> --}}
                </div>
                
                    <div class="col-sm-12 blog main">
                        <center>
                            <h4>{{ $store->item_id }}</h4>
                            <h5>{{ $store->quantity_stocked }}</h5>
                            <h6>{{ $store->status }}</h6>
                            {{ $store->vendor_id }}
                            {{ $store->date }}
                        </center>
                    </div>    
                
                <div class="col-sm-6">
                    <a href="/store/{{ $store->id }}/edit" class="btn btn-success">EDIT</a>
                    <form action="{{ route('store.destroy',$store->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="DELETE">
                    </form>
                </div>
                
            </div>
        </div>
    </div>
@endsection
