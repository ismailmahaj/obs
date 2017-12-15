@extends('admin.layouts.master')

@section('title')
	Dashboard - Citizen Map
@endsection

@section('left_menu')
	@include('admin.layouts.left_menu', array('current' => 'users'))
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="content table-responsive table-full-width">
		            <table class="table table-hover table-striped">
		                <thead>
		                	<th>Identifiant</th>
		                	<th>Nom binôme</th>
		                	<th>Actions</th>
		                </thead>
		                <tbody>
			                @foreach ($customers as $customer)
								<tr>
									<td>
										@if($customer->categorie == "Pratiquant")
											P-{{ $customer->id }}
										@else
											Z-{{ $customer->id }}
										@endif
									</td>
									<td>{{ $customer->nom_binome }}</td>
									<td>
										<a class="btn btn-info" href="/admin/membre/edit/{{$customer->id}}">
											<i class="pe-7s-refresh"></i>
										</a>
										<a class="btn btn-success" href="/admin/membre/{{$customer->id}}">
											<i class="pe-7s-look"></i>
										</a>
										<a class="btn btn-danger" href="/admin/membre/remove/{{$customer->id}}">
											<i class="pe-7s-trash"></i>
										</a>
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
