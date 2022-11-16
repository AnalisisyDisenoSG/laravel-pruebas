<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased">
        
        <!-- component -->
<div class="bg-white">

    <div class="overflow-x-auto border-x border-t">
       <table class="table-auto w-full">
          <thead class="border-b">
             <tr class="bg-gray-100">
                <th class="text-left p-4 font-medium">
                   Name
                </th>
                <th class="text-left p-4 font-medium">
                   Status
                </th>
                <th class="text-left p-4 font-medium">
                  
                </th>
             </tr>
          </thead>
          <tbody>
            @foreach ($tasks as $task)
             <tr class="border-b hover:bg-gray-50">
                <td class="p-4">
                  {{ $task->name }}
                </td>
                <td class="p-4">
                   {{ $task->completed ? 'Completado': 'Pendiente' }} 
                </td>
                <td class="p-4">
                   <a href="{{ $task->path() }}">Edit</a>
                </td>
             </tr>
             @endforeach
             
          </tbody>
       </table>
    </div>
    </div>
        
       
        
    </body>
</html>
