
    @extends('layouts.master')


      
        @section ('content')
        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">List Of All Customers </h2>
            
          </div><!-- /.blog-post -->
            
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
                  </tr>
                  @endforeach
                </tbody>
              </table>
            
            </div>
          
     @endsection
      


    