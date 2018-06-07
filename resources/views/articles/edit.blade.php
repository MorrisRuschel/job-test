@extends( 'template/main' )

@section( 'title', 'Notícias / Editar' )

@section( 'content' )
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					{{ Form::model( $record, [ 'route' => [ 'articles.update', $record->id ], 'files' => true, 'method' => 'PUT' ] ) }}

					    <div class="form-group">
					        {{ Form::label( 'title', 'Título' ) }}
					        {{ Form::text( 'title', null, [ 'class' => 'form-control', 'required' ] ) }}
					    </div>

				        <div class="form-group">
				            {{ Form::label( 'category_id', 'Categoria' ) }}
				            {{ Form::select( 'category_id', $records, null, [ 'class' => 'form-control', 'required' ] ) }}
				        </div>

				        <div class="form-group">
				            {{ Form::label( 'image', 'Imagem' ) }}
				            {{ Form::file( 'image', [ 'class' => 'form-control', 'required' ] ) }}
					        @if ( file_exists( public_path( 'static/articles/' . $record->id . '.jpg' ) ) )
					        	<a href="/static/articles/{{ $record->id }}.jpg" class="btn btn-info" target="_blank">Visualizar</a>
					        @endif
				        </div>

				        <div class="form-group">
				            {{ Form::label( 'content', 'Conteúdo' ) }}
				            {{ Form::textarea( 'content', null, [ 'class' => 'form-control', 'required' ] ) }}
				        </div>
					    {{ Form::submit( 'Salvar', array( 'class' => 'btn btn-primary' ) ) }}

					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
@endsection