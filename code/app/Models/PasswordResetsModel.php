<?php
    /**
     * Author: Kent Madsen
     * Version: 1.0.0
     * Copyright: 2022, Kent vejrup Madsen
     *
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Code of Conduct: https://github.com/KentVejrupMadsen/EASV.Exam.Kanban.Backend/blob/main/code_of_conduct.md
     *
     * License: https://github.com/KentVejrupMadsen/EASV.Exam.Kanban.Backend/blob/main/license.md
     */
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Database\Eloquent\Model;

    use Laravel\Sanctum\HasApiTokens;


    class PasswordResetsModel
        extends Model
    {
        use HasFactory;

        protected $table = 'password_resets';
        public $timestamps = false;

        private const column_id = 'id';

        private const column_email = 'email';
        private const column_token = 'token';

        private const column_created_at = 'created_at';

        protected $fillable =
        [
            self::column_id,
            self::column_email,
            self::column_token,
            self::column_created_at
        ];


        protected $hidden =
        [

        ];


        protected $casts =
        [
            'id' => 'integer',
            'email' => 'string',
            'token' => 'string',
            'created_at' => 'timestamp'
        ];
    }
?>
