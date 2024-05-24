{{-- <div class="card"> --}}
    {{-- <div class="card-body"> --}}

        <div class="table overflow-auto" tabindex="8">

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">عنوان جستجو</label>
                <div class="col-sm-10">
                    <input type="text" class="text-left form-control" dir="rtl"
                        wire:model.live.debounce.250ms="search">
                </div>
            </div>


            <div class="form-group">
                <div class="d-flex justify-content-around">
                    <div class="mr-10">
                        <button type="button" wire:click="$refresh" class="btn btn-success btn-uppercase">
                            <i class="ti-check-box m-r-5"></i> بروز رسانی
                        </button>

                        <button type="submit" wire:click="$set('search','')" class="btn btn-success btn-uppercase">
                            <i class="ti-check-box m-r-5"></i> پاک کردن
                        </button>

                        {{-- <button type="submit" wire:click="resetSearch" class="btn btn-success btn-uppercase">
                                <i class="ti-check-box m-r-5"></i> پاک کردن فرم با js
                            </button> --}}
                    </div>

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

                    @foreach ($users as $user)
                        <tr>
                            <td class="text-center align-middle">{{ $user->id }}</td>
                            <td class="text-center align-middle">
                                <figure class="avatar">
                                    @if ($user->image != null)
                                        <img src="{{ asset('storage/photos/' . $user->image) }}" class="rounded-circle"
                                            alt="image">
                                    @else
                                        <img src="{{ asset('default_image/no-image-icon-23494.png') }}"
                                            class="rounded-circle" alt="image">
                                    @endif
                                </figure>
                            </td>
                            <td class="text-center align-middle">{{ $user->name }}</td>
                            <td class="text-center align-middle">{{ $user->email }}</td>
                            <td class="text-center align-middle">{{ $user->mobile }}</td>
                            <td class="text-center align-middle">
                                <a class="btn btn-outline-info" href="#">
                                    نقش های کاربر
                                </a>
                            </td>
                            <td class="text-center align-middle">
                                <span class="cursor-pointer badge badge-success">فعال</span>
                            </td>
                            <td class="text-center align-middle">
                                <button class="btn btn-outline-info" wire:click="edit({{ $user->id }})">
                                    ویرایش
                                </button>
                            </td>
                            <td class="text-center align-middle">{{ $user->created_at }}</td>
                        </tr>
                    @endforeach


            </table>
            <div style="margin: 40px !important;"
                class="pagination pagination-rounded pagination-sm d-flex justify-content-center">
                {{ $users->links(data: ['scrollTo' => false]) }}
            </div>
        </div>
    {{-- </div> --}}
{{-- </div> --}}
