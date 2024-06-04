@extends('index')
@section('content')
<div class="p-4 sm:ml-64">
    <div class="rounded-lg mt-14">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">Kelola Produk</h2>
                <a href="{{ route('member.produk') }}" class="px-2 py-1 bg-blue-500 dark:bg-blue-600 rounded hover:bg-blue-600 dark:hover:bg-blue-700 text-white dark:text-black">
                    <span>
                        <i class="bi bi-box-seam"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection