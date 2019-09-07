<?php
namespace Favoriabs\NgStateLga\Models;
use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
  protected $table = 'lgas';
  protected $fillable = ['id', 'name', 'state_id'];

  public function state()
  {
    return $this->belongsTo('Favoriabs\NgStateLga\Models\State');
  }

}
