<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseDetail extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'trans_date',
        'product_desc',
        'cc_detail',
        'paid_stat',
        'credit_amt',
        'debit_amt',
        'total_amt',
        'post_stat',
        'post_date',
        'post_duedate',
        'post_paid_status',
        'post_paid_date',
    ];

}