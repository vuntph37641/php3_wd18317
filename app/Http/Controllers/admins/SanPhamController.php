<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    // Sử dụng khi dùng SQL thuần và Query Builder
    public $san_pham;
    // Khởi tạo 1 đối tượng là sản phẩm model
    public function __construct()
    {
        $this->san_pham = new SanPham();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Sử dụng khi dùng SQL thuần và Query Builder
        // Lấy ra dữ liệu
        $listSanPham = $this->san_pham->getList();

        // Sử dụng Eloquentx
        //$listSanPham = SanPham::get();
        // toArray: Để lấy ra mảng dữ liệu
        $title = "Danh sách sản phẩm";
        return view('admins.sanpham.index', compact('title', 'listSanPham'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('Đây là create resouce');
        $title="Them san pham";
        return view('admins.sanpham.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        if ($request->isMethod('POST')) {
            //cach 1
            // $params =$request->post();
            // unset($params['token'];)
            // cach 2 
            $params =$request->except('_token');
            // dd($params);
            //su dung query builder
            //$this->san_pham->createProduct($params);
            //Sử dụng Eloquent
            SanPham::create($params);
            return redirect()->route('sanpham.index')->with('success','Them sp thanh cong !');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function test()
    {
        dd('Phương thức test');
    }
}