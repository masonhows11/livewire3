<div>
    <div class="card">
        <div class="card-body">
            <div class="table overflow-auto" tabindex="8">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">عنوان جستجو</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control text-left" dir="rtl" wire:model="search">
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center align-middle text-primary">ردیف</th>
                            <th class="text-center align-middle text-primary">عکس</th>
                            <th class="text-center align-middle text-primary">نام و نام خانوادگی</th>
                            <th class="text-center align-middle text-primary">ایمیل</th>
                            <th class="text-center align-middle text-primary">موبایل</th>
                            <th class="text-center align-middle text-primary">نقش های کاربر</th>
                            <th class="text-center align-middle text-primary"> وضعیت</th>
                            <th class="text-center align-middle text-primary">ویرایش</th>
                            <th class="text-center align-middle text-primary">تاریخ ایجاد</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center align-middle"></td>
                            <td class="text-center align-middle">
                                <figure class="avatar avatar">
                                    <img src="{{ asset('default_image/no-image-icon-23494.png') }}" class="rounded-circle" alt="image">
                                </figure>
                            </td>
                            <td class="text-center align-middle"></td>
                            <td class="text-center align-middle"></td>
                            <td class="text-center align-middle"></td>
                            <td class="text-center align-middle">
                                <a class="btn btn-outline-info" href="#">
                                    نقش های کاربر
                                </a>
                            </td>
                            <td class="text-center align-middle">
                                <span class="cursor-pointer badge badge-success">فعال</span>
                            </td>
                            <td class="text-center align-middle">
                                <a class="btn btn-outline-info" href="#">
                                    ویرایش
                                </a>
                            </td>
                            <td class="text-center align-middle"></td>
                        </tr>

                </table>
                <div style="margin: 40px !important;"
                    class="pagination pagination-rounded pagination-sm d-flex justify-content-center">
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="">
                <h6 class="card-title">ایجاد کاربر</h6>
                <form method="POST">

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">نام و نام خانوادگی</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control text-left" dir="rtl" name="name">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">ایمیل</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control text-left" dir="rtl" name="email">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">موبایل</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control text-left" dir="rtl" name="mobile">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">پسورد</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control text-left" dir="rtl" name="password">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="file"> آپلود عکس </label>
                                <input class="col-sm-10" type="file" class="form-control-file" id="file">
                            </div>
                        </div>


                        <div class="col-md-4 d-flex justify-content-around">
                            <div class="form-group row">
                                <button type="submit" class="btn btn-success btn-uppercase">
                                    <i class="ti-check-box m-r-5"></i> ذخیره
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
