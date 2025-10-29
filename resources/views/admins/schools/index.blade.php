<x-admin-component>
    <div class="min-h-screen w-full flex items-center justify-center p-8">
        <div class="w-full max-w-6xl">
            <div class="overflow-x-auto shadow-lg rounded-lg">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-6 py-3 border-b border-gray-300 text-left text-sm font-semibold text-gray-700">
                                No
                            </th>
                            <th class="px-6 py-3 border-b border-gray-300 text-left text-sm font-semibold text-gray-700">
                                School Name
                            </th>
                            <th class="px-6 py-3 border-b border-gray-300 text-left text-sm font-semibold text-gray-700">
                                School ID
                            </th>
                            <th class="px-6 py-3 border-b border-gray-300 text-left text-sm font-semibold text-gray-700">
                                Email
                            </th>
                            <th class="px-6 py-3 border-b border-gray-300 text-left text-sm font-semibold text-gray-700">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $index => $school)
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="px-6 py-4 border-b border-gray-300 text-sm text-gray-700">
                                {{ $index + 1 }}
                            </td>
                            <td class="px-6 py-4 border-b border-gray-300 text-sm text-gray-700">
                                {{ $school->school_name }}
                            </td>
                            <td class="px-6 py-4 border-b border-gray-300 text-sm text-gray-700">
                                {{ $school->school_id }}
                            </td>
                            <td class="px-6 py-4 border-b border-gray-300 text-sm text-gray-700">
                                {{ $school->email }}
                            </td>
                            <td class="px-6 py-4 border-b border-gray-300 text-sm">
                                <div class="flex space-x-2">
                                    <a href="#"
                                        class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors duration-200">
                                        Edit
                                    </a>
                                    <button
                                        class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition-colors duration-200">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                                Tidak ada data sekolah
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-component>