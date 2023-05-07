<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Member extends Model
{
    use HasFactory;
    protected $table = "member";
    protected $primaryKey = "id_member";
    protected $fillable = [
        'id_member', 'id_parent', 'inisial'
    ];
    public $timestamps = false;

    public function getMemberWithLevel(){
        $sql = DB::select("WITH RECURSIVE member_path (id_member, id_parent, inisial, lvl) 
                            AS ( SELECT id_member, id_parent, inisial, 1 lvl FROM member WHERE id_parent 
                            IS NULL UNION ALL SELECT c.id_member, c.id_parent, c.inisial, cp.lvl + 1 FROM member_path 
                            AS cp JOIN member AS c ON cp.id_member = c.id_parent ) SELECT * FROM member_path ORDER BY lvl, id_member");
        
        return $sql;
    }

}
