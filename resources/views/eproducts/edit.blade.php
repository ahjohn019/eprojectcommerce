@extends('eproducts.base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update eproducts</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('eproducts.update', $eproducts->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="ename">Electronic Name:</label>
                <input type="text" class="form-control" name="ename" value={{ $eproducts->ename }} />
            </div>

            <div class="form-group">
                <label for="eamount">Electronic Price:</label>
                <input type="text" class="form-control" name="eamount" value={{ $eproducts->eamount }} />
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection