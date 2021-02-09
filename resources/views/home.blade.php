@extends('layouts.app')

@section('content')
<a href="{{route('user.logout')}}">Logout</a>
<div class="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 card">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First</th>
                            <th>Last</th>
                            <th>Body</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>mark</td>
                            <td>tony</td>
                            <td>stark</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>mark</td>
                            <td>tony</td>
                            <td>stark</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>mark</td>
                            <td>tony</td>
                            <td>stark</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>mark</td>
                            <td>tony</td>
                            <td>stark</td>
                        </tr>
                    </tbody>

                </table>

            </div>
            <div class="col-4">
                <div class="card">
                    <img src="{{asset('frontend/images/banner_2_product.png')}}" class="card-img-top rounded-circle" alt="" height="80px" width="80px">
<div class="card-body">
    <h5 class="card-title text-center">Kapil</h5>

</div>
                </div>

            </div>

        </div>

    </div>

</div>
@endsection
