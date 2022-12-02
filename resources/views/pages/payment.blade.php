<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-2xl font-semibold leading-tight">
                {{ __('Payment Page') }}
            </h2>
            
        </div>
    </x-slot>

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Payment_ID
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Payment_Date
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Amount
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Status
                    </th>
                </tr>
            </thead>
            @foreach ($payment as $pay)
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="py-4 px-6">
                        {{$pay-> pp}}
                    </td>
                    <td class="py-4 px-6">
                        {{$pay-> payment_date}}
                    </td>
                    <td class="py-4 px-6">
                        {{$pay-> first_name}} {{$pay-> last_name}}
                    </td>
                    <td class="py-4 px-6">
                        {{$pay-> amount}}
                    </td>
                    <td class="py-4 px-6">
                        {{$pay-> status}}
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
</x-app-layout>