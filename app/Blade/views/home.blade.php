@extends('app')

@section('title', 'Home | Awesome PHP')

@section('content')

@if ($user == 'Mahmoud Mohamed Ramadan')
<p>Welcome <strong style="color: darkgreen">Admin</strong></p>
@else
<strong style="color: maroon">Sorry, you are NOT authenticated</strong>
@endif

@stop


