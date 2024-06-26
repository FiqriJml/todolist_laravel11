<x-app-layout>
    <div class="bg-white mx-auto max-w-6xl shadow-lg rounded-lg px-6 py-2">
        <div class="p-4">
            <h1 class="font-bold text-2xl">Update Task</h1>

            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input id="title" name="title" type="text" class="border border-gray-300 w-full py-1 px-2"
                        value="{{ old('title', $task->title) }}">
                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="description" name="description" class="border border-gray-300 w-full py-1 px-2">{{ old('description', $task->description) }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <button class="bg-green-600 py-1 px-2 text-white rounded shadow-lg hover:bg-green-700"
                    type="submit">create</button>
            </form>
        </div>
</x-app-layout>
