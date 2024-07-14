{{-- extends dùng đề kế thừa Layout --}}
@extends('layouts.admin')

@section('title')
    {{ $title }}
@endsection

@section('css')
  
@endsection

@section('content')
    <div class="card">
        <h4 class="card-header">{{ $title }}</h4>
        <div class="card-body">
            <form action="{{ route('sanpham.store') }}" method="POST">
                {{-- LÀM VIỆC VỚI FORM TRONG LARAVEL --}}
                {{-- 
                    CSRF Field: là 1 trường ẩn mà Laravel bắt buộc phải có trong form
                                cho mục đích bảo mật
                --}}
                @csrf

                <div class="mb-3">
                    <label for="" class="form-label">Mã sản phẩm</label>
                    <input type="text" class="form-control" name="ma_san_pham" placeholder="Nhập mã sản phẩm">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="ten_san_pham" placeholder="Nhập tên sản phẩm">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Giá sản phẩm</label>
                    <input type="number" class="form-control" name="gia" min="1" placeholder="Nhập giá sản phẩm">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Số lượng</label>
                    <input type="number" class="form-control" name="so_luong" min="0" placeholder="Nhập số lượng sản phẩm">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Ngày nhập</label>
                    <input type="date" class="form-control" name="ngay_nhap">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Mô tả</label>
                    <textarea name="mo_ta" cols="30" rows="3" class="form-control" placeholder="Nhập mô tả sản phẩm"></textarea>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Trạng thái</label>
                    <select name="trang_thai" class="form-select">
                        <option selected>Trạng thái của sản phẩm</option>
                        <option value="0">Hết hàng</option>
                        <option value="1">Còn hàng</option>
                    </select>
                </div>

                <div class="mb-3 d-flex justify-content-center">
                    <button type="reset" class="btn btn-outline-secondary me-3">Nhập lại</button>
                    <button type="submit" class="btn btn-success">Thêm mới</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')

@endsection