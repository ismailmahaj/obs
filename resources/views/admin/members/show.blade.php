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
                <div class="content">
                	<div class="row filter-form">
                		<div class="col-md-12">
                			<a href="/admin/membres"  class="btn btn-info "><i class="pe-7s-angle-left"></i></a>
                		</div>
		            </div>
                </div>
            </div>
		</div>
	</div>
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="content">
                	<h4>Inscription :</h4>
                    <p>
                    	<b>Nom du Binôme : </b> {{$membre->nom_binome}} <br>
                    	<b>Catégorie : </b> {{$membre->categorie}} <br>
                    </p>
                    <hr>
                    <h4>Binôme 1 :</h4>
                    <p>
                    	<b>Prénom : </b> {{$membre->prenom_binome_a}} <br>
                    	<b>Nom : </b> {{$membre->nom_binome_a}} <br>
                        <b>Email : </b> {{$membre->email_binome_a}} <br>                            
                    	<b>Sexe : </b> 
                        @if($membre->email_binome_a == 0)
                            Féminin
                        @else
                            Masculin
                        @endif
                        <br>                        	
					</p>
					<hr>
					<h4>Binôme 2 : </h4>	
					<p>
                    	<b>Prénom  : </b> {{$membre->prenom_binome_b}} <br>
                    	<b>Nom : </b> {{$membre->nom_binome_b}} <br>
                    	<b>Email : </b> {{$membre->email_binome_b}} <br>
                        <b>Sexe : </b> 
                        @if($membre->email_binome_b == 0)
                            Féminin
                        @else
                            Masculin
                        @endif
                        <br>  
                    </p>
                    <hr>
                    <p>
                    	<b>Nom du coach/instructeur : </b> {{$membre->nom_coach_instructeur}} <br>
                    	<b>Le Club : </b> {{$membre->club}} <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
