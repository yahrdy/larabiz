@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <span class="float-right btn btn-success btn-sm"><a
                                href="/listings/create">Add Listing</a> </span></div>

                <div class="card-body">
                    <h3>Your Listings</h3>
                    @if(count($listings))
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Company</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            @foreach($listings as $listing)
                                <tr>
                                    <td>{{ $listing->name }}</td>
                                    <td><a class="btn btn-light float-right" href="/listings/{{ $listing->id }}/edit">Edit</a> </td>
                                    <td>
                                        {!!Form::open(['action' => ['ListingsController@destroy', $listing->id], 'class' => 'pull-left', 'onsubmit' => 'return confirm("Are you sure?")'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{ Form::bsSubmit('Delete','Delete',['class'=>'btn btn-danger']) }}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
