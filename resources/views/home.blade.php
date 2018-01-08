@extends('admin.layouts.app') @section('content')
<!-- <div class="container"> -->
<div class="row">


      <div class="panel-body">
        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif

        <div class="wrapper">

          <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo">

              <!-- logo for regular state and mobile devices -->
              <span class="logo-lg">
                <b>Tableau de Bord</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">

              </a>

              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->
                 

                
                    
                    <ul class="dropdown-menu">
                      <!-- User image -->
                      <li class="user-header">

                        <p>
                         Oussama Benali - Comédien

                        </p>
                      </li>


                      <!-- Menu Footer-->
                      <li class="user-footer">
                        <div class="pull-left">
                          <a href="#" class="btn btn-default btn-flat">Profil</a>
                        </div>
                        <div class="pull-right">
                          <a href="#" class="btn btn-default btn-flat">Déconnexion</a>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <!-- Control Sidebar Toggle Button -->
                  
                </ul>
              </div>
            </nav>
          </header>
          <!-- Left side column. contains the logo and sidebar -->
          <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
              <!-- Sidebar user panel -->
              <div class="user-panel">
                <div class="pull-left image">

                  <img src="{{('admin/dist/img/ouss.png')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                  <p>{{ Auth::user()->name }} </p>

                  <a href="#">
                    <i class="fa fa-circle text-success"></i>En ligne</a>
                </div>
              </div>
            
              <!-- sidebar menu: : style can be found in sidebar.less -->
              <ul class="sidebar-menu" data-widget="tree">
                
                <li class="active treeview">
                  <a href="#">
                    <i class="fa fa-dashboard"></i>
                    <span>Tableau de bord</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class="active">

                      <a href="{{('admin/export')}}">
                        <i class="fa fa-circle-o"></i> Newsletter e-mail Excel</a>

                    </li>

                  </ul>
                </li>

              </ul>
            </section>
            <!-- /.sidebar -->
          </aside>

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <h1 class='oussama'>
                
                OUSSAMA BENALI
               
              </h1>
              <ol class="breadcrumb">
                <li>
                  <a href="#">
                    <i class="fa fa-dashboard"></i> Accueil</a>
                </li>
                <li class="active">Tableau de bord</li>
              </ol>
            </section>

            <!-- Main content -->

        <section class="content formhome">
        <div class="row text-center">


        <div id="modalarticle">
<h2><strong>AJOUTER UN ARTICLE</strong></h2>


  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">AJOUTER UN ARTICLE</button>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ajouts événèments</h4>
        </div>
        <div class="modal-body">
{!! Form::open(array('route' => 'posts.store','method'=>'POST', 'files' => true)) !!}


     @include('posts.form')

{!! Form::close() !!}

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        </div>
      </div>

    </div>
  </div>
<hr>
<h2><strong>UPLOAD UNE PHOTO</strong></h2>
             
             {!! Form::open(array('route' => 'galerieimg.store','method'=>'POST', 'files' => true, 'class' => 'formcss')) !!}
  <div class="form-group">

            <strong>Fichier Image</strong>

            {!! Form::file('galerie_img', null, array('enctype' => 'multipart/form-data', 'class' => 'form-control')) !!}
          
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input class="submitbtn" type="submit" value="Upload" name="submit">
        </div>
{!! Form::close() !!}

</div>
<hr>


<h2><strong>UPLOAD VIDEO</strong></h2>

           {{ Form::open(array('route' => 'videos.store', 'files' => true, 'enctype' => 'multipart/form-data')) }}

    <!--{{ Form::text('titre_video',null) }} -->
    {!! Form::file('img_video', null, array('class' => 'form-control', 'enctype' => 'multipart/form-data')) !!}
    {{ Form::text('lien_video',null) }}
    {{ Form::submit('Upload') }}
{{ Form::close() }}

</div>

        </section>
            <!-- /.content -->
          </div>
          <!-- /.content-wrapper -->
          <footer class="main-footer">

            <strong>Copyright &copy; 2017
              <a target="_blank" href="https://www.facebook.com/molengeek/?ref=br_rs">Amaya | MolenIT</a>.</strong> All rights reserved.
          </footer>

@endsection
