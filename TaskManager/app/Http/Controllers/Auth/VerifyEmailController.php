<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        $request->user()->forceFill([
            'email_verified_at' => now(),
        ])->save();

        // Redirect to the dashboard with a verification message
        return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
    }
}
