@extends('eproducts.base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Contacts</h1>   
    <a href="{{ route('eproducts.create')}}" class="btn btn-primary">Create</a> 
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>EName</td>
          <td>EAmount</td>
        </tr>
    </thead>
    <tbody>
        @foreach($eproducts as $eproduct)
        <tr>
            <td>{{$eproduct->id}}</td>
            <td>{{$eproduct->ename}}</td>
            <td>{{$eproduct->eamount}}</td>
            <td>
                <a href="{{ route('eproducts.edit',$eproduct->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('eproducts.destroy', $eproduct->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection