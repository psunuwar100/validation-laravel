@extends('layout.app')

    @section('content')
        <h1>Welcome To Dashboard</h1>
        <form action="{{route('logout')}}" method="get">
            <button type="submit" class="btn btn-secondary">Log out</button>
        </form>

            <form class="col-6 mx-auto" method="post" action="{{route('saveProducts')}}">
      @csrf
  <div class="mb-3">
    <label for="Batch" class="form-label">Batch</label>
    <input type="text" name="batchName" class="form-control" id="">
  </div>
  <div class="mb-3">
    <label for="Quantity" class="form-label">Quantity</label>
    <input type="text" name="batchQuantity" class="form-control" id="">
  </div>
  <div class="mb-3">
      <label for="Status" class="form-label">Status</label>
      <select class="form-select" name="Status" aria-label="Default select example">
          <option value="Small">Small</option>
          <option value="Medium">Medium</option>
          <option value="Large">Large</option>
        </select>
    </div>
    <div class="mb-3">
      <label for="Remarks" class="form-label">Remarks</label>
      <input type="textarea" name="Remarks" class="form-control" id="" >
    </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<table class="table table-hover w-75 mx-auto my-3">
            <thead>
                <tr class="table-primary">
                    <th scope="col">SN</th>
                    <th scope="col">Batch</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Status</th>
                    <th scope="col">Remarks</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-success">
                        @foreach($items as $value)
                        <tr class="table-primary">
                          <th scope="row">{{$loop->index+1}}</th>
                          <td>{{$value->batchName}}</td>
                          <td>{{$value->batchQuantity}}</td>
                          <td>{{$value->status}}</td>
                          <td>{{$value->remarks}}</td>
                            <td>
                                <a class="btn btn-primary" href="/edit/{{$value->id}}">Edit</a>
                                <a class="btn btn-danger" href="/delete/{{$value->id}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                </tr>
            </tbody>
        </table>
    @endsection 