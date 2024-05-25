@extends('index')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="rounded-lg mt-14">
            <div class="bg-white rounded-lg shadow p-6" id="user">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">Dashboard</h2>
                <div>
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="#"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                Home
                            </a>
                        </li>
                        <span class="mx-2 text-gray-400">/</span>
                        <li>
                            <div class="flex items-center">
                                <a href="javascript:void(0);"
                                    class="text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">Dashboard</a>
                            </div>
                        </li>
                    </ol>
                </div>
                <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
            </div>
        </div>
    </div>
@endsection
