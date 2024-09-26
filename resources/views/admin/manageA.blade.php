@extends('layouts.adminheader')

@section('content')
<div class="admin-main">
    <h1 class="text-3xl font-bold text-start mb-8">Daycare Appointments</h1>

    <div class="relative shadow-lg rounded-lg">
        <div class="max-h-96 overflow-auto">
            <table class="admin-table">
                <thead class="admin-table-header">
                    <tr>
                        <th class="py-3 px-2 text-left">Customer Name</th>
                        <th class="py-3 px-6 text-left">Pet Name</th>
                        <th class="py-3 px-6 text-left">Drop-off Date</th>
                        <th class="py-3 px-7 text-left">Pick-up Date</th>
                        <th class="py-3 px-6 text-left">Description</th>
                        <th class="py-3 px-6 text-left">Status</th>
                        <th class="py-3 px-6 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($appointments as $app)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="py-4 px-6 text-left">{{ $app->customer->name }}</td>
                        <td class="py-4 px-6 text-left">{{ $app->pet_name }}</td>
                        <td class="py-4 px-6 text-left">{{ $app->drop_off_date }}</td>
                        <td class="py-4 px-6 text-left">{{ $app->pick_up_date }}</td>
                        <td class="py-4 px-6 text-left">{{ $app->description }}</td>
                        <td class="py-4 px-6 text-left">
                            <span class="inline-block px-3 py-1 text-sm rounded-full {{ $app->status == 'upcoming' ? 'bg-green-200 text-green-800' : 'bg-gray-200 text-gray-800' }}">
                                {{ ucfirst($app->status) }}
                            </span>
                        </td>
                        <td class="py-4 px-6 text-left">
                            <form action="{{ url('appointments/delete') }}" method="post">
                                @csrf
                                <input type="hidden" name="appointment_id" value="{{ $app->id }}">
                                <input type="submit" value="DELETE" class="warning-error">
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">No appointments available.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection