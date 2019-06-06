
@extends('partials.master')

@section('header')

    @include('partials.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Menu'])

@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Menu:All</div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <a href="{{route('menus.create')}}" style="height: 50px;width: 200px;" class="btn
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
                    @foreach($menus as $menu)


                        <div class="col-md-4">
                            <div class="panel panel-success">
                                <div class="panel panel-default"><h2>{{$menu->food_combination}}</h2></div>
                                <div class="panel-body ">
                                    <div class="col-sm-7">
                                    <img src="{{URL::to('/')}}/images/{{$menu->image}}" class="img-rounded"
                                         width="200"></div>
                                    <h3>Price</h3><h4>{{$menu->price}}</h4>
                                    <h3>Status</h3> <h4>{{$menu->status}}</h4>
                                    <h3>Date</h3> <h4>{{$menu->date}}</h4>

                                </div>
                            </div>
                        </div>


                    @endforeach

                </div>
                <center> <?php echo $menus->render();?></center>

            </div>

    </div>
@endsection
