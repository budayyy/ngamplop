<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Amplop') }}
        </h2>
    </x-slot>

    <div class="pt-4 md:pt-12 pb-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 md:flex md:justify-between">
            <a href="{{ route('amplop.create') }}"
                class="block md:inline-block bg-blue-500 p-4 text-white mb-4 md:mb-0 mx-2 md:mx-0 md:py-2 rounded">+
                Tambah
                Amplop</a>
            {{-- <div class="mx-2 md:mx-0">
                <input type="text" placeholder="cari nama.." class="w-full ">
            </div> --}}
        </div>
    </div>

    <div class="py-2 pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4">
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full overflow-hidden">
                            @if ($amplop->count())
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

                                                    <form action="{{ route('amplop.destroy', $item->id) }}"
                                                        method="post" class="inline-block">
                                                        @csrf
                                                        @method('delete')

                                                        <button type="submit"
                                                            class="py-2 px-4 bg-red-100 rounded text-red-600 font-semibold border">hapus</button>
                                                        {{-- <a href=""
                                                        class="py-2 px-4 bg-red-100 rounded text-red-600 font-semibold border">hapus</a> --}}
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="my-4">
                                    {{ $amplop->links() }}
                                </div>
                            @else
                                <h3 class="font-bold text-lg text-center">Tidak ada data</h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>