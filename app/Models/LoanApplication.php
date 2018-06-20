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


    public function loan_products()
    {
    	return $this->belongsTo(LoanProducts::class, 'loan_product_id');
    }
}
