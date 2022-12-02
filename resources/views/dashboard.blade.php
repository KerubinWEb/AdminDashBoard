<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-2xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    



    <div class="mt-4">
        <div class="flex flex-wrap -mx-6">
            <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white dark:bg-gray-800">
                    <div class="p-3 rounded-full bg-red-600 ">
                        <svg class="h-8 w-8 text-white" viewBox="0 0 28 30" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path d="M18.2 9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373 9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2 6.64043 18.2 9.08889Z" fill="currentColor"/>
                            <path d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z" fill="currentColor"/>
                            <path d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z" fill="currentColor"/>
                            <path d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z" fill="currentColor"/>
                            <path d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z" fill="currentColor"/>
                            <path d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z" fill="currentColor"/>
                        </svg>
                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700 dark:text-slate-50">{{$totaluser}}</h4>
                        <div class="text-gray-500 dark:text-slate-50">Total Customers</div>
                    </div>
                </div>
            </div>

            <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white dark:bg-gray-800">
                    <div class="p-3 rounded-full bg-green-600 ">
                        <svg class="h-8 w-8 text-white" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.19999 1.4C3.4268 1.4 2.79999 2.02681 2.79999 2.8C2.79999 3.57319 3.4268 4.2 4.19999 4.2H5.9069L6.33468 5.91114C6.33917 5.93092 6.34409 5.95055 6.34941 5.97001L8.24953 13.5705L6.99992 14.8201C5.23602 16.584 6.48528 19.6 8.97981 19.6H21C21.7731 19.6 22.4 18.9732 22.4 18.2C22.4 17.4268 21.7731 16.8 21 16.8H8.97983L10.3798 15.4H19.6C20.1303 15.4 20.615 15.1004 20.8521 14.6261L25.0521 6.22609C25.2691 5.79212 25.246 5.27673 24.991 4.86398C24.7357 4.45123 24.2852 4.2 23.8 4.2H8.79308L8.35818 2.46044C8.20238 1.83722 7.64241 1.4 6.99999 1.4H4.19999Z" fill="currentColor"/>
                            <path d="M22.4 23.1C22.4 24.2598 21.4598 25.2 20.3 25.2C19.1403 25.2 18.2 24.2598 18.2 23.1C18.2 21.9402 19.1403 21 20.3 21C21.4598 21 22.4 21.9402 22.4 23.1Z" fill="currentColor"/>
                            <path d="M9.1 25.2C10.2598 25.2 11.2 24.2598 11.2 23.1C11.2 21.9402 10.2598 21 9.1 21C7.9402 21 7 21.9402 7 23.1C7 24.2598 7.9402 25.2 9.1 25.2Z" fill="currentColor"/>
                        </svg>
                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700 dark:text-slate-50">{{$totalorder}}</h4>
                        <div class="text-gray-500 dark:text-slate-50">Total Orders</div>
                    </div>
                </div>
            </div>

            <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white dark:bg-gray-800">
                    <div class="p-3 rounded-full bg-blue-600 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>                          
                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700 dark:text-slate-50">Php {{$totalIncome}}</h4>
                        <div class="text-gray-500 dark:text-slate-50">Total Income</div>
                    </div>
                </div>
            </div>
        </div>
    </div>





{{-- Post Chart --}}
<div class="grid grid-cols-2 gap-4" >

    <div style="width:100%" >
        <div class="mt-5 shadow-sm rounded-md bg-white dark:bg-gray-800 p-3 align-item-center">
            <h1 class="font-bold mb-5">Monthly Income Year 2022</h1>
            <canvas id="myChart"></canvas>
        </div>
    </div>
    <div style="width:100%" >
        <div class="mt-5 shadow-sm rounded-md bg-white p-3 align-item-center dark:bg-gray-800">
            <h1 class="font-bold mb-5">Inventory</h1>
            
            {!! $chart->renderHtml() !!} 
        </div>
    </div>
    

  </div>

  {{-- Post Table --}}

  <div class="flex flex-row gap-4 mt-5">
    <div class="basis-1/3"> <div class="w-full max-w-md p-4 bg-white border rounded-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center justify-between mb-4">
            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Latest Customers</h5>
       </div>
       <div class="flow-root">
            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($latest as $lat)
                <li class="py-3 sm:py-4 hover:bg-gray-100 dark:hover:bg-gray-600">
                    <div class="flex items-center space-x-4">
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                {{$lat-> first_name}} {{$lat-> last_name}}
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                {{$lat-> email_address}}
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            Php {{$lat-> amount}}
                        </div>
                    </div>
                </li>
               @endforeach
            </ul>
       </div>
    </div>
    </div>

    <div class="basis-1/3">
         <div class="w-full max-w-md p-4 bg-white border rounded-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center justify-between mb-4">
            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Top Sales Product</h5>
       </div>
       <div class="flow-root">
            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700 pb-10">
                @foreach ($iphone as $phone)
                <li class="py-3 sm:py-4 hover:bg-gray-100 dark:hover:bg-gray-600">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="w-8 h-8 rounded-full" src="{{url('/images')}}/{{$phone-> image}}" alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                {{$phone-> product_name}}  
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            Php {{$phone-> price}}
                        </div>
                    </div>
                </li>
               @endforeach
            </ul>
       </div>
    </div>
</div>
    <div class="basis-1/3"> 
        
        <div class="w-full max-w-md p-4 bg-white border rounded-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center justify-between mb-4">
            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Transaction Today</h5>
       </div>
       <div class="flow-root">
            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                <li class="py-3 sm:py-4 hover:bg-gray-100 dark:hover:bg-gray-600">
                    <div class="flex items-center space-x-4">
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium font-semibold text-gray-900 truncate dark:text-white">
                                Name
                            </p>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium font-semibold text-gray-900 truncate dark:text-white">
                                Amount
                            </p>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium font-semibold text-gray-900 truncate dark:text-white">
                                Status
                            </p>
                        </div>
                    </div>
                </li>
                @foreach ($transaction as $trans)
                <li class="py-3 sm:py-4 hover:bg-gray-100 dark:hover:bg-gray-600">
                    <div class="flex items-center space-x-4">
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                {{$trans-> first_name}} {{$trans-> last_name}}
                            </p>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                Php {{$trans-> amount}}
                            </p>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium font-semibold text-gray-900 truncate dark:text-white">
                                {{$trans-> status}}
                            </p>
                        </div>
                    </div>
                </li>
               @endforeach
            </ul>
       </div>
    </div>
</div>

 </div>
  

 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>


<script>
var xValues = ["Jan","Feb","March","April","May","June","July","Aug","Sept","Oct","Nov","Dec"];
var yValues = [1000,4000,6000,8000,10000,15000,30000,10000,20000,30000,50000,60000];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgb(255,0,0)",
      borderColor: "rgb(255,0,0)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 500, max:100000}}],
    }
  }
});
</script>





@yield('javascript')
    {!! $chart->renderChartJsLibrary() !!}
    {!! $chart->renderJs() !!}







</x-app-layout>
