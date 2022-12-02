<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-2xl font-semibold leading-tight">
                {{ __('Delivery Page') }}
            </h2>
            
        </div>
    </x-slot>

    
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Delivery_ID
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Gender
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Moibile Number
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Delivery Address
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Amount
                    </th>
                </tr>
            </thead>
            @foreach ($shipping as $ship)
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="py-4 px-6">
                        {{$ship-> shipping_id}}
                    </td>
                    <td class="py-4 px-6">
                        {{$ship-> first_name}} {{$ship-> last_name}}
                    </td>
                    <td class="py-4 px-6">
                        {{$ship-> gender}}
                    </td>
                    <td class="py-4 px-6">
                        {{$ship-> mobile_number}}
                    </td>
                    <td class="py-4 px-6">
                        {{$ship-> shipping_address}}
                    </td>
                    <td class="py-4 px-6">
                        {{$ship-> amount}}
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        {{-- <div class="pt-3 pb-3 px-2 py-2 dark:text-white">
            {{ $shipping->links('pagination::tailwind') }}
            </div> --}}
        
    </div>
</x-app-layout>