<?php
    namespace App\Http\Requests\access;

    use Illuminate\Foundation\Http\FormRequest;
    use Illuminate\Support\Facades\Auth;


    class AccessTeamMemberRequest
        extends FormRequest
    {

        public function authorize(): bool
        {
            return Auth::check();
        }


        public function rules(): array
        {
            return
            [
                //
            ];
        }
    }
?>