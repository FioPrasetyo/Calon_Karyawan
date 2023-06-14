@if(Auth::check())
    @if(Auth::user()->level === 'admin')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<!-- admin -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("admin logged in!") }}
                </div>
            </div>
        </div>
    </div>
        <h1>Selamat datang, Admin!</h1>
    @else
    <!-- user -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                <div class="card">
                <div class="card-body">
                   <form action="">
                   <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Example label</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Another label</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                </div>
                   </form>
                </div>
                </div> 

                </div>
            </div>
        </div>
    </div>
    @endif
@else
    <!-- Tampilkan konten untuk pengunjung tanpa login -->
    <h1>Silakan login untuk melihat konten</h1>
@endif