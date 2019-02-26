@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Listing <a href="/dashboard" class="btn btn-light float-right">Go Back</a> </div>

                <div class="card-body">

                    {!! Form::open(['action'=>['ListingsController@update',$listing->id]]) !!}
                    {{ Form::bsText('name',$listing->name,['placeholder'=>'Company Name']) }}
                    {{ Form::bsText('website',$listing->website,['placeholder'=>'Company Website']) }}
                    {{ Form::bsText('email',$listing->email,['placeholder'=>'Contact Email']) }}
                    {{ Form::bsText('phone',$listing->phone,['placeholder'=>'Contact Phone']) }}
                    {{ Form::bsTextArea('address',$listing->address,['placeholder'=>'Business Address']) }}
                    {{ Form::bsTextArea('bio',$listing->bio,['placeholder'=>'About This Business']) }}
                    {{ Form::hidden('_method','PUT') }}
                    {{ Form::bsSubmit('submit'),'',['placeholder'=>'Company Name'] }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection