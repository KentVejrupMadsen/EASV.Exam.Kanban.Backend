<?php
    namespace App\Http\Requests\store;

    use Illuminate\Foundation\Http\FormRequest;


    class StoreTaskRequest
        extends FormRequest
    {

        public function authorize()
        {
            return false;
        }


        public function rules()
        {
            return
            [
                //
            ];
        }
    }
?>
