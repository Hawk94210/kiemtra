<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
      <h3 style="text-align:center">Thêm mới nhân viên</h3>

      <form action="" method="POST">
        @csrf
        <div class="row container">
          <div class="form-group col-sm-6">
            <div class="form-group">
              <label>Mã nhân viên</label>
              <input type="text" class="form-control" style="width: 80%">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Chọn nhóm nhân viên</label>

              <select class="form-control" style="width: 80%">
                @foreach ($categorys as $category)
                <option value="category->id">{{ $category->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Họ và tên</label>
              <input type="text" name="name" value="{{ $employee->name }}" class="form-control" style="width: 80%">
              @error('name')
              <p class="text text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label>Ngày sinh</label>
              <input type="date" name="dob" value="{{ $employee->dob }}" class="form-control" style="width: 80%">
            </div>
            <div class="form-check">
              <label for="exampleFormControlSelect1">Giới tính</label>
              <select class="form-control" name="gender" style="width: 80%">
                <option>Nam</option>
                <option>Nữ</option>
              </select>
              @error('gender')
              <p class="text text-danger">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Số điện thoại</label>
              <input type="text" name="phone" value="{{ $employee->phone }}" class="form-control" style="width: 80%">
              @error('phone')
              <p class="text text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="">Số CMND</label>
              <input type="text" name="CMND" value="{{ $employee->CMND }}" class="form-control" style="width: 80%">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="text" name="email" value="{{ $employee->email }}" class="form-control" style="width: 80%">
              @error('email')
              <p class="text text-danger">{{ $message }}</p>
              @enderror
            </div>
            <label for="">Địa chỉ</label>
            <div class="form-group">
              <textarea name="address" id="" cols="55" rows="3">{{ $employee->address }}"</textarea>
              @error('address')
              <p class="text text-danger">{{ $message }}</p>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary" style="text-align-last: right">Thêm mới</button>
          </div>
        </div>
      </form>
    </div>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>