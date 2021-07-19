@extends('admin/app')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h3>thêm sản phẩm mới</h3>
                <div class="headersp">
                    <div class="container-fluid">
                        @if (session('thongbao'))
                            <div class="alert alert-success" role="alert">
                                {{ session('thongbao') }}
                            </div>
                        @endif
                        <form action = "../../admin/product/add2" method="POST" enctype="multipart/form-data">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tên sản phẩm</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="tên sản phẩm mới">
                                @if ($errors->has('name'))
                                    <div  class="form-group">
                                        <label for="exampleInputPassword1" class="text-danger">{{ $errors->first('name')}}</label>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Giá sản phẩm</label>
                                <input type="text" class="form-control" name="price" id="price" placeholder="Giá sản phẩm">
                                @if ($errors->has('price'))
                                    <div  class="form-group">
                                        <label for="exampleInputPassword1" class="text-danger">{{ $errors->first('price')}}</label>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Thêm ảnh sản phẩm</label>
                                <input type="file" class="form-control" name="image" id="image" placeholder="Thêm ảnh sản phẩm">
                                @if ($errors->has('image'))
                                    <div  class="form-group">
                                        <label for="exampleInputPassword1" class="text-danger">{{ $errors->first('image')}}</label>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Loại sản phẩm</label>
                                <select class="custom-select" name="id_type">
                                    @foreach ($type as $item)
                                        <option value="{{ $item->id_type}}">
                                        {{ $item->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                <input type="text" class="form-control" name="description" id="description" placeholder="Mô tả sản phẩm">
                                @if ($errors->has('description'))
                                    <div  class="form-group">
                                        <label for="exampleInputPassword1" class="text-danger">{{ $errors->first('description')}}</label>
                                    </div>
                                @endif
                            </div>


                            <div class="form-group form-check">
                                <button type="submit" name="add_sp" class="btn btn-primary">Thêm mới</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
