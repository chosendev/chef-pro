@extends('partials.master')

@section('header')

    @include('partials.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Staff type'])

@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Staff Type:All</div>
        <div class="panel-body">1
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <a href="{{route('staff_type.create')}}" style="height: 50px;width: 200px;" class="btn
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
                            <th scope="col">Type</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        @foreach($stafftypes as $stafftype)
                        <tr>
                        <td><a href="/staff_type/{{ $stafftype->id }}"></a>{{ $stafftype->type}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
               

            </div>
        </div>   
    </div>
@endsection
