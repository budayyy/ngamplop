<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-12 pb-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('Selamat datang kembali ' . auth()->user()->name) }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="grid w-full grid-cols-1 lg:grid-cols-4 lg:gap-4 py-2">
                    {{-- kondangan --}}
                    <a href="{{ route('amplop.index') }}"
                        class="bg-white border p-8 rounded mb-2 mx-2 lg:mb-0 lg:mx-0 hover:border-blue-500 hover:bg-gradient-to-br hover:from-blue-100 hover:via-white hover:to-sky-100 group">
                        <p class="mb-2 text-lg font-bold text-gray-800 group-hover:text-blue-500">Kondangan</p>
                        <h3 class="text-3xl font-extrabold text-black group-hover:text-blue-500">{{ $jumlahKondangan }}
                        </h3>
                    </a>
                    {{-- biaya pengeluaran --}}
                    <a href="{{ route('amplop.index') }}"
                        class="bg-white border p-8 rounded mb-2 mx-2 lg:mb-0 lg:mx-0 hover:border-blue-500 hover:bg-gradient-to-br hover:from-blue-100 hover:via-white hover:to-sky-100 group">
                        <p class="mb-2 text-lg font-bold text-gray-800 group-hover:text-blue-500">Pengeluaran</p>
                        <h3 class="text-3xl font-extrabold text-black group-hover:text-blue-500">Rp.
                            {{ number_format($jumlahPengeluaran) }}</h3>
                    </a>
                    @can('admin')
                        {{-- users --}}
                        <a href="{{ route('users.index') }}"
                            class="bg-white border p-8 rounded mb-2 mx-2 lg:mb-0 lg:mx-0 hover:border-blue-500 hover:bg-gradient-to-br hover:from-blue-100 hover:via-white hover:to-sky-100 group">
                            <p class="mb-2 text-lg font-bold text-gray-800 group-hover:text-blue-500">User</p>
                            <h3 class="text-3xl font-extrabold text-black group-hover:text-blue-500">{{ $jumlahUser }}
                            </h3>
                        </a>
                    @endcan
                </div>
            </div>
        </div>
    </div>

    <div class="lg:py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="w-full py-4">
                    <a href="{{ route('amplop.create') }}"
                        class="py-4 px-8 block mx-2 lg:mx-0 lg:inline-block text-blue-500 rounded-md bg-blue-100 border border-blue-300 text-base font-semibold hover:border-blue-700 hover:bg-blue-200 hover:text-blue-600">+
                        Tambah
                        Amplop</a>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-4 pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                @if ($amplop->count())
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-800">Daftar Terakhir Kondangan</h3>
                    </div>
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th class="table-header">
                                            Nama</th>
                                        <th class="table-header">alamat</th>
                                        <th class="table-header">tanggal</th>
                                        <th class="table-header">nominal</th>
                                        <th class="table-header">status</th>
                                        <th class="table-header">keterangan</th>
                                        <th class="table-header">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($amplop as $item)
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                {{ $item->nama }}
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                {{ $item->alamat }}
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                {{ $item->tanggal }}
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                {{ number_format($item->nominal) }}
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                @if ($item->status === 0)
                                                    <span
                                                        class="text-green-700 bg-green-100 rounded-lg py-2 px-4 font-bold">kondangan</span>
                                                @else
                                                    <span>tidak kondangan</span>
                                                @endif
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                {{ $item->keterangan }}</td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <a href="{{ route('amplop.edit', $item->id) }}"
                                                    class="py-2 px-4 bg-yellow-100 rounded text-yellow-600 font-semibold border">edit</a>

                                                <form action="{{ route('amplop.destroy', $item->id) }}" method="post"
                                                    class="inline-block">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="submit"
                                                        class="py-2 px-4 bg-red-100 rounded text-red-600 font-semibold border">hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-800">Tidak ada data kondangan</h3>
                    </div>
                @endif

            </div>
        </div>
    </div>

</x-app-layout>
