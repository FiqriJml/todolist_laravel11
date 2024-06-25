<x-app-layout>
    <div class="bg-white mx-auto">
        <h1>Todolist</h1>
        <table class="table-auto border border-collapse border-slate-400">
            <thead>
                <tr>
                    <th class="px-4 py-2 border border-slate-300">No</th>
                    <th class="px-4 py-2 border border-slate-300">title</th>
                    <th class="px-4 py-2 border border-slate-300">description</th>
                    <th class="px-4 py-2 border border-slate-300">status</th>
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
