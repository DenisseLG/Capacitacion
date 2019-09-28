
@extends('layouts.app')
@section('content')



<div class="container">
	<div class="card">
	  <div class="card-header bg-success text-white">
	    <b>Lista de Categorias</b>
	  </div>
	  <div class="card-body">
	    <h5 class="card-title">Special title treatment</h5>
	    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
	    <a href="{{ route('categories.create') }}" class="btn btn-primary">AGREGAR</a>

	    <hr/>

	    {!!Form::open(['method'=>,'route'=>'categories.index'])!!}
			{!! Form::text('filter',request()->get('filter'),['class=>'form-control','placeholder'=>'Ingrese bsucar nombre de categoria'])!!}
	    {!!Form::close()!!}


	    <table class="table ">
	    	  <thead class="thead-dark">
	    		<tr>
	    			<th>ID</th>
	    			<th>Nombre</th>
	    			<th>Slug</th>
	    			<th>ACCIONES</th>
	    		</tr>
	    	</thead>
	    	@forelse($categories as $category)			
	    		<tr>
	    			<th>{{$category->id}}</th>
	    			<th>{{$category->name}}</th>
	    			<th>{{$category->slug}}</th>
	    			<th>	

	    				{!!Form::open(['route'=>['categories.destroy',$category],
	    				'method'=>'DELETE',
	    				'onsubmit'=>'return confirm("Estas seguro que deseas eliminar?")'
	    				])!!}
	    				<a href="{{route('categories.edit',$category)}}">EDITAR</a> 

	    				{!!Form::submit('ELIMINAR',['class'=>'btn btn-danger'])!!}

	    				{!!Form::close()!!}
	    			</th>
	    		</tr>
	    	@empty													//si el array esta vavio	
	    		<tr><td colspan="4">NO HAY REGISTROS</td></tr>
	    	@endforelse
	    </table>
		{!! $categories->render()!!}

	  </div>
	</div>
</div>



@endsection