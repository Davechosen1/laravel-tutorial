
    @extends('layouts.master')


      
        @section ('content')
        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Loan Applications</h2>
            
          </div><!-- /.blog-post -->
            
         @include('layouts.errors')
      
         
            <div class="row">
              
              <table class="table table-hover table-condensed table-bordered"> 
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Customer Name</th>
                    <th>Loan Product</th>
                    <th>Amount</th>
                    <th>Period</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $n=1; ?>
                  @foreach($loanapplication as $loan)
                  <tr>
                    <td>{{ $n++}}</td>
                    <td>{{ $loan->customer_id }}</td>
                    <td>{{ $loan->loan_product_id }}</td>
                    <td>{{ $loan->amount }}</td>
                    <td>{{ $loan->period }}</td>
                    <td>{{ $loan->date }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            
            </div>
          
     @endsection
      


    