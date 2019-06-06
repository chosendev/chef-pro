@extends('partials.master')

@section('header')

    @include('partials.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Kitchen'])

@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Kitchen:Add</div>

        <div class="panel-body">
            <div class="col-md-12">
                <!--notification alert -->
                <div class="container">
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
                </div><!-- End of notification alert -->

                <div class="row">
                    <div class="col-sm-12 text-right">
                        <a href="{{route('kitchen.index')}}" style="height: 50px;width: 200px;" class="btn btn-info
                        text-right "
                           type="button">
                            View
                        </a>
                    </div>
                </div>
                <br>
                <form action="#" method="post" enctype="multipart/form-data"><!-- form begins here -->
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group has-success">
                                <label>Order </label>
                                <input type="text" class="form-control" placeholder="order"
                                       name="order_id">
                            </div>
                        </div>



                           <div class="col-sm-6">
                            <div class="form-group has-success">
                                <label>Order status</label>
                                 <select id="order_status" class="form-control">
                                    <option value="default">select</option>
                                    <option value="in_the_queue">In the queue</option>
                                    <option value="ready">Ready</option>

                                </select>
                            </div>
                        </div>

                            <div class="col-sm-6">
                            <div class="form-group has-success">
                                <label>Date</label>
                                <input type="date" class="form-control" placeholder="date" name="date">
                            </div>
                        </div>

                    <br>
                    <center>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </center>

                </form><!-- form close --->
            </div>
        </div>
    </div>
@endsection
