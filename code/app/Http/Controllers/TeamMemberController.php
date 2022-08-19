<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\JsonResponse;

    use App\Http\Requests\access\AccessTeamMemberRequest;
    use App\Http\Requests\store\StoreTeamMemberRequest;
    use App\Http\Requests\update\UpdateTeamMemberRequest;

    use OpenApi\Attributes
        as OA;


    #[OA\Schema( title: 'Team Member Controller',
                 description: '',
                 type: 'controller' )]
    class TeamMemberController
        extends Controller
    {
        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        public function index( AccessTeamMemberRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        #[OA\Post( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        public function store( StoreTeamMemberRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        public function show( AccessTeamMemberRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        #[OA\Patch( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        public function update( UpdateTeamMemberRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        #[OA\Delete( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        public function destroy( AccessTeamMemberRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }
    }
?>
