@extends('admin.layouts.master')

@section('title')
 Oussama Ben Ali
@endsection

@section('left_menu')
	@include('admin.layouts.left_menu', array('current' => 'towns'))
@endsection

@section('content')
	<div class="row">
		<div class="col-md-3">
            <div class="card center">
                <div class="header">
                   <p class="text-muted" style="text-align: center;">
                   		<i class="pe-7s-users max_icon_size"></i>
						{{$customers_count}}
                   </p>
                </div>
                <div class="content center">
                	<p class="text-muted" style="text-align: center;">
						<a href="/admin/membres"  class="btn btn-success btn-fill">
	                		Gérer les inscriptions
	                	</a>
                	</p>
                </div>
            </div>
        </div>
		<div class="col-md-9">
			<div class="card">
			    <div class="header">
			        <p class="category">
			        	<i class="fa fa-file"></i>
			        	Dernier inscrit
			        </p>
			    </div>
			    <div class="content table-responsive table-full-width">
			        <table class="table table-hover">
			            <tbody>
							@foreach($customers as $customer)
								<tr>
									<td>{{$customer->nom_binome}}</td>
									<td>{{$customer->created_at->diffForHumans()}}</td>
									<td>
										<a class="btn btn-success" href="/admin/membre/{{$customer->id}}">
											<i class="pe-7s-look"></i>
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


