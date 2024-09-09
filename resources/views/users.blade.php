<x-layout>
    <x-slot:title>Admin</x-slot:title>
    <x-slot:titles>Admin</x-slot:titles>
    <h3 class="text-xl">Data Tabel Users</h3>

    <a href="{{ route('user.create') }}"
        class="item-right text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
        ADD</a>
    <table class="my-4 w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-3">No</th>
                <th scope="col" class="px-4 py-3">Nama</th>
                <th scope="col" class="px-4 py-3">Email</th>
                <th scope="col" class="px-4 py-3">Proses</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $data)
                <tr class="border-b dark:border-gray-700">
                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $loop->iteration }}</th>
                    <td class="px-4 py-3">{{ $data->name }}</td>
                    <td class="px-4 py-3">{{ $data->email }}</td>
                    <td class="px-4 py-3">
                        <form class="" action="{{ route('users.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('users.edit', $data->id) }}" type="button"
                                class="text-white  bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                Edit
                            </a>
                            <button type="submit"
                                class=" ml-2 text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
