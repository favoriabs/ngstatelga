<?php
namespace Favoriabs\NgStateLga\Models;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
  protected $table = 'states';
  protected $fillable = ['id', 'name'];

  public function lgas()
  {
    return $this->hasMany('Favoriabs\NgStateLga\Models\Lga');
  }

}
