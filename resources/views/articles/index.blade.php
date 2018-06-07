@extends( 'template/main' )

@section( 'title', 'Notícias' )

@section( 'content' )
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Título</th>
								<th>Ações</th>
							</tr>
						</thead>
						<tbody>
							@foreach ( $records as $record )
							<tr>
								<td>{{ $record->id }}</td>
								<td>{{ $record->title }}</td>
								<td class="text-nowrap">
									<a href="/articles/{{ $record->id }}" class="btn btn-success">Visualizar</a>
									<a href="/articles/{{ $record->id }}/edit" class="btn btn-info">Editar</a>
									{{ Form::open( array( 'url' => 'articles/' . $record->id ) ) }}
									    {{ Form::hidden('_method', 'DELETE') }}
									    {{ Form::submit( 'Remover', array('class' => 'btn btn-warning')) }}
									{{ Form::close() }}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection