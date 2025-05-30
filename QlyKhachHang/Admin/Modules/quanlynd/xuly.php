<?php 
    include('../../config/config.php');
    $ho = $_POST['ho'];
    $ten = $_POST['ten'];
    $sdt = $_POST['so_dien_thoai'];
    $diachi = $_POST['dia_chi'];
    $gioitinh = $_POST['gioi_tinh'];
    $ngaysinh = $_POST['ngay_sinh'];
    $email = $_POST['email'];
    $pass = $_POST['mat_khau'];
    $quoctinh = $_POST['quoc_tich'];
    $sothich = isset($_POST['so_thich']) ? implode(", ", $_POST['so_thich']) : "";
    $mota = $_POST['mo_ta'];
    $sllanmuahang = $_POST['so_lan_mua'];
    $tonggiatrimua = $_POST['tong_gia_tri_mua'];    
    $lancuimua = $_POST['lan_cuoi_mua'];
    $xep_hang = $_POST['xep_hang'];
    $trang_thai = $_POST['trang_thai'];
    if(isset($_POST['them'])){
        $sql_them = "INSERT INTO khach_hang(ho, ten, so_dien_thoai, dia_chi, gioi_tinh, ngay_sinh, email, mat_khau, quoc_tich, so_thich, mo_ta,
        so_lan_mua, tong_gia_tri_mua, lan_cuoi_mua, xep_hang, trang_thai)
        VALUES('$ho', '$ten', '$sdt', '$diachi', '$gioitinh', '$ngaysinh', '$email', '$pass', '$quoctinh', '$sothich', '$mota', '$sllanmuahang', '$tonggiatrimua',
        '$lancuimua', '$xep_hang', '$trang_thai')";
        mysqli_query($mysqli, $sql_them);
        header('Location:../../index.php?action=quanlynd&query=lietke');
    }
    
    else if(isset($_POST['sua'])){
        $sql_sua = "UPDATE khach_hang SET
        ho = '$ho', ten = '$ten', so_dien_thoai = '$sdt', dia_chi = '$diachi', gioi_tinh = '$gioitinh', 
        ngay_sinh = '$ngaysinh', email = '$email', mat_khau = '$pass', quoc_tich = '$quoctinh', so_thich = '$sothich', mo_ta = '$mota',
        so_lan_mua = '$sllanmuahang', tong_gia_tri_mua = '$tonggiatrimua', lan_cuoi_mua = '$lancuimua', xep_hang = '$xep_hang', 
        trang_thai = '$trang_thai' WHERE id = '$_GET[id]' LIMIT 1"; 
        mysqli_query($mysqli, $sql_sua);
        header('Location:../../index.php?action=quanlynd&query=lietke');
    }
    else{
        $id = $_GET['id'];
        $sql_xoa = "DELETE FROM khach_hang WHERE id = '$id' ";
        mysqli_query($mysqli, $sql_xoa);
        header('Location:../../index.php?action=quanlynd&query=lietke');
    }
?>