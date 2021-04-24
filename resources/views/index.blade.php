<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @livewireStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css" integrity="sha512-l7qZAq1JcXdHei6h2z8h8sMe3NbMrmowhOl+QkP3UhifPpCW2MC4M0i26Y8wYpbz1xD9t61MLT9L1N773dzlOA==" crossorigin="anonymous" />
    
</head>
<body>

        
        <div class=" h-3/4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 ">
                    
                    
                <center><h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Table Daftar Kehadiran') }}
                </h2></center>
                    
                    
                </div>
            </div>
        </div>
    </div>

    
<div class=" h-3/4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 ">
                    <div class="px-3">
                    @if ($message = Session::get('success'))
                    <div class="text-green-500">
                        <b><p>{{ $message }}</p></b>
                    </div>
                    @elseif ($message = Session::get('danger'))
                    <div class="text-red-600">
                        <b><p>{{ $message }}</p></b>
                    </div>
                    @endif
                    </div>
                    <div class="flex items-center justify-end">
                        <a href="{{ route('kehadiran/create') }}" target="_blank" class="ml-3 py-2 px-4 w-auto bg-blue-500 mt-2 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75" type="button">
                        {{ __('+ Buat Form Baru') }}
                        </a>
                    </div>
                    <div class="flex mb-4">
                    <livewire:kehadiran-datatables/>
                    </div>

                    
                    
                </div>
            </div>
        </div>
    </div>
</body>
@livewireScripts
</html>