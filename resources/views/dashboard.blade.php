<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>
    <style>
        tbody {
            font-family: 'Nunito', sans-serif;
            background-image: url("https://i.pinimg.com/564x/0b/11/a7/0b11a77631ec72c0376aeae39093eac9.jpg");
        }
        .py-12{
            background-image: url(" https://i.pinimg.com/564x/81/2b/d5/812bd598d26f2d4d2a9f3191f95432c7.jpg");
        }
        .header2{
          background-color:rgb(224, 180, 98);
          line-height:200%;
          width :100%;
          margin:5px;
          font-family: cursive;
          color: white;
          font-size: 20px;
          font-weight:bold;
          text-shadow:3px 3px rgb(188, 143, 143);
          border-radius: 5px;
        }
        
        img{
          border-radius: 50%;
          margin-left: 20px;
          width:20px;
          height:20px;
        }
        
        .addTask{
          background-color:rgb(145, 3, 36);
          line-height:200%;
          width :100%;
          margin:5px;
          margin-left: 900px;
          font-family: cursive;
          color: white;
          font-size: 17px;
          font-weight:bold;
          text-shadow:1px 1px rgb(188, 143, 143);
          border-radius: 5px;
        }

        </style>


      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
      </head>
      <body>
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="flex">
                    <div class="flex-auto text-2xl mb-4">
                    <h2 class="header2">Todo List</h2>
                    </div>
                    
                    <div class="flex-auto text-right mt-2">
                        <a href="/task" class="addTask">Add new Task</a>
                    </div>
                </div>
                <table class="w-full text-md rounded mb-4">
                    <thead>
                    <tr class="border-b">
                        <th class="text-left p-3 px-5">Task</th>
                        <th class="text-left p-3 px-5">Actions</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(auth()->user()->tasks as $task)
                        <tr class="border-b hover:bg-orange-100">
                            <td class="p-3 px-5">
                                {{$task->description}}
                            </td>
                            <td class="p-3 px-5">
                                
                                <a href="/task/{{$task->id}}" name="edit" class="logo1"><img src="edit.png" alt="accept"></a>
                                <button type="submit" name="delete" formmethod="POST" class="delete"><img src="delete.png" alt="Bin">
                                    {{ csrf_field() }}
                                </form>
                                <a href="https://twitter.com/share?url={{$task->description}}" onclick="window.open(this.href);return false;" name="twitter" class="logo1"><img src="twitter.png" alt="accept"></a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=127.0.0.1:8000" name="facebook" class="logo1"><img src="fb.png" alt="accept"></a>
                            </td>
                        </tr>
                    @endforeach
                        
                        
                        
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
      </body>
      </html>

    
    

</x-app-layout>
