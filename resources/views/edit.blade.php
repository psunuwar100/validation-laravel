<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center">Welcome To Outdoor</h1>
    <form class="col-6 mx-auto" method="post" action="{{route('updateProducts')}}">
      @csrf
  <div class="mb-3">
  <input type="hidden" name="id" class="form-control" placeholder="Edit your Todo" value="{{$products->id}}" >
    <label for="Batch" class="form-label">Batch</label>
    <input type="text" name="updateName" class="form-control" id="" value="{{$products->batchName}}">
  </div>
  <div class="mb-3">
    <label for="Quantity" class="form-label">Quantity</label>
    <input type="text" name="updateQuantity" class="form-control" id="" value="{{$products->batchQuantity}}">
  </div>
  <div class="mb-3">
      <label for="Status" class="form-label">Status</label>
      <select class="form-select" name="updateStatus" value="{{$products->status}}" aria-label="Default select example">
        <option value="Small">Small</option>
        <option value="Medium">Medium</option>
        <option value="Large">Large</option>
        </select>
    </div>
    <div class="mb-3">
      <label for="Remarks" class="form-label">Remarks</label>
      <input type="textarea" name="updateRemarks" class="form-control" id="" value="{{$products->remarks}}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
</body>
</html>