@extends('partials.master')

@section('header')

    @include('partials.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Outside catering packages'])

@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Outside catering packages:Add</div>

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
                        <a href="{{route('outside_catering_packages.index')}}" style="height: 50px;width: 200px;"
                           class="btn btn-info
                        text-right "
                           type="button">
                            View
                        </a>
                    </div>
                </div>
                <br>
                <form action="{{route('outside_catering_packages.store')}}" method="post"
                      enctype="multipart/form-data"><!-- form begins
                here -->
                    @csrf

                    <div class="row">

                            <div class="form-group has-success">
                                <label>Food combination</label>
                                <input type="text" class="form-control" placeholder="name" name="food_combination">
                            </div>

                        <div class="form-group has-success">
                            <label>Price</label>
                            <input type="text" class="form-control" placeholder="name" name="price">
                        </div>

                        <div class="form-group has-success">
                            <label>Status</label>
                            <input type="text" class="form-control" placeholder="name" name="status">
                        </div>


                            <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                </form><!-- form close --->
            </div>
        </div>
    </div>
    </div>
@endsection
