@extends('layouts.app')

@section('content')
    <header-comp
        title="Order E Sim"
    ></header-comp>

    @if($user)
        <checkout-e-sim-form
            :user="{{$user}}"
        ></checkout-e-sim-form>
    @else
        <checkout-e-sim-form></checkout-e-sim-form>
    @endif

@endsection
