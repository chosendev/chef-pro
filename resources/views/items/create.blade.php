@extends('partials.master')

@section('header')

    @include('partials.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Items'])

@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Items:Add</div>
        <div class="panel-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-12 text-right">
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

                        <a href="{{route('item.index')}}" style="height: 50px;width: 200px;" class="btn btn-info
                        text-right "
                           type="button">
                            view
                        </a>
                    </div>
                </div>
                <br>
                <form action="#" method="post" enctype="multipart/form-data"><!--form-->
                    @csrf

                    <div class="form-group has-success">
                        <label>Item name</label>
                        <input type="text" class="form-control" placeholder="item name">
                    </div>
                    <br>
                    <center>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </center>

                </form><!--end form -->
            </div>
        </div>
    </div>
@endsection
