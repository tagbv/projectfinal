@extends('admin/app')
@section('content')
        <a class="nc-icon nc-simple-add btn btn-primary" href="{{URL::to('admin/product/add')}}"><small></small></a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Stt</th>
                <th scope="col">Tên Sản Phẩm</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Giá</th>
                <th scope="col">Mô Tả</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product as  $key => $value):?>
            <tr>
                <td scope="row"> {{$key +1}}</td>
                <td>{{$value ['name'] }}</td>
                <td><img class="rounded" style="width: 50px; height: 50px;" src="../../admin/./assets/img/{{$value ['image']}}" alt=""></td>
                <td>{{$value ['price'] }}</td>
                <td>{{$value ['description'] }}</td>
                <td><button type="button" class="btn btn-success">Sửa</button>
                </td>
                <td><button type="button" class="btn btn-danger">Xóa</button>
                </td>
                {{-- <td style="float: right;">
                    <a href="{{URL::to('admin/product/edit',$value ['product_id'])}}"><button class="btn btn-primary">sửa</button></a>
                    <a href="{{Route('delete',['id' =>$value->product_id])}}"><button class="btn btn-primary">Xóa</button></a>
                </td> --}}
            </tr>
        <?php   endforeach ?>
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
@endsection
