<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Customers Page') }}
            </h2>
            @if(Session::has('message'))

            <div id="targetElement" class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                <span class="font-medium">{{ Session::get('message') }}</span>
            
            @endif
            
        </div>
    </x-slot>
    <form class="flex items-center" action="/dashboard/customers/search" method="POST"> 
        @csrf  
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative" style="width: 50%">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input name="search" type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
        </div>
        <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            <span class="sr-only">Search</span>
        </button>
    </form>
    
        <div class="mt-2 mb-2 float-right">
            <a href="/dashboard/customers/add" class="text-red-500 hover:underline ">Add Customer</a>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Gender
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Birthdate
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Address
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Mobile No.
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $cus)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                    <td class="p-4 w-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                        <div class="pl-3">
                            <div class="text-base font-semibold">{{$cus-> first_name}} {{$cus-> last_name}}</div>
                            <div class="font-normal text-gray-500">{{$cus-> email_address}}</div>
                        </div>  
                    </th>
                    <td class="py-4 px-6">
                        {{$cus-> gender}}
                    </td>
                    <td class="py-4 px-6">
                        {{$cus-> birthdate}}
                    </td>
                    <td class="py-4 px-6">
                        {{$cus-> address}}
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex items-center">
                            {{$cus-> mobile_number}}
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <a href="/dashboard/customers/{{$cus->customer_id}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mx-3">Edit</a>
                        <form action="/dashboard/customers/{{$cus->customer_id}}" method="post">
                            @csrf
                            @method('DELETE')
                        <button  type="submit" class="font-medium text-red-600 dark:text-blue-500 hover:underline">delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <div class="pt-3 pb-3 px-2 py-2 dark:text-white">
        {{-- {{ $customers->links('pagination::tailwind') }} --}}
        </div>

        
    </div>

    <script>
        // target element that will be dismissed
const targetEl = document.getElementById('targetElement');

// options object
const options = {
  triggerEl: document.getElementById('triggerElement'),
  transition: 'transition-opacity',
  duration: 1000,
  timing: 'ease-out',

  // callback functions
  onHide: (context, targetEl) => {
    console.log('element has been dismissed')
    console.log(targetEl)
  }

  
};
const dismiss = new Dismiss(targetEl, options);
dismiss.hide();
    </script>
   
</x-app-layout>