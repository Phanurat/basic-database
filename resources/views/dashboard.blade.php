<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!--user by Auth to user => name -->
            Welcome, {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Rank</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Date Login</th>
                      </tr>
                    </thead>
                    <tbody>
                        <!--Foreach Loop data From User-->
                        @php ($i=1)
                        @foreach($users as $row)    
                        <tr>
                            <th>{{$i++}}</th>
                            <td>{{$row->name}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->created_at}}</td>
                        </tr>
                        @endforeach
                  </table>
            </div>
        </div>
    </div>
</x-app-layout>
