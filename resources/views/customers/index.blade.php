@extends('layout')


    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
 
            <div class="pull-left">
                  <a href="{{ route('customers.create') }}" class='btn btn-success'><span class="glyphicon glyphicon-plus"></span> Customer</a>    

                  <button type="button" class="btn btn-default" id='srchButt'>
      <span class="glyphicon glyphicon-search"></span> Search
    </button>
    <div id='searchForm' style='display:none'>
            {!! Form::open(['method' => 'GET','route' => ['customers.index'],'style'=>'display:inline']) !!}
       <input type="text" name="search" value="" placeholder="Surname Search"> <button class="btn btn-default">Search</button>
    {!! Form::close() !!}
    </div>
        </div>
    </div>

Displaying {{count($customers)}} records on this page of a total of {{ $customers->total() }}
{!! $customers->links() !!}



    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
             <th>Firstname</th>
            <th>Surname</th>
             <th>Email</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($customers as $customer)
    <tr>
         <td>{{ $customer->Fname}}</td>
        <td>{{ $customer->Sname}}</td>
         <td>{{ $customer->Email}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('customers.show',$customer->id) }}"><span class='    glyphicon glyphicon-th-list'></span></a>
            <a class="btn btn-primary" href="{{ route('customers.edit',$customer->id) }}"> <span class='    glyphicon glyphicon-pencil'></span></a>
            {!! Form::open(['method' => 'DELETE','route' => ['customers.destroy', $customer->id],'style'=>'display:inline']) !!}
             <button class="btn btn-danger" href="{{ route('customers.edit',$customer->id) }}"> <span class='glyphicon glyphicon-remove'></span></button>
            
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>


    {!! $customers->links() !!}
@endsection



<script>
$( document ).ready(function() {
    

    $( "#srchButt" ).click(function() {
        
  $('#searchForm').toggle();
});

});
</script>
