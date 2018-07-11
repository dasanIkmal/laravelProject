@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                {!! Form::open(['action'=>'CustomerController@store','method'=>'POST']) !!}
                    <div class=form-group>
                        {{form::label('First name','First Name')}}
                        {{Form::text('fname', '', ['class' => 'form-control', 'placeholder' => 'First Name'])}}
                    </div>
                    <div class=form-group>
                        {{form::label('Last Name','Last Name')}}
                        {{Form::text('lname', '', ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
                    </div>
                    <div class=form-group>
                        {{form::label('Address','Address')}}
                        {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Address'])}}
                    </div>
                    <div class=form-group>
                        {{form::label('Date of Birth','Date of Birth')}}
                        {{Form::text('dob', '', ['class' => 'form-control', 'placeholder' => 'Date of Birth'])}}
                    </div>
                    <div class=form-group>
                        {{form::label('Phone Number','Phone Number')}}
                        {{Form::text('tpnumber', '', ['class' => 'form-control', 'placeholder' => 'Phone Number'])}}
                    </div>
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}                    
                {!! Form::close() !!} 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
