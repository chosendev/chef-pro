@extends('partials.master')

@section('header')

    @include('partials.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Menu'])

@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Menu:All</div>
        <div class="panel-body">
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
                this is gona be so much awesome .kitchen staff goes in here........ from the database
                 <table class="table">
                <thead class="thead-dark">
            <tr>
                <th scope="col">Staff Type Id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone Number</th>
                <th scope="col">NOK Names</th>
                <th scope="col">NOK Phone Number</th>
                
            </tr>
                </thead>
                <tbody>
                    @foreach($staffs as $staff)
                    <tr>
                        <td><a href="/staff/{{ $staff->id }}">{{ $staff->staff_type_id }}</a></td>
                        <td>{{ $staff->first_name }}</td>
                        <td>{{ $staff->last_name }}</td>
                        <td>{{ $staff->address }}</td>
                        <td>{{ $staff->phone_number }}</td>
                        <td>{{ $staff->next_of_kin_name }}</td>
                        <td>{{ $staff->next_of_kin_phone_number }}</td>
                    </tr>
                    @endforeach

            </tbody>
        </table>

            </div>
        </div>
    </div>
@endsection
