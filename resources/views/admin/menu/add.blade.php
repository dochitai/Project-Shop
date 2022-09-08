@extends('admin.main')

@section('header')
    <script src="{{asset('/public/ckeditor/ckeditor.js')}}"></script>
@endsection

@section('content')
    <form action="" method="POST">
        <div class="card-body">

            <div class="form-group">
                <label for="menu">Tên Danh Mục</label>
                <input type="text" name="menu" class="form-control" id="menu" placeholder="">
            </div>

            <div class="form-group">
                <label>Danh Mục</label>
                <select class="form-control" name="parent_id" id="">
                    <option value="0">Danh Mục Cha</option>
                </select>
            </div>

            <div class="form-group">
                <label>Mô Tả</label>
                <textarea class="form-control" name="description" id="" ></textarea>
            </div>

            <div class="form-group">
                <label>Mô Tả Chi Tiết</label>
                <textarea class="form-control" name="content" id="content" ></textarea>
            </div>

            <div class="form-group">
                <label for="">Kích Hoạt</label>
                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" class="custom-control-input" id="switch" name="switch">
                  <label class="custom-control-label" for="switch"></label>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
        </div>
    </form>
@endsection

@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection