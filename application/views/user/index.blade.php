@layout('master')

@section('css')
	<link media="screen" type="text/css" rel="stylesheet" href="css/notes.css">
@endsection

@section('user_content')

<div id="wrapper">
	<h2 id="header">{{ $email }} - {{ HTML::link('/logout', 'logout' ) }}</h2>
	{{ Form::open() }}
	<div id="section1">

		<div id="column1">
			<h2>Notes</h2>
			{{ Form::textarea('notes','notes',array('cols' => 16, 'rows' => 40)) }}
		</div><!--close column1-->

		<div id="column2">
			<h2>Websites</h2>
			<h3>click to open</h3>
	
			
			<?php 
				// Set the $website array elements to be a website based on the number of websites there are in the database. Otherwise set the remaining fields to empty.
				$website = array(); 
			?>
			@for ($i = 0; $i < $num_sites; $i++)
    			@if ( isset($sites[$i]->url) )
					<?php $website[$i] = $sites[$i]->url; ?>
    			@endif
			@endfor
			
			@for ($i = $num_sites; $i < 7; $i++)
    			<?php $website[$i] = ''; ?>
			@endfor
			
			{{ Form::text('websites', $website[0]) }}
			{{ Form::text('websites', $website[1]) }}
			{{ Form::text('websites', $website[2]) }}
			{{ Form::text('websites', $website[3]) }}
			{{ Form::text('websites', $website[4]) }}
			{{ Form::text('websites', $website[5]) }}

			
		</div><!--close column2-->

	</div><!--close section1-->

	<div id="section2">
		
		<div id="column3">
			<h2>Images</h2>
			<h3>click for full size</h3>
			{{ Form::file('i')}}
		</div>

		<div id="column4">
			<h2>tbd</h2>
			{{ Form::textarea('tbd','tbd',array('cols' => 16, 'rows' => 40)) }}
		</div>

	</div>
	<div id="footer">
			{{ Form::submit('save',array('style' => 'width:200px; height:80px;')) }}

		{{ Form::close() }}
	</div>
</div>
@endsection