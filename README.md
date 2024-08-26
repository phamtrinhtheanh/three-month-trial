# G-ECommerce

## Phạm vi dự án
- Phát triển website thương mại điển tử
- Tích hợp hệ thống thanh toán
- Xây dựng hệ thống quản lý đơn hàng, sản phẩm, tồn kho sản phẩm và kho hàng
- Triển khai các tính năng quản lý người dùng, người bán và sản phẩm

## Chức năng
### Chức năng người dùng
- [ ] Đăng ký, đăng nhập tài khoản
- [ ] Tìm kiếm sản phẩm
- [ ] Thêm sản phẩm vào giỏ hàng
- [ ] Thanh toán đơn hàng
- [ ] Theo dõi đơn hàng
- [ ] Đánh giá và bình luận sản phẩm

### Chức năng người bán
- [ ] Đăng ký và quản lý tài khoản người bán
- [ ] Quản lý danh mục sản phẩm
- [ ] Thêm và quản lý sản phẩm
- [ ] Quản lý kho hàng, tồn kho sản phẩm, khách hàng
- [ ] Quản lý đơn hàng và giao hàng
- [ ] Báo cáo thống kê các chỉ số: hàng bán, hàng tồn, doanh thu, lợi nhuận.
- [ ] Quản lý và áp dụng các chương trình khuyến mại

### Chức năng quản trị viên
- [ ] Quản lý người dùng và người bán
- [ ] Theo dõi và quản lý đơn hàng
- [ ] Quản lý báo cáo và số liệu sản phẩm, số liệu khách hàng, số liệu kinh doanh

## Các yêu cầu cơ bản bắt buộc cần hoàn thành
1. Hoàn thành flow đăng ký/đăng nhập
2. Hệ thống tối thiểu phải có 2 roles: Người mua, người bán
3. Hoàn thiện flow mua hàng → thanh toán
4. Dashboard tồn kho sản phẩm cho người bán
5. Optional:
    1. Api response time: p95 < 200ms
    2. Dữ liệu cần import tối thiểu 1tr sản phẩm
    3. Tìm kiếm sản phẩm theo hành vi của người dùng



-----

## Commands
### Module

#### Module Init
- `Migrate:fresh` & `db:seed`
```shell
php artisan module:init
```

#### Make Module
```shell
php artisan make:module {module}
```

#### Make Repositories
```shell
php artisan module:make-repositories {name} {--module=}
```

#### Make Controller
```shell
php artisan module:make-controller {name} {--module=} {--type=}
```

#### Make Migration
```shell
php artisan module:make-migration {name} {--module=} {--table=}
```

#### Make Service

```shell
php artisan module:make-service {name} {--module=}
```

#### Make Contract

```shell
php artisan module:make-contract {name} {--module=}
```

#### Make Model
```shell
php artisan module:make-model {name} {--module=}
```

#### Make Repository
```shell
php artisan module:make-repository {name} {--module=}
```




































----









