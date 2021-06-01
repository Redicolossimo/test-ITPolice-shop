<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    use SoftDeletes, Notifiable;

    protected $fillable = [
        'product_id', 'user_id', 'quantity', 'address', 'telegram_user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function routeNotificationForTelegram()
    {
        return $this->telegram_user_id;
    }

}
