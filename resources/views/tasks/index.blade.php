<x-app-layout>
    <div class="bg-white mx-auto max-w-6xl shadow-lg rounded-lg px-6 py-2 min-h-screen">
        <div class="p-4">
            <h1 class="font-bold text-2xl">Todolist</h1>
        </div>
        <!-- Display success message -->
        @if (session('success'))
            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 5.652a.5.5 0 0 1 .708.708l-8 8a.5.5 0 0 1-.708 0l-8-8a.5.5 0 0 1 .708-.708L10 12.293l4.348-4.349z" />
                    </svg>
                </span>
            </div>
        @endif
        <a class="bg-green-600 text-white py-1 px-2 rounded-sm shadow-md hover:bg-green-700"
            href="{{ route('create') }}">add task</a>
        <table class="table-auto border border-collapse border-slate-400 mt-2 w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2 border border-slate-300 w-10">No</th>
                    <th class="px-4 py-2 border border-slate-300">title</th>
                    <th class="px-4 py-2 border border-slate-300">description</th>
                    <th class="px-4 py-2 border border-slate-300 w-10">status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td class="p-2 border border-slate-200  text-center">{{ $loop->iteration }}</td>
                        <td class="p-2 border border-slate-200">{{ $task->title }}</td>
                        <td class="p-2 border border-slate-200">{{ $task->description }}</td>
                        <td class="p-2 border border-slate-200 text-center font-extralight text-sm">
                            @if ($task->is_completed)
                                <span class="bg-green-600 p-2 rounded-md text-slate-200 font-semibold">Completed</span>
                            @else
                                <span class="bg-red-600 p-2 rounded-md text-slate-200 font-semibold">Ongoing</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
