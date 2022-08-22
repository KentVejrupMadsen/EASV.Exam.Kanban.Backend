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

    // use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;

    use Illuminate\Foundation\Auth\User
        as Authenticatable;

    use Illuminate\Notifications\Notifiable;
    use Laravel\Sanctum\HasApiTokens;


    class User
        extends Authenticatable
    {
        use HasApiTokens,
            HasFactory,
            Notifiable;

        public $timestamps = true;
        protected $table = 'users';

        private const column_id = 'id';

        private const column_name = 'name';
        private const column_email = 'email';

        private const column_username = 'username';
        private const column_password = 'password';

        private const column_created_at = 'created_at';
        private const column_email_verified_at = 'email_verified_at';
        private const column_updated_at = 'updated_at';


        protected $fillable =
        [
            self::column_id,

            self::column_name,
            self::column_email,

            self::column_username,
            self::column_password,

            self::column_created_at,
            self::column_email_verified_at,
            self::column_updated_at
        ];


        protected $hidden =
        [
            'id',

            'email',

            'password',
            'remember_token',

            'created_at',
            'email_verified_at'
        ];


        protected $casts =
        [
            'id' => 'integer',

            'username' => 'string',
            'name' => 'string',
            'email' => 'string',


            'remember_token' => 'string',

            'email_verified_at' => 'datetime:Y-m-d',
            'created_at'        => 'datetime:Y-m-d',
            'updated_at'        => 'datetime:Y-m-d'
        ];
    }
?>
