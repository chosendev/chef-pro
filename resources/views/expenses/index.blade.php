@extends('partials.master')

@section('header')

    @include('partials.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Expenses'])

@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Expenses:All</div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <a href="{{route('expenses.create')}}" style="height: 50px;width: 200px;" class="btn
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
                    @foreach($expenses as $expense)

                    <div class="col-sm-4">
                    <div class="panel panel-success">
                              <div class="panel panel-teal"><h3><b>Cost:</b>{{$expense->cost}}</h3></div>
                        <div class="panel-body">
                            <h4><b>Name:</b>{{$expense->name}}</h4>
                            <h4><b>Receipt:</b>{{$expense->receipt}}</h4>
                            <h4><b>Date:</b>{{$expense->date}}</h4>


                        </div>
                    </div>
                </div>
                     @endforeach
                </div>
            </div>

    </div>
@endsection
