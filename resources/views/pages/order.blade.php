<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-2xl font-semibold leading-tight">
                {{ __('Order Page') }}
            </h2>
            
        </div>
    </x-slot>

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Order_ID
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Order_Date
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Gender
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Product Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Quantity
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Price
                    </th>
                </tr>
            </thead>
            @foreach ($orders as $order)
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="py-4 px-6">
                        {{$order-> o}}
                    </td>
                    <td class="py-4 px-6">
                        {{$order-> od}}
                    </td>
                    <td class="py-4 px-6">
                        {{$order-> first_name}} {{$order-> last_name}}
                    </td>
                    <td class="py-4 px-6">
                        {{$order-> gender}}
                    </td>
                    <td class="py-4 px-6">
                        {{$order-> product_name}}
                    </td>
                    <td class="py-4 px-6">
                        {{$order-> quantity}}
                    </td>
                    <td class="py-4 px-6">
                        {{$order-> price}}
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
</x-app-layout>