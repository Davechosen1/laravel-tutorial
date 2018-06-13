<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoanApplication extends Model
{
        use SoftDeletes;
        protected $dates = ['deleted_at'];
        
    public function customer()
    {   
        
        return $this->belongsTo(Customer::class);

    }


    /*public static function allLoanApplications()
    {
        $loans_applied=LoanApplication::all();
        $loans=collect([]);

        foreach ($loans_applied as $loan){
            $lns=[
                "id" => $loan->id,
                "customer_id" => $loan->customer_id,
                "loan_product_id" => $loan->loan_product_id,
                "amount" => $loan->amount,
                "period" => $loan->period,
                "date" => $loan->date,
                "first_name" => Customer::find($loan->customer_id)->first_name,
                "product_name" => LoanProducts::find($loan->loan_product_id)->product_name,

            ];
            $loans->push($lns);
        }

        return $loans;

    }*/

    public function loan_products()
    {
    	return $this->belongsTo(LoanProducts::class, 'loan_product_id');
    }
}
