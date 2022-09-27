@extends('layouts.app')

@section('content')
 
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-white border-b">
                    <tr>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        ID
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Name
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Contact Number
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Email Address
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        copy_of_IC
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Package
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                            @foreach ($members as $member)
                            <!-- pagination -->
                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $member->id }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $member->name }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $member->contact }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $member->email }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <img src="{{ asset('uploads/copy_of_IC/'.$member->copy_of_IC) }}" width="70px" height="60px">
                                    <br>
                                    <a href="{{ asset('uploads/copy_of_IC/'.$member->copy_of_IC) }}" download>
                                    <button 
                                    type="submit"
                                    class="inline-block text-gray-100 no-underline px-6 py-2.5 bg-blue-500 text-white rounded-lg font-bold text-xs leading-normal uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                    download</button>
                                    </a>
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $member->package }}
                                </td>
                            </tr>

                            @endforeach

                    </tbody>
                </table>
                <div >
                    {{ $members->links() }}
                </div>
                </div>
            </div>
            </div>
        </div>

    </div>
</main>



@endsection
