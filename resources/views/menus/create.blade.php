@extends('partials.master')

@section('header')

    @include('partials.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Menu'])

@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Menu:Add</div>

        <div class="panel-body">
            <div class="col-md-12">
                <!--notification alert -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br/>
                    @endif

                    @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div><br/>
                    @endif
                <!-- End of notification alert -->

                <div class="row">
                    <div class="col-sm-12 text-right">
                        <a href="{{route('menus.index')}}" style="height: 50px;width: 200px;" class="btn btn-info
                        text-right "
                           type="button">
                            View
                        </a>
                    </div>
                </div>
                <br>
                <form action="{{route('menus.store')}}" method="POST" enctype="multipart/form-data"><!-- form begins
                here
                 -->
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group has-success">
                                <label>Food Combination</label>
                                <input type="text" class="form-control" placeholder="name/Food combination" name="food_combination">
                            </div>

                            <div class="`form-group has-success">
                                <label>Price</label>
                                <input type="text" class="form-control" placeholder="price" name="price">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group has-success">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="Available">Available</option>
                                    <option value="Unavailable">Unavailable</option>
                                </select>
                            </div>

                            <div class="`form-group has-success">
                                <label>Date</label>
                                <input type="date" class="form-control" placeholder="date" name="date">
                            </div>
                        </div>
                    </div>
                    <br>
                        <button type="submit" class="btn btn-primary">Submit</button>

                </form><!-- form close --->
            </div>
        </div>
    </div>
@endsection
