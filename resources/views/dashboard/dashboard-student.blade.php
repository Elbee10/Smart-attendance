@extends('layouts.studentsNav') 
@section('content')
<div class="container-fluid">

    <div class="row row-offcanvas row-offcanvas-left">
            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
                <ul class="list-group panel">
                    <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>SIDE PANEL</b></li>
                    <li class="list-group-item"><input type="text" class="form-control search-query" placeholder="Search Something"></li>
                    <li class="list-group-item"><a href="{{route('dashboard-student')}}"><i class="glyphicon glyphicon-home"></i>Dashboard </a></li>

                    <li>
                    <a href="#demo3" class="list-group-item " data-toggle="collapse">Attendance<span class="glyphicon glyphicon-chevron-right"></span></a>
                    <div class="collapse" id="demo3">
                        <a href="#SubMenu1" class="list-group-item" data-toggle="collapse">Lectures<span class="glyphicon glyphicon-chevron-right"></span></a>
                        <div class="collapse list-group-submenu" id="SubMenu1">
                        <a href="" class="list-group-item">Course1</a>
                        <a href="#" class="list-group-item">Course 2  </a>
                        </div>

                        <a href="#SubMenu2" class="list-group-item" data-toggle="collapse">Practicals<span class="glyphicon glyphicon-chevron-right"></span></a>
                        <div class="collapse list-group-submenu" id="SubMenu2">
                        <a href="" class="list-group-item">Course1</a>
                        <a href="#" class="list-group-item">Course 2  </a>
                        </div>
                    </div>
                    </li>
                    <li class="list-group-item"><a href="{{route('course-registration-form')}}"><i class="glyphicon glyphicon-home"></i>View Course </a></li>
                    <li class="list-group-item"><a href="{{route('course-registration-form')}}"><i class="glyphicon glyphicon-home"></i>Register Course </a></li>
                    
              
                    <li class="list-group-item"><a href="login.html" ><i class="glyphicon glyphicon-lock"></i>Login</a></li>

                </ul>
            </div>
      

            <div class="col-xs-12 col-sm-12 content">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>Student Info</h3>
              </div>
              <div class="panel-body">
                <div class="content-row">
                  <h2 class="content-row-title">Student Info</h2>
                  <div class="row">
                      
                    <div class="col-md-12">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                          Panel content
                        </div>
                      </div>
                      
                        
                    </div>
                    
                  </div>

                  <div class="content-row">
                  <h2 class="content-row-title"></h2>
                  <div class="row">
                      
                    <div class="col-md-12">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title"></h3>
                        </div>
                        <div class="panel-body">
                          
                        </div>
                      </div>
                      
                        
                    </div>
                    
                  </div>

                  <div class="content-row">
                  <h2 class="content-row-title">Panels</h2>
                  <div class="row">
                      
                    <div class="col-md-12">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                          Panel content
                        </div>
                      </div>
                      
                        
                    </div>
                    
                  </div>
                </div>

              </div><!-- panel body -->
            </div>
        </div><!-- content -->


                    
                        
                    </div>
                    </div>
                    <!-- Thumbnails
                                    ================================================== -->
                    
                    </div>
                </div><!-- panel body -->
                </div>
            </div><!-- content -->
        </div>
    </div>

 

@endsection 


@section('css') 

@endsection 

@section('scripts') 
@endsection