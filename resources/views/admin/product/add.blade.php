@extends('admin/app')
@section('content')
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên Sản Phẩm</label>
            <input type="text" class="form-control" id="" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Giá Sản Phẩm</label>
            <input type="number" class="form-control" id="" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Hình ảnh</label>
            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" >
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Loại Sản Phẩm</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Mô tả sản phẩm</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <button style="width: 130px" type="button" class="btn btn-success form-control">Thêm mới</button>
        </div>
    </form>
@endsection
