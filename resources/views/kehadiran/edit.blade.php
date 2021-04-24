<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css" integrity="sha512-l7qZAq1JcXdHei6h2z8h8sMe3NbMrmowhOl+QkP3UhifPpCW2MC4M0i26Y8wYpbz1xD9t61MLT9L1N773dzlOA==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class=" h-3/4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 ">
                    
                    
                <center><h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Update Data Kehadiran') }}
                </h2></center>
                    
                    
                </div>
            </div>
        </div>
    </div>

    <div class="p-12 w-8/12 mx-56 items-center ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form method="post" action="{{ route('kehadiran/update', $kehadiran->id) }}">
                @csrf
                <input type="number" class="form-control" id="id" name="id" value="{{ $kehadiran->id }}" style="display:none" required>
                    <div class="mb-3">
                        <label for="in" class="form-label">Tanggal Masuk</label>
                        <input type="date" class="form-control" id="in" name="in" value="{{ $kehadiran->in }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="out" class="form-label">Tanggal Pulang</label>
                        <input type="date" class="form-control" id="out" name="out" value="{{ $kehadiran->out }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="hour" class="form-label">Lama Kerja (Jam)</label>
                        <input type="number" class="form-control" id="hour" name="hour" value="{{ $kehadiran->hour }}">
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" id="location" name="location" value="{{ $kehadiran->location }}">
                    </div>
                    <div class="mb-3">
                        <label for="deviceid" class="form-label">Device</label>
                        <input type="text" class="form-control" id="deviceid" name="deviceid" value="{{ $kehadiran->deviceid }}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>