@extends('partials.master')

@section('header')

    @include('partials.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Orders'])

@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Orders:All</div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-12 text-right">
                    <a href="{{route('orders.create')}}" style="height: 50px;width: 200px;" class="btn
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
                @foreach($orders as $order)


                    <div class="col-md-4">
                        <div class="panel panel-success">
                            <div class="panel panel-default"><h2>{{$order->food_combination}}</h2></div>
                            <div class="panel-body ">
                                <h3>Price</h3><h4>{{$order->price}}</h4>
                               <h3>Status</h3> <h4>{{$order->status}}</h4>
                               <h3>Date</h3> <h4>{{$order->date}}</h4>

                            </div>
                        </div>
                    </div>


                @endforeach

            </div>
        </div>
    </div>
   <center> <?php echo $orders->render();?></center>
@endsection
