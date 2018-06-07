@extends( 'template/main' )

@section( 'title', 'Notícias / Nova' )

@section( 'content' )
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					{{ Form::open( [ 'url' => [ 'articles' ], 'files' => true ] ) }}

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
