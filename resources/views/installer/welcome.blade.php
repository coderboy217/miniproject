@extends('installer.app')
@section('title','Thank you')
@section('content')
    <section class="login_content">

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
                            {{ csrf_field() }}

                            <h2> Welcome to setup wizard </h2>
                            <p class="text-left">Thanks you for using the Court Case Management System</p>
                            <div>
                                <a href="{{route('check.requirements')}}" class="btn btn-default pull-right">
                                    Next
                                </a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">

                                <div class="clearfix"></div>
                                <br/>

                                <div>

                                    <p>MiniProject</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
