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
                    <form method="POST" action="/admin/membre/edit/{{$membre->id}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nom du Binôme : </label>
                                    <input type="text" class="form-control" value="{{$membre->nom_binome}}" name="nom_binome">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Catégorie : </label>
                                    <select class="form-control" name="categorie">
                                        <option @if($membre->categorie == "Pratiquant") selected @endif value="Pratiquant">Pratiquant</option>
                                        <option @if($membre->categorie == "Zénith") selected @endif value="Zénith">Zénith</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4>Binôme 1</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Prénom : </label>
                                    <input type="text" class="form-control" value="{{$membre->prenom_binome_a}}" name="prenom_binome_a">
                                </div>
                            </div>
                            <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Nom : </label>
                                    <input type="text" class="form-control" value="{{$membre->nom_binome_a}}" name="nom_binome_a">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email : </label>
                                    <input type="text" class="form-control" value="{{$membre->email_binome_a}}" name="email_binome_a">
                                </div>
                            </div>
                            <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Sexe : </label>
                                    <select class="form-control" name="sexe_a">
                                        <option @if($membre->sexe_a == 0) selected @endif value=0>Masculin</option>
                                        <option @if($membre->sexe_a == 1) selected @endif value=1>Féminin </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4>Binôme 2</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Prénom : </label>
                                    <input type="text" class="form-control" value="{{$membre->prenom_binome_b}}" name="prenom_binome_b">
                                </div>
                            </div>
                            <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Nom : </label>
                                    <input type="text" class="form-control" value="{{$membre->prenom_binome_b}}" name="prenom_binome_b">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email : </label>
                                    <input type="text" class="form-control" value="{{$membre->email_binome_b}}" name="email_binome_b">
                                </div>
                            </div>
                            <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Sexe : </label>
                                    <select class="form-control" name="sexe_b">
                                        <option @if($membre->sexe_b == 0) selected @endif value=0>Masculin</option>
                                        <option @if($membre->sexe_b == 1) selected @endif value=1>Féminin </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nom du coach/instructeur : </label>
                                    <input type="text" class="form-control" value="{{$membre->nom_coach_instructeur}}" name="nom_coach_instructeur">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Le Club : </label>
                                    <input type="text" class="form-control" value="{{$membre->club}}" name="club">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info btn-fill pull-right">MAJ</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
