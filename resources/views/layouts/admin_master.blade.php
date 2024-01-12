@extends('layouts.adminApp')
@section('app_content')
@includeIf('backend/Includes/navBar');
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @includeIf('backend/Includes/sidebar');
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        @yield('master_contant')
        
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @includeIf('backend/Includes/footer');
@stop
