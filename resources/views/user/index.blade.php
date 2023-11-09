<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4">
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full overflow-hidden">
                            @if ($user->count())
                                <table class="min-w-full leading-normal">
                                    <thead>
                                        <tr>
                                            <th class="table-header">
                                                Nama</th>
                                            <th class="table-header">Email</th>
                                            <th class="table-header">Role</th>
                                            <th class="table-header">Bergabung</th>
                                            <th class="table-header">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $item)
                                            <tr>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    {{ $item->name }}
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    {{ $item->email }}
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    @if ($item->role === 0)
                                                        <span
                                                            class="text-green-700 bg-green-100 rounded-lg py-2 px-4 font-bold">pengguna</span>
                                                    @else
                                                        <span
                                                            class="text-red-700 bg-red-100 rounded-lg py-2 px-4 font-bold">admin</span>
                                                    @endif
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <span
                                                        class="text-sm font-bold text-yellow-500 bg-yellow-100 py-1 px-4 rounded">
                                                        {{ $item->created_at }}
                                                    </span>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    {{-- <a href="{{ route('amplop.edit', $item->id) }}"
                                                        class="py-2 px-4 bg-yellow-100 rounded text-yellow-600 font-semibold border">edit</a> --}}

                                                    <form action="{{ route('users.destroy', $item->id) }}"
                                                        method="post" class="inline-block">
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
                                <div class="my-4">
                                    {{ $user->links() }}
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
