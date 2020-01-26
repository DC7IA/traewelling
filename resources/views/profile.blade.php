@extends('layouts.app')

@section('title')
    {{ $user->name }}
@endsection

@section('content')
    <div class="jumbotron mt-n4" style="background-image: url({{url('/images/covers/profile-background.png')}});background-position: center;background-color: #c5232c">
        <div class="container">
            <img src="{{ route('account.showProfilePicture', ['username' => $user->username]) }}" height="20%" width="20%" class="float-right img-thumbnail rounded-circle img-fluid"><div class="text-white px-4">
                    <h2 class="card-title h1-responsive font-bold">
                        <strong>{{ __('profile.statistics-for') }} {{ $user->name }}</strong> <small class="font-weight-light">{{ '@'.$user->username }}</small>
                        @php($visitor = Auth::user())
                        @if($visitor != null)
                            @if($user != $visitor && Auth::check())
                                <a href="#" class="btn btn-sm btn-primary follow" data-userid="{{ $user->id }}"
                                @if(Auth::user()->follows->where('follow_id', $user->id)->first() === null)
                                data-following="no">{{__('profile.follow')}}</a>
                                @else
                                    data-following="yes">{{__('profile.unfollow')}}</a>
                                @endif
                            @else
                                <a href="{{ route('settings') }}" class="btn btn-sm btn-primary">{{ __('profile.settings') }}</a>
                            @endif
                        @endif
                    </h2>
                    <h2>
                        <span class="font-weight-bold"><i class="fa fa-route d-inline"></i>&nbsp;{{ number($user->train_distance) }}</span><span class="small font-weight-lighter">km</span>
                        <span class="font-weight-bold pl-sm-2"><i class="fa fa-stopwatch d-inline"></i>&nbsp;{!! durationToSpan(secondsToDuration($user->train_duration * 60)) !!}</span>
                        <span class="font-weight-bold pl-sm-2"><i class="fa fa-dice-d20 d-inline"></i>&nbsp;{{ $user->points }}</span><span class="small font-weight-lighter">{{__('profile.points-abbr')}}</span>
                    </h2>
            </div>
        </div>
    </div>
    @include('includes.message-block')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <header><h3>&nbsp;</h3></header>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <header><h3>{{__('profile.last-journeys-of')}} {{ $user->name }}:</h3></header>
                <?php $d = ""; ?>
                @foreach($statuses as $status)
                    <?php $newD = date('Y-m-d', strtotime($status->trainCheckin->departure)); ?>
                    @if($newD != $d)
                        <?php
                        $d = $newD;
                        $dtObj = new \DateTime($status->trainCheckin->departure);
                        ?>
                        <h5 class="mt-4">{{__("dates." . $dtObj->format('l')) }}, {{ $dtObj->format('j') }}. {{__("dates." . $dtObj->format('F')) }} {{ $dtObj->format('Y') }}</h5>
                    @endif
                    @include('includes.status')
                @endforeach

            </div>
        </div>
        <div class="row justify-content-center mt-5">
            {{ $statuses->links() }}
        </div>
        @include('includes.edit-modal')
        @include('includes.delete-modal')
    </div>
@endsection
