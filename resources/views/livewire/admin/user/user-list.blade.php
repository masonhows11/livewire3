<div>

    <div class="card">

        <div class="card-body">
            <div class="">
                @if (session()->has('success'))
                    <div class="alert alert-info">
                        {{ session('success') }}
                    </div>
                @endif

            </div>
        </div>

        <div class="card-body">
            <div class="">
                <h6 class="card-title">ایجاد کاربر</h6>
                <form wire:submit="save">

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">نام و نام خانوادگی</label>
                                <div class="col-sm-10">
                                    <input type="text" class="text-left form-control" wire:model="name" dir="rtl" name="name">
                                    @error('name')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                     @enderror
                                </div>

                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">ایمیل</label>
                                <div class="col-sm-10">
                                    <input type="text" class="text-left form-control" wire:model="email"  dir="rtl" name="email">
                                    @error('email')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                     @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">موبایل</label>
                                <div class="col-sm-10">
                                    <input type="text" class="text-left form-control" wire:model="mobile"   dir="rtl" name="mobile">
                                    @error('mobile')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                     @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">پسورد</label>
                                <div class="col-sm-10">
                                    <input type="text" class="text-left form-control" wire:model="password"  dir="rtl" name="password">
                                    @error('password')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                     @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="file"> آپلود عکس </label>
                                <input class="col-sm-5" type="file" wire:model="image" class="form-control-file" id="file">
                                <div class="col-sm-5">
                                    <div wire:loading wire:target="image" class="spinner-border text-danger" role="status">
                                        <span class="visually-hidden"></span>
                                    </div>
                                </div>
                                @error('image')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                 @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group row">
                                @if ($image)
                                <img width="150" height="150"  src="{{ $image->temporaryUrl() }}"  class="img-thumbnail" alt="image">
                                @else
                                <img width="150" height="150" src="{{ asset('default_image/no-image-icon-23494.png') }}"   class="img-thumbnail" alt="image">
                                @endif
                            </div>
                        </div>


                        <div class="col-md-12 d-flex justify-content-start">
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

    <div class="card">
        <div class="card-body">
    <livewire:admin.user.users lazy />
        </div>
    </div>
</div>
