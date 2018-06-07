@extends( 'template/main' )

@section( 'title', 'Notícias / Detalhe' )

@section( 'content' )
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
				    <div class="form-group">
				        {{ Form::label( 'title', 'Título' ) }}
				        {{ Form::text( 'title', $record->title, [ 'class' => 'form-control', 'readonly' ] ) }}
				    </div>

				    <div class="form-group">
				        {{ Form::label( 'category_id', 'Categoria' ) }}
				        {{ Form::select( 'category_id', $records, null, [ 'class' => 'form-control', 'readonly' ] ) }}
				    </div>

			        <div class="form-group">
			            {{ Form::label( 'image', 'Imagem' ) }}
			            @if ( file_exists( public_path( 'static/articles/' . $record->id . '.jpg' ) ) )
			            	<a href="/static/articles/{{ $record->id }}.jpg" class="btn btn-info" target="_blank">Visualizar</a>
				        @else
				        	<p>Não encontrada</p>
				        @endif
			        </div>

				    <div class="form-group">
				        {{ Form::label( 'content', 'Conteúdo' ) }}
				        {{ Form::textarea( 'content', $record->content, [ 'class' => 'form-control', 'readonly' ] ) }}
				    </div>
				</div>
			</div>
		</div>
	</div>
@endsection
