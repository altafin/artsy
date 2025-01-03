<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Receipt extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'issuer_name'
        , 'issuer_type'
        , 'issuer_document'
        , 'issuer_address'
        , 'issuer_complement'
        , 'issuer_reference'
        , 'issuer_city'
        , 'issuer_state'
        , 'issuer_zipcode'
        , 'issuer_telephone'
        , 'issuer_email'
        , 'payer_name'
        , 'payer_type'
        , 'payer_document'
        , 'payer_address'
        , 'payer_complement'
        , 'payer_reference'
        , 'payer_city'
        , 'payer_state'
        , 'payer_zipcode'
        , 'payer_telephone'
        , 'payer_email'
        , 'date'
        , 'value'
        , 'referent'
    ];
}
