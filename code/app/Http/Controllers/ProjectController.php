<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\store\StoreProjectRequest;
    use App\Http\Requests\update\UpdateProjectModelRequest;
    use App\Models\ProjectModel;


    class ProjectController
        extends Controller
    {

        public function index()
        {
            //
        }

        public function store( StoreProjectRequest $request )
        {
            //
        }

        public function show( ProjectModel $projectModel )
        {
            //
        }

        public function update( UpdateProjectModelRequest $request,
                                ProjectModel $projectModel )
        {
            //
        }

        public function destroy( ProjectModel $projectModel )
        {
            //
        }
    }
?>
