<main class="main-content">

    <div class="card">

        <div class="card-body" x-data="{
            name: 'ali',
            changename() { this.name = 'joe' },
            resetname() { this.name = 'ali' }
        }">
            {{-- <button class="btn btn-skype" x-on:click="alert('hi funkcing alpine js')">سلام شیر بزرگ</button>
             <h3 x-text="name"></h3>
             <button class="btn btn-primary" x-on:click="changename">تغییر نام</button> --}}


            <h3 x-text="name"></h3>
            <button class="mt-3 btn btn-primary" @click="changename">تغییر نام کلیک</button>
            <br>
            <button class="mt-3 btn btn-primary" @dblclick="changename">تغییر نام دابل کلیک</button>
            <br>
            <button class="mt-3 btn btn-primary" @click="resetname">رفرش</button>


        </div>

    </div>

    <div class="card">

        <div class="card-body">

            <div x-data="{ open: false }">
                <button @click="open = ! open">نمایش محتوا</button>

                <div x-show="open">
                    فاک یووووو
                </div>
            </div>

        </div>

    </div>


    <div class="card">

        <div class="card-body">

            <h5> x-show</h5>

            <div x-data="{ open: false }">

                <button @click="open = ! open ">
                    s-show
                </button>


                <div x-show="open" y-transition>
                    نمایش x-show
                </div>

            </div>

        </div>


        <div class="card-body">

            <h5> x-show</h5>

            <div x-data="{ open: false }">

                <button @click="open = ! open ">
                    s-show
                </button>


                <div x-show="open" x-transition>
                    نمایش x-show
                </div>

            </div>

        </div>



        <div class="card-body">

            <h5> x-bind attr </h5>

            <div x-data="{ placehoder: ' اینجا بنویس ... ' }">

                <input type="text" x-bind:placeholder="placehoder">

            </div>
        </div>

        <div class="card-body">

            <h5> shortand x-bind attr </h5>

            <div x-data="{ placehoder: ' اینجا بنویس ... ' }">

                <input type="text" :placeholder="placehoder">

            </div>
        </div>

        <div x-data="{ open:false }" class="card-body">

            <h5>  x-bind class </h5>

            <button @click="open = ! open ">نمایش محتوا</button>

            <div :class="open ? 'custom-style mt-4 p-4' : 'custom-hidden ' ">
                سلام شیر
            </div>

        </div>

    </div>

    <div class="card">

        {{-- <div class="card-body">

            <h1 x-data="{ textmessage: 'I ❤️ Fucking Alpine' }" x-text="textmessage"></h1>

        </div> --}}

        {{-- <div class="card-body">

            <h1 x-data="{ data: 'I ❤️ Alpine' }" x-text="data"></h1>

        </div> --}}


        {{-- <div class="card-body" x-data="{ name:'ali',age:35,mobile:09917230927,family:'<b>hassan zadeh</b>' }">

            <h1  x-text="name"></h1>
            <br/>
            <h2  x-text="age"></h2>
            <br/>
            <h3  x-text="mobile"></h3>
            <br>
            <h4 x-html="family"></h4>


        </div> --}}


        {{-- <div class="card-body">

            <div x-data="{ open: false }">
                <button @click="open = ! open">نمایش محتوا</button>

                <div x-show="open">
                    سلام شیری
                </div>
            </div>

        </div> --}}

        {{-- <div class="card-body" x-data="firstdata">
            <h4  x-text="name"></h4>
            <br/>
            <h4  x-text="age"></h4>
            <br/>
            <h4  x-text="mobile"></h4>
            <br>
            <h4 x-text="family"></h4>
        </div> --}}


        {{-- <div class="card-body">

            <div x-data="dropdown">
                <button @click="toggle">نمایش محتوا</button>

                <div x-show="open">
                    سلام آلپاین شخمی
                </div>
            </div>

        </div> --}}

    </div>
</main>
@push('admin_scripts')
    <script>
        document.addEventListener('alpine:init', () => {

            Alpine.data('firstdata', () => ({

            }))

            // dropdown in parent div / element that contain our data
            // Alpine.data('dropdown', () => ({
            //     open: false,

            //     toggle() {
            //         this.open = ! this.open
            //     },
            // })),

            // firstdata in parent div / element that contain our data
            // Alpine.data('firstdata', () => ({
            //     name:'ali',
            //     age:35,
            //     mobile:09917230927,
            //     family:'hassan zadeh'
            // }))
        })

        // document.addEventListener('alpine:init', () => {
        //     Alpine.data('dropdown', () => ({
        //         open: false,

        //         toggle() {
        //             this.open = ! this.open
        //         },
        //     }))
        // })
    </script>
@endpush
