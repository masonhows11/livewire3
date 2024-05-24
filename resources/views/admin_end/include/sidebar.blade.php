<div class="navigation">
    <div class="navigation-icon-menu">

        <ul>
            <li data-toggle="tooltip" title="کاربران">
                <a href="#users" title=" کاربران">
                    <i class="icon ti-user"></i>
                </a>
            </li>
            <li data-toggle="tooltip" title="دسته بندی">
                <a href="#categories" title=" دسته بندی">
                    <i class="icon ti-user"></i>
                </a>
            </li>
            <li data-toggle="tooltip" title="مقالات">
                <a href="#articles" title="مقالات">
                    <i class="icon ti-user"></i>
                </a>
            </li>
            <li data-toggle="tooltip" title="تست">
                <a href="#test" title="تست">
                    <i class="icon ti-user"></i>
                </a>
            </li>
        </ul>
        <ul>
            <li data-toggle="tooltip" title="ویرایش پروفایل">
                <a href="#" class="go-to-page">
                    <i class="icon ti-settings"></i>
                </a>
            </li>
            <li data-toggle="tooltip" title="خروج">
                <a href="login.html" class="go-to-page">
                    <i class="icon ti-power-off"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="navigation-menu-body">
        <ul id="users">
            <li>
                <a href="#">کاربران</a>
                <ul>
                    <li><a href="{{  route('admin.user.create') }}">ایجاد کاربر</a></li>
                    <li><a href="{{ route('admin.users')}}">لیست کاربران</a></li>
                </ul>
            </li>
        </ul>
        <ul id="categories">
            <li>
                <a href="#">دسته بندی</a>
                <ul>
                    <li><a href="#">ایجاد دسته بندی</a></li>
                    <li><a href="#">لیست دسته بندی ها</a></li>
                </ul>
            </li>
        </ul>
        <ul id="articles">
            <li>
                <a href="#">مقالات</a>
                <ul>
                    <li><a href="#">ایجاد مفاله</a></li>
                    <li><a href="#">لیست مقالات</a></li>
                </ul>
            </li>
        </ul>
        <ul id="test">
            <li>
                <a href="#">آلپاین</a>
                <ul>
                    <li><a href="{{ route('admin.alpine') }}">الپاین</a></li>
                </ul>
            </li>
        </ul>
    </div>




    </div>
</div>
