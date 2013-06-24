@layout('master')

@section('content_form')

<h1>Log In</h1>
{{ Form::open('verify.php') }}
{{ Form::label('email', 'Email Address') }}
{{ Form::text('email') }}
<br>
{{ Form::label('pass', 'Password')}}
{{ Form::password('pass')}}
<br>
{{ Form::submit('Log in') }}
{{ Form::close() }}

<p>
	{{HTML::link('View::make('home.register'), 'register')}}
</p>


@endsection
