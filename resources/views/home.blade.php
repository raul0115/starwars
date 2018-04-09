@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">

                   <table id="people-table" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>nombre</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                    	@foreach($peoples as $people)
                    		<tr>
                                <td> 
                                    @if($people->gender=="male")
                                    <i class="demo-icon icon-male"></i>
                                    @elseif($people->gender=="female")
                                    <i class="demo-icon icon-female"></i>
                                    @else
                                    <i class="demo-icon icon-user-o"></i>
                                    @endif

                                    @php
                                        $id= explode("/", $people->url);
                                        $count= count($id);
                                        $id= $id[$count-2];
                                    @endphp
                                    <a href="{{route('show',['id'=>$id])}}"> {{$people->name}}</a>
                                </td>
                            </tr>
                    	@endforeach
                    </tbody>
                    <tfoot>
                    </tfoot>
              </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('styles') 
<link rel="stylesheet" href="{{ asset('plugins/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">   
@endpush
@push('scripts')
<script src="{{asset('plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
 
<script>
         $(function () {
        $('#people-table').DataTable({
          'paging'      : false,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      })
</script>
@endpush