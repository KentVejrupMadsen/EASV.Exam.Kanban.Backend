<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class TaskGroupModel
        extends Model
    {
        use HasFactory;

        protected $table = 'task_groups';
        public $timestamps = true;

        protected $fillable =
        [
            'id',
            'group_name',

            'created_at',
            'updated_at'
        ];


        protected $hidden =
        [
            'id',

            'created_at',
            'updated_at'
        ];


        protected $casts =
        [
            'id' => 'integer',
            'group_name' => 'integer',

            'created_at' => 'datetime:Y-m-d',
            'updated_at' => 'datetime:Y-m-d'
        ];
    }
?>
