@extends( 'template/main' )

@section( 'title', 'Categorias / Nova' )

@section( 'content' )
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					{{ Form::open( array( 'url' => array( 'categories' ) ) ) }}

				        <div class="form-group">
				            {{ Form::label( 'title', 'Título' ) }}
				            {{ Form::text( 'title', null, [ 'class' => 'form-control', 'required' ] ) }}
				        </div>

				        {{ Form::submit( 'Salvar', array( 'class' => 'btn btn-primary' ) ) }}

				    {{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
@endsection
