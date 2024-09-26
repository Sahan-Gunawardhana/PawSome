@extends('layouts.adminheader')

@section('content')
<div class="container mx-auto bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Manage Users</h1>

    @if($users->isEmpty())
    <p class="text-center text-gray-600 text-xl">No users available.</p>
    @else
    <div class="overflow-x-auto">
        <table class="admin-table">
            <thead class="admin-table-header">
                <tr class="bg-gray-200 text-gray-700">
                    <th class="py-4 px-6 border-b text-left">Role</th>
                    <th class="py-4 px-6 border-b text-left">Name</th>
                    <th class="py-4 px-6 border-b text-left">Email</th>
                    <th class="py-4 px-6 border-b text-left">Registered</th>
                    <th class="py-4 px-6 border-b text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="hover:bg-gray-100">
                    <td class="py-4 px-6 border-b">{{ $user->user_type }}</td>
                    <td class="py-4 px-6 border-b">{{ $user->name }}</td>
                    <td class="py-4 px-6 border-b">{{ $user->email }}</td>
                    <td class="py-4 px-6 border-b">{{ $user->created_at->format('Y-m-d') }}</td>
                    <td class="py-4 px-6 border-b">
                        <form action="{{ url('user/delete') }}" method="post" class="inline">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <button type="submit" class="warning-error">
                                DELETE
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>

<div class="fixed bottom-4 right-4">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-red-700 transition duration-300">Logout</button>
    </form>
</div>
@endsection