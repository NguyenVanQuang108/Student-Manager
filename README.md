# Student Manager Plugin

## Thông tin sinh viên

- Họ tên: Nguyễn Văn Quang
- MSSV: 23810310108
- Bài thực hành: Lập trình Plugin Quản lý Sinh viên
- Ngày thực hành: 24/04/2026

## Mô tả plugin

Student Manager là plugin WordPress dùng để quản lý thông tin sinh viên.

Plugin hỗ trợ:

- Tạo Custom Post Type "Sinh viên"
- Nhập họ tên sinh viên bằng tiêu đề bài viết
- Nhập tiểu sử hoặc ghi chú bằng editor
- Thêm Meta Box gồm:
  - Mã số sinh viên
  - Lớp/Chuyên ngành
  - Ngày sinh
- Lưu dữ liệu an toàn bằng Nonce và Sanitize
- Hiển thị danh sách sinh viên ngoài Frontend bằng shortcode

## Cấu trúc thư mục

```text
student-manager/
│
├── student-manager.php
│
├── includes/
│   ├── student-cpt.php
│   ├── student-meta-box.php
│   └── student-shortcode.php
│
├── assets/
│   └── style.css
│
└── README.MD

# Hình ảnh
![Uploading image.png…]()

