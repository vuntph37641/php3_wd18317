<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KhachHangsCtroller extends Controller
{
    public function indexkh()
    {
        $data =[
            'name' => 'Nguyễn Tuấn Vũ',
            'age' =>20,
            'address' => 'Hà nội',
            'email' => 'vuntph37641@fpt.edu.vn',
            'phone'=>'0866812962'
        ];
        return view('khachhang.index',compact('data'));
    }

    public function add()
    {
        return view('khachhang.add');
    }

    public function edit($id)
    {
        // Xử lý logic để lấy thông tin khách hàng có ID là $id
        $khachhang = KhachHang::find($id);
        
        return view('khachhang.edit', compact('khachhang'));
    }
}
