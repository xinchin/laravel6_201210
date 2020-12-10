@extends('layouts.master')
@section('content')
    <h1>Content</h1>
@endsection
@section('footer')
    <h3>this is footer</h3>
@endsection

@component('components.alert',['title'=>'Hello'])
    <strong> Alert.......:: {{ $name }}</strong>
@endcomponent
