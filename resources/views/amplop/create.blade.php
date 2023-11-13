<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-md text-gray-800 leading-tight">
            Amplop &raquo; Tambah Amplop
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white max-w-xl overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-xl p-6">
                    <form action="{{ route('amplop.store') }}" method="post" class="space-y-6">
                        @csrf

                        <div>
                            <x-input-label for="nama" :value="__('Nama')" />
                            <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="nama" />
                            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
                        </div>

                        <div>
                            <x-input-label for="alamat" :value="__('Alamat')" />
                            <x-text-input id="alamat" name="alamat" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="alamat" />
                            <x-input-error class="mt-2" :messages="$errors->get('alamat')" />
                        </div>

                        <div>
                            <x-input-label for="tanggal" :value="__('Tanggal')" />
                            <x-text-input id="tanggal" name="tanggal" type="date" class="mt-1 block w-full"
                                required autofocus autocomplete="tanggal" />
                            <x-input-error class="mt-2" :messages="$errors->get('tanggal')" />
                        </div>

                        <div>
                            <x-input-label for="metode" :value="__('Metode Bayar')" />
                            <x-text-input id="metode" name="metode" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="metode" />
                            <p class="text-xs text-gray-500 my-2 font-light">cth: tunai, gopay, shopeepay, bca, mandiri
                                dll</p>
                            <x-input-error class="mt-2" :messages="$errors->get('metode')" />
                        </div>

                        <div>
                            <x-input-label for="nominal" :value="__('Nominal')" />
                            <x-text-input id="nominal" name="nominal" type="number" class="mt-1 block w-full"
                                required autofocus autocomplete="nominal" />
                            <x-input-error class="mt-2" :messages="$errors->get('nominal')" />
                        </div>

                        <div>
                            <x-input-label for="keterangan" :value="__('Keterangan')" />
                            <x-text-input id="keterangan" name="keterangan" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="keterangan" />
                            <p class="text-xs text-gray-500 my-2 font-light">cth: teman kerja, teman kuliah dll..</p>
                            <x-input-error class="mt-2" :messages="$errors->get('keterangan')" />
                        </div>

                        <x-primary-button class="bg-blue-500">{{ __('Tambah Amplop') }}</x-primary-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
