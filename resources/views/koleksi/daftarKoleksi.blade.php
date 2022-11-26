<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('daftar koleksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Nama Koleksi
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Jenis Koleksi
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Jumlah Koleksi
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Edit
                                                </th>


                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($collections as $collection)
                                                <tr>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-500">
                                                        {{ $collection->namaKoleksi }}
                                                    </td>

                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-500">
                                                        @if ($collection->jenisKoleksi == 1)
                                                            Bukux
                                                        @elseif ($collection->jenisKoleksi == 2)
                                                            Majalah
                                                        @else
                                                            Cakram Digital
                                                        @endif
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-500">
                                                        {{ $collection->jumlahKoleksi }}
                                                    </td>
                                                    <td>
                                                    <a href="#">edit</a>

                                                    </td>
                                                    {{-- <td
                                                        class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                                        <a href="{{ route('collectionView.show', $collection) }}"
                                                            class="text-white border bg-purple-500 py-3 px-5 rounded-full hover:bg-indigo-900">Show</a>
                                                    </td> --}}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="mt-4">
                    {{ $collections->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
