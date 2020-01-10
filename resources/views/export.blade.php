@extends('layouts.app')

@section('title')
    {{__('export.title')}}
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h1><i class="fa fa-save"></i> {{__('export.title')}}</h1>
                        <p>{{__('export.csv.lead')}}</p>
                        <form method="GET" action="{{ route('export.csv') }}">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <label for="begin">{{__('export.csv.begin')}}</label>
                                    <input name="begin" type="date" value="{{$begin_of_month}}" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="end">{{__('export.csv.end')}}</label>
                                    <input name="end" type="date" value="{{$end_of_month}}" class="form-control">
                                </div>
                            </div>
                            <div class="row pt-2">
                                <input type="checkbox" class="custom-control-input" id="private-trips" name="private-trips" value="true" checked>
                                <input type="checkbox" class="custom-control-input" id="business-trips" name="business-trips" value="false" checked>
                                        
                                <div class="col text-right">
                                    <input type="submit" value="{{ __('export.csv.submit') }}" class="btn btn-primary m-0">
                                </div>
                            </div>
                        </form>

                        <h2 class="pt-4">{{ __('export.ics.title') }}</h2>
                        <p>{!! __('export.ics.lead') !!}</p>
                        <input type="text" class="form-control" value="{{ $ics_link }}" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
