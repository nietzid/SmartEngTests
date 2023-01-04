<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentRequest extends Model
{
    protected $table = 'payment_requests';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'upgrade_request', 'created_at', 'updated_at'];
    use HasFactory;
}
