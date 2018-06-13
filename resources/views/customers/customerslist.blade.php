
    @extends('layouts.reports')
      
        @section ('content')
        <div class="container">

          <div class="blog-post">
            <h2 class="blog-post-title">List Of All Customers </h2>
            
          </div>
            
         @include('layouts.errors')
             
            <div class="row">             
              <table class="table table-hover table-condensed table-bordered"> 
                <thead>
                  <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Moddle Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip</th>
                    <th>Title</th>
                    <th>Phone Number</th>
                    <th>Email Address</th>
                    <th>Website</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $n=1; ?>
                  @foreach($customers as $customer)
                  <tr>
                    <td>{{ $n++}}</td>
                    <td>{{ $customer->first_name }}</td>
                    <td>{{ $customer->middle_name }}</td>
                    <td>{{ $customer->last_name }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->city }}</td>
                    <td>{{ $customer->state }}</td>
                    <td>{{ $customer->zip }}</td>
                    <td>{{ $customer->title }}</td>
                    <td>{{ $customer->phone_number }}</td>
                    <td>{{ $customer->email_address }}</td>
                    <td>{{ $customer->website }}</td>
                    <td>
                          <form method="GET" action="/customers/{{ $customer->id }}/edit"> 
                          
                           
                            <input type="submit" class="btn btn-primary" value="Edit"/>
                          </form>     
                    </td>
                    <td>
                          <form action="/customers/{{ $customer->id }}/delete" method="POST">
                          {{method_field('DELETE')}}
                          {{ csrf_field() }}
                            <input type="submit" class="btn btn-danger" value="Delete"/>
                          </form><a href="/customers/{{ $customer->id }}/delete">
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            
            </div>
          
     @endsection
    