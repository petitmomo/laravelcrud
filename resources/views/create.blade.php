@extends("parent")

@section("main")


<form method="post" action ="{{ route('crud.store) }}" enctype ="multipart/form-data">

    @csrf
    <div class="form-group">
        <label class="col-md-4 text-rigth">Enter First Name</label>
        <div class="col-md-8">
            <input type="text" name="first_name" class="form-control input-lg" />
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="form-group">
        <label class="col-md-4 text-rigth">Enter Last Name</label>
        <div class="col-md-8">
            <input type="text" name="last_name" class="form-control input-lg" />
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="form-group">
        <label class="col-md-4 text-rigth">Select Profile Image</label>
        <div class="col-md-8">
            <input type="file" name="image" />
        </div>
    </div>
    <br><br><br>
    <div class="form-group text-center">
        <input type="submit" name="add" class="btn btn-primary input-lg" value="add">
    </div>

</form>
@endsection