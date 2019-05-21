@extends('partials.master')

@section('header')

    @include('partials.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Outside catering-clients'])

@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Outside catering Clients:Add</div>

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
                        <a href="{{route('outside_catering_clients.index')}}" style="height: 50px;width: 200px;"
                           class="btn btn-info
                        text-right "
                           type="button">
                            View
                        </a>
                    </div>
                </div>
                <br>
                <form action="{{route('outside_catering_clients.store')}}" method="post"
                      enctype="multipart/form-data"><!-- form begins here -->
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group has-success">

                                <label>Date</label>
                                <input type="date" class="form-control" placeholder="date" name="date">
                            </div>

                            <div class="form-group has-success">
                                <label>Client Name</label>
                                <input type="text" class="form-control" placeholder="client name" name="client_name">
                            </div>


                        </div>

                        <div class="col-sm-6">
                            <div class="`form-group has-success">
                                <label>Cost</label>
                                <input type="text" class="form-control" placeholder="cost" name="cost">
                            </div>

                            <div class="form-group has-success">
                                <label>package</label>
                                <input type="text" class="form-control" placeholder="package" name="package_id">
                            </div>
                            <div class="form-group has-success">
                                <label>address</label>
                                <input type="text" class="form-control" placeholder="address" name="address">
                            </div>
                        </div>
                            <button type="submit" class="btn btn-primary">Submit</button>


                    </div>
                </form><!-- form close --->
            </div>
        </div>
    </div>
@endsection
