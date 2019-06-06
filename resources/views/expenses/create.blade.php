@extends('partials.master')

@section('header')

    @include('partials.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Expenses'])

@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Expenses:Add</div>

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
                        <a href="{{route('expenses.index')}}" style="height: 50px;width: 200px;" class="btn btn-info
                        text-right "
                           type="button">
                            View
                        </a>
                    </div>
                </div>
                <br>
                <form action="{{route('expenses.store')}}" method="post" enctype="multipart/form-data"><!-- form begins here -->
                    @csrf
                    <div class="row">
                        <div class="form-group has-success">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="name/type"
                                   name="name">
                        </div>


                        <div class="form-group has-success">
                            <label>Cost</label>
                            <input type="text" class="form-control" placeholder="Cost" name="cost">
                        </div>


                        <div class="form-group has-success">
                            <label>receipt/voucher</label>
                            <input type="text" class="form-control" placeholder="receipt/voucher"
                                   name="receipt">
                        </div>

                        <div class="form-group has-success">
                            <label>Date</label>
                            <input type="date" class="form-control" placeholder="date"
                                   name="date">
                        </div>

                        <br>
                        <center>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </center>
                    </div>
                </form><!-- form close --->
            </div>
        </div>
    </div>
@endsection
