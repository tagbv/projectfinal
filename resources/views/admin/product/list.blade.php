@extends('admin/app')
@section('content')
    {{-- modal --}}
    <!-- Button trigger modal -->
    <button type="button" class="nc-icon nc-simple-add btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        
        
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm Sản Phẩm Mới</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">Thêm Mới</button>
                </div>
            </div>
        </div>
    </div>
    {{-- /modal --}}
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
            <tr>
                <th scope="row">1</th>
                <td>sản phẩm 1</td>
                <td style="width: 100px;"><img class="rounded" style="width: 100px; height: 100px;"
                        src="../../admin/./assets/img/faces/kaci-baum-1.jpg"></td>
                <td>100000</td>
                <td style="width: 500px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus illo
                    eius, cumque sit doloribus
                    istinctio culpa voluptatibus accusantium consequuntur reiciendis minus ut
                    ab, ipsa inventore id
                    necessitatibus sunt unde laborum!
                </td>
                <td><button type="button" class="btn btn-success">Sửa</button>
                </td>
                <td><button type="button" class="btn btn-danger">Xóa</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>sản phẩm 2</td>
                <td><img class="rounded" style="width: 50px; height: 50px;" src="../../admin/./assets/img/logo-small.png">
                </td>
                <td>100000</td>
                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus illo
                    eius, cumque sit doloribus
                    istinctio culpa voluptatibus accusantium consequuntur reiciendis minus ut
                    ab, ipsa inventore id
                    necessitatibus sunt unde laborum!
                </td>
                <td><button type="button" class="btn btn-success">Sửa</button>
                </td>
                <td><button type="button" class="btn btn-danger">Xóa</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>sản phẩm 3</td>
                <td><img class="rounded" style="width: 50px; height: 50px;" src="../../admin/./assets/img/logo-small.png">
                </td>
                <td>100000</td>
                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus illo
                    eius, cumque sit doloribus
                    istinctio culpa voluptatibus accusantium consequuntur reiciendis minus ut
                    ab, ipsa inventore id
                    necessitatibus sunt unde laborum!
                </td>
                <td><button type="button" class="btn btn-success">Sửa</button>
                </td>
                <td><button type="button" class="btn btn-danger">Xóa</button>
                </td>
            </tr>
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
