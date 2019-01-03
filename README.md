# Hướng dẫn cập nhật từ NukeViet Egov 1.1.01 lên NukeViet Egov 1.1.02

Nếu phiên bản NukeViet Egov của bạn nhỏ hơn 1.1.01 bạn cần tìm hướng dẫn nâng cấp lên phiên bản 1.1.01 trước khi tiến hành các bước tiếp theo.

## Nâng cấp hệ thống:

### Bước 1: Chuẩn bị trước khi cập nhật:

- Backup toàn bộ CSDL và các file code, tránh tình trạng có vấn đề phát sinh site không hoạt động được sau update.
- Nếu site của bạn đã tùy biến các thư mục bằng cách sửa file includes/constants.php hãy đưa về mặc định, sau nâng cấp tiến hành cấu hình trở lại.
- Trong quá trình cập nhật bị đẩy ra, bạn đăng nhập lại quản trị.

### Bước 2: Thực hiện cập nhật:

> Chú ý: Để đảm bảo dễ dàng xử lý trong trường hợp xảy ra sự số trong và sau nâng cấp, ngoài các công việc được khuyến nghị ở bước 1, bạn nên thực hiện thêm các thao tác sau nếu có thể:
> - Thực hiện dọn dẹp hệ thống để xóa các file log. Bạn có thể thực hiện việc này bằng thao tác: Tại khu vực quản trị chọn **Công cụ web => Dọn dẹp hệ thống**, nhấp vào ô check ở dòng **Xóa các thông báo lỗi** sau đó nhấp **Thực hiện**
> - Thực hiện cập nhật bằng một trong các cách bên dưới.
> - Nếu trong quá trình cập nhật hoặc sau khi cập nhật website xảy ra sự cố hãy sao chép nội dung trong file có dạng **dd-mm-yyyy_error_log.log** ở thư mục **data/logs/error_logs/** để gửi hỗ trợ tại [Diễn đàn NukeViet.Vn](https://nukeviet.vn/vi/forum/nang-cap-egov/).

#### Cập nhật tự động:

Đăng nhập quản trị site dưới quyền admin tối cao, di chuyển vào khu vực *Công cụ web => Kiểm tra phiên bản*, tại đây nhận thông báo cập nhật và làm theo các bước hệ thống hướng dẫn.

Nếu thất bại hãy thử cách cập nhật thủ công bên dưới.

#### Cập nhật thủ công:

Download gói cập nhật tại: https://github.com/nukeviet/update-egov/releases/download/to-1.1.02/update-egov-to-1.1.02.zip
Giải nén và Upload các file trong gói cập nhật với cấu trúc của NukeViet Egov, sau đó vào admin để tiến hành cập nhật.


### Bước 4: Cấu hình lại site.
- Tìm file config.php Tìm cấu hình sitekey đổi giá trị sitekey (Việc này cần thực hiện để đảm bảo an toàn).
- Thực hiện dọn dẹp hệ thống để xóa các file log. Bạn có thể thực hiện việc này bằng thao tác: Tại khu vực quản trị chọn **Công cụ web => Dọn dẹp hệ thống**, nhấp vào ô check ở dòng **Xóa các thông báo lỗi** sau đó nhấp **Thực hiện**
- Vào phần: **Cấu hình -> Cấu hình chung** Lưu thay đổi để hệ thống ghi lại một số thiết lập.
- Vào phần: **Cấu hình -> Thiết lập an ninh ** Chọn tab **Cấu hình hiển thị captcha** để chọn Loại captcha là reCAPTCHA sau đó khai báo các thông số Site key, Secret key bằng cách đăng ký tài khỏan captcha tại https://www.google.com/recaptcha/admin#list (Ghi chú: Nếu website của bạn chạy trên mạng nội bộ không có Internet cấu hình  Loại captcha là Captcha mặc định)
- Nếu site có sử dụng các thư viện bên ngoài như phpoffice/phpspreadsheet thông qua composer, bạcn cần khai báo để composer cập nhật lại
- Cấu hình lại các mật khẩu đã nhập vào hệ thống như: Tài khoản FTP, SMTP 