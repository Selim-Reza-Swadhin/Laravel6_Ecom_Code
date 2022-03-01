@extends('layouts.app')

@section('content')

                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home')}}">Dashboard</a></li>

                            <li><a href="javascript:avoid(0)">Brand</a></li>

                            <li><a href="javascript:avoid(0)">Manage Brand</a></li>
                        </ul>
                    </div>
                </div>

                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                
                <div class="row">
                 <div class="col-sm-12 col-md-8 col-md-offset-2">
                 
@include('includes.message')

                    <div class="panel b-primary bt-md">
                        <div class="panel-content">
                        <div class="row">
<div class="col-xs-6">
<h4>Manage Brand</h4>
</div>
<div class="col-xs-6 text-right">
<a href="{{ route('add-brand') }}" class="btn btn-primary">Add Brand</a>
</div>
                        </div>

<div class="table-responsive">
                                <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>SI No</th>
                                        <th>Brand Name</th>
                                        <th>Status</th>
                                        <th>StatusN</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
    @php($i = 1)                                 <tbody>
  @foreach($brand as $row) 
  
  <tr> 

<td>{{ $i }}</td>
<td>{{ $row -> brand_name}}</td>
<td>
<input type="checkbox" id="brandStatus" data-id="{{ $row->id }}" data-toggle="toggle" data-on="Active"  data-off="Inactive"  {{ $row->status == 1 ? 'checked' : ''  }} >
</td>
<td>{{ $row -> status == 1 ? 'Active' : 'Inactive' }}</td>
<td>
@if($row -> status == 1)
<a href="{{ route('inactive-brand', $row -> id) }}" class="btn btn-info btn-xs"><i class="fa fa-arrow-up"></i></a>
@else
<a href="{{ route('active-brand', $row -> id) }}" class="btn btn-warning btn-xs"><i class="fa fa-arrow-down"></i></a>
@endif
<a href="{{ route('edit-brand', $row -> id) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
<a href="{{ route('delete-brand', $row -> id) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
</td>

</tr>
@php($i++)
@endforeach
                                  
                                    
                                      </tbody>

                        </div>
                        </div>
                    </div>
                </div>
                </div>

                </div>

                @endsection