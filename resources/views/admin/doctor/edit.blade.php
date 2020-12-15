@extends('layouts.app',['pageTitle' => __(' Doctor Add')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ __(' Doctor') }}
    @endslot
@endcomponent

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Edit  Doctor') }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/doctor') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="feather-16" data-feather="arrow-left"></i> Back</button></a>
                        <br />
                        <br />
                        <form method="POST" id="oneTimeSubmit" action="{{ url('/admin/doctor/' . $doctor->id) }}" accept-charset="UTF-8" class="form-horizontal needs-validation" novalidate=""  enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.doctor.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>

@endsection
