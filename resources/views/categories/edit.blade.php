@extends( 'template/main' )

@section( 'title', 'Categorias / Editar' )

@section( 'content' )
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					{{ Form::model( $record, array( 'route' => array( 'categories.update', $record->id ), 'method' => 'PUT' ) ) }}

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