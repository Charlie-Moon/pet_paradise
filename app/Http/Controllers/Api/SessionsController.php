<?php

namespace Vanguard\Http\Controllers\Api;

use Vanguard\Http\Resources\SessionResource;
use Vanguard\Repositories\Session\SessionRepository;

/**
 * Class SessionsController
 * @package Vanguard\Http\Controllers\Api\Users
 */
class SessionsController extends ApiController
{
    public function __construct(private SessionRepository $sessions)
    {
        $this->middleware('session.database');
    }

    /**
     * Get info about specified session.
     * @param $session
     * @return SessionResource
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show($session)
    {
        $this->authorize('manage-session', $session);

        return new SessionResource($session);
    }

    /**
     * Destroy specified session.
     * @param $session
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy($session)
    {
        $this->authorize('manage-session', $session);

        $this->sessions->invalidateSession($session->id);

        return $this->respondWithSuccess();
    }
}
