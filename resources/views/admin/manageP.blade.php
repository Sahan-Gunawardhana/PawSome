    @extends('layouts.adminheader')

    @section('content')
    <div class="admin-main">
        <h1 class="text-4xl font-bold mb-8 text-start text-gray-900">Manage Products</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="bg-gray-50 p-8 rounded-2xl shadow-lg h-[60vh] overflow-auto">
                <h2 class="text-3xl font-bold mb-8 text-start text-gray-900">Available Products</h2>
                <div class="flex flex-col space-y-8">
                    @forelse($products as $pro)
                    <div class="flex items-center bg-white border border-gray-300 rounded-2xl shadow-lg overflow-hidden p-6">
                        <div class="flex-shrink-0 w-1/3 lg:w-1/4">
                            <img src="{{ asset($pro->pro_image_url) }}" alt="{{ $pro->pro_name }}" class="w-full h-40 object-cover rounded-md ">
                        </div>
                        <div class="flex-1 px-6 flex flex-col justify-center space-y-4">
                            <h2 class="text-3xl font-semibold text-gray-900">{{ $pro->pro_name }}</h2>
                            <p class="text-2xl text-green-700 font-semibold">{{ $pro->pro_price }}</p>
                            <p class="text-lg text-gray-700">Keyword: <span class="font-medium">{{ $pro->pro_keyword }}</span></p>
                            <p class="text-lg text-gray-700">Shelf Life: <span class="font-medium">{{ $pro->shelf_life }}</span></p>
                            <p class="text-lg text-gray-700">Dimensions: <span class="font-medium">{{ $pro->pro_width }} x {{ $pro->pro_height }} x {{ $pro->pro_length }}</span></p>
                            <p class="text-lg text-gray-700">{{ $pro->pro_description }}</p>
                        </div>
                        <div class="flex flex-col items-center gap-4">
                            <a href="{{ url('product/edit/'.$pro->id) }}" class="neutral-button">EDIT</a>
                            <form action="{{ url('product/delete') }}" method="POST" class="w-full">
                                @csrf
                                <input type='hidden' name="pro_id" value="{{ $pro->id }}">
                                <input type="submit" value="DELETE" class="warning-error">
                            </form>
                        </div>
                    </div>
                    @empty
                    <p class="text-center text-gray-700 text-xl">No products available.</p>
                    @endforelse
                </div>
            </div>
            <div class="bg-gray-50 p-6 rounded-2xl shadow-lg">
                <h2 class="text-2xl font-bold mb-6 text-start text-gray-800">Add New Product</h2>
                <form action="{{ url('product/save') }}" enctype="multipart/form-data" method="post" class="space-y-6">
                    @csrf
                    <div>
                        <label for="product_name" class="block text-gray-700 font-semibold mb-2">Product Name:</label>
                        <input type="text" name="product_name" id="product_name" class="border border-gray-300 p-3 rounded-lg w-full focus:outline-none focus:border-blue-500 shadow-sm">
                    </div>

                    <div>
                        <label for="product_price" class="block text-gray-700 font-semibold mb-2">Product Price:</label>
                        <input type="number" name="product_price" id="product_price" step="0.01" class="border border-gray-300 p-3 rounded-lg w-full focus:outline-none focus:border-blue-500 shadow-sm">
                    </div>

                    <div>
                        <label for="product_keyword" class="block text-gray-700 font-semibold mb-2">Product Keyword:</label>
                        <input type="text" name="product_keyword" id="product_keyword" class="border border-gray-300 p-3 rounded-lg w-full focus:outline-none focus:border-blue-500 shadow-sm">
                    </div>

                    <div>
                        <label for="shelf_life" class="block text-gray-700 font-semibold mb-2">Shelf Life:</label>
                        <input type="text" name="shelf_life" id="shelf_life" class="border border-gray-300 p-3 rounded-lg w-full focus:outline-none focus:border-blue-500 shadow-sm">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="product_width" class="block text-gray-700 font-semibold mb-2">Product Width (cm):</label>
                            <input type="text" name="product_width" id="product_width" class="border border-gray-300 p-3 rounded-lg w-full focus:outline-none focus:border-blue-500 shadow-sm">
                        </div>

                        <div>
                            <label for="product_height" class="block text-gray-700 font-semibold mb-2">Product Height (cm):</label>
                            <input type="text" name="product_height" id="product_height" class="border border-gray-300 p-3 rounded-lg w-full focus:outline-none focus:border-blue-500 shadow-sm">
                        </div>

                        <div>
                            <label for="product_length" class="block text-gray-700 font-semibold mb-2">Product Length (cm):</label>
                            <input type="text" name="product_length" id="product_length" class="border border-gray-300 p-3 rounded-lg w-full focus:outline-none focus:border-blue-500 shadow-sm">
                        </div>
                    </div>

                    <div>
                        <label for="product_description" class="block text-gray-700 font-semibold mb-2">Product Description:</label>
                        <textarea name="product_description" id="product_description" rows="4" class="border border-gray-300 p-3 rounded-lg w-full focus:outline-none focus:border-blue-500 shadow-sm"></textarea>
                    </div>

                    <div>
                        <label for="product_image" class="block text-gray-700 font-semibold mb-2">Product Image:</label>
                        <input type="file" name="product_image" id="product_image" class="border border-gray-300 p-3 rounded-lg w-full focus:outline-none focus:border-blue-500 shadow-sm">
                    </div>

                    <button type="submit" class="neutral-button">Save Product</button>
                </form>
            </div>
        </div>
        <div class="fixed bottom-4 right-4">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-red-700 transition duration-300">Logout</button>
            </form>
        </div>
    </div>
@endsection