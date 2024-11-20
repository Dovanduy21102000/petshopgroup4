<?php
class AdminTaiKhoanController
{
    public $modelTaiKhoan;
    public $modelSanPham;
    public $modelDonHang;
    public function __construct()
    {
        $this->modelTaiKhoan = new AdminTaiKhoan();
        $this->modelDonHang = new AdminDonHang();
        $this->modelSanPham = new AdminSanPham();
    }
    public function   danhSachQuanTri() {}
    public function     formAddQuanTri() {}
    public function postAddQuanTri() {}
    public function formEditQuanTri() {}
    public function postEditQuanTri() {}
    public function resetPassword() {}
    public function danhSachKhachHang() {}
    public function formEditKhachHang() {}
    public function postEditKhachHang() {}
    public function detailKhachHang() {}
    public function formEditCaNhanQuanTri() {}
    public function postEditCaNhanQuanTri() {}
    public function postEditMatKhauCaNhan() {}
    public function formLogin() {}
    public function login() {}
    public function logout() {}
}
