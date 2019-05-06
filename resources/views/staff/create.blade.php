@extends('partials.master')

@section('header')

    @include('partials.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Staff'])

@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Staff:Add</div>

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
                        <a href="{{route('staff.index')}}" style="height: 50px;width: 200px;" class="btn btn-info
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
                                <label>staff type id</label>
                                <input type="text" class="form-control" placeholder="staff type id"
                                       name="staff_type_id">
                            </div>

                            <div class="`form-group has-success">
                                <label>first name</label>
                                <input type="text" class="form-control" placeholder="first name" name="first_name">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group has-success">
                                <label>last name</label>
                                <input type="date" class="form-control" placeholder="last name" name="last_name">
                            </div>

                            <div class="`form-group has-success">
                                <label>Phone number</label>
                                <input type="text" class="form-control" placeholder="phone number" name="phone_number">
                            </div>


                        </div>


                        <div class="col-sm-6">
                            <div class="form-group has-success">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="address" name="address">
                            </div>

                            <div class="`form-group has-success">
                                <label>Next of kin names</label>
                                <input type="text" class="form-control" placeholder="next of kin name"
                                       name="next_of_kin">
                            </div>


                        </div>
                            <div class="col-sm-6">
                            <div class="form-group has-success">
                                <label>Next of kin Phone number</label>
                                <input type="text" class="form-control" placeholder="next of kin phone number"
                                       name="next_of_kin_phone_number">
                            </div>
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
