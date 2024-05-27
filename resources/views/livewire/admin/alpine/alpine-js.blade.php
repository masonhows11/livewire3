<main class="main-content">
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


        <div class="card-body">

            <div x-data="dropdown">
                <button @click="toggle">نمایش محتوا</button>

                <div x-show="open">
                    سلام آلپاین شخمی
                </div>
            </div>

        </div>

    </div>
</main>
@push('admin_scripts')
<script>
document.addEventListener('alpine:init', () => {
        Alpine.data('dropdown', () => ({
            open: false,

            toggle() {
                this.open = ! this.open
            },
        }))
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
