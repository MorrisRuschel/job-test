@extends( 'template/main' )

@section( 'title', 'Categorias / Detalhe' )

@section( 'content' )
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
				    <div class="form-group">
				        {{ Form::label( 'title', 'Título' ) }}
				        {{ Form::text( 'title', $record->title, [ 'class' => 'form-control', 'readonly' ] ) }}
				    </div>
				</div>
			</div>
		</div>
	</div>
@endsection
