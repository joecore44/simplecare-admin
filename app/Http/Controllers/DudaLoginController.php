<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class DudaLoginController extends Controller
{
    public function login()
    {
        // Retrieve the currently logged-in user
        $user = Auth::user();

        // Check if the user is authenticated
        if ($user) {
            // Retrieve the account associated with the user
            $account = $user->account;

            // Check if the account exists
            if ($account) {
                // Retrieve the sites associated with the account
                $site = $account->sites->first();

                $loginEmail = $site->login_email;
                $loginPassword = $site->login_password;
                $response = Http::post('https://app.followuppros.com/login', [
                    'j_username' => 'joe@bytetech.health',
                    'j_password' => 'Radiation9!',
                    'g-recaptcha-response' => '03AFcWeA7XuilJCcQNiquoosYxZ82zx2x2zcL_vHP7jrpLIkzCC6BPWmb6G500Q8zYUCA0nNxZkNSR2W1UB9ANJ5RYSKTJTOAd_O_VjPZs5qDLd1eEh383XUABK3ZFJ0GViHxWIM1a-uQDq2tXFwTW78Et-RCA0FUH6t3Doyx5lRmEnlN6x0DMjSnMr97P3ADecbBQeptmj8cM-5auCafMza74P1QYrIGTxdF88ywiMiQz97X2Z90uvn1qfayjIHAyr7NzJsiT8kXlJFnnYzlvRnLWlOTxlnSoNiDjmBjOCz-ibguCM1SNAMqfekX4UvShxU_MHD1BOkmtfV5kxK9aEhe8bMV547hPKMM6nXf4YjHo1H7YXtgyRFta80ijVILmdKOAhZwtOUNc9Qf3dpy9qxg1eivWSbUh4ZEP38FFZe-sow34k3Y_0kTmnI5Qh6sjXw43NgWFUY-i3liIiHjTTQFoPk6gqq4sPcGNy1-FOT50e78uSW21IkelBm62GubY4HQb3dE4XoIXfmPfYLriCXsggeJ253prU1EHbqZiaT7f-MiNH7GB630ZHIxadAZlvDulDEzGn3XZBp4XpRIKHd9H-be-J-Ya3_LYBu3eRtSqhd9HyueYtx2Dgsy7l3JN_D8PUv1Zbr2VEc3pMzM5uB_idlbb0RNPmMXGzBXPi_2LL6PyVkEf2lbQtyV0Qa9DdMGexPFszUjZh98cMU-ElXAteT7VZ9-Qrq05DRgMq4hNzZd36XwSI3dyk-FIdKZ52mTQrx0bwmNpf8ftPPgCCAfagLGvWd87P4SwFAL-engmkI6hCvNGciIWRRZxeoBEy3cxR0tg1NsoM81wZymEZgx2Ug5FIlb7ZGWm8S05hfY6ynafGtTqJ8bBNK8wuhITLx5t_qLPAAC3EyV3BlypNBQZf-Y4fBr6tq1nPrWD0mY-d9W7Ojo5_jpzEp7k6N-NtiN-2BU2casay3gHGFL3fKgYSXSohjGrj1Y06yx_DI9bmcGbB-zz3Nh2ad2xsRZG3A4CABEfYd2-Sgn4oLMPY3n0WcdMtyxojMpRjppt1YjkHGxJdGCMqALLDe6QEdenBNuPOgAy_PdRfLlaB650lPACqc1wtaKrRTS7Cg9NqLixYUUdQJj2_-f9yQy37hocVvSmaF1UnG2MXu4QQbOHmM0QrqeZIssuSYmHlVXxBm_YqomBY_jswVCC6M_U2FhYXktaW7zC97LNMDSEG4d2X1yqi4nTkOHNNaEYREF3LncjQ2eb-EJ3K9hQgicA_FP7cbK3mEsXK6IIEFQdtz30ruqNcDjRo44H3n5kUaCUT3ypU-Oiu6wNBnScv-mTRHlv6ltaq7vb6b1noIcP1KwxLxOtHipLPf6ttFwyZ0v9XSBK82ZmkizRyXZLwNCANNppuiuQX0AOGv8I5ANUks_kM_nR0x6ucuxF9iR1vhZjppz06QBMcHGgzcXfufDwacC-I_-TdOi5zZ1pHOqbUGwxtx4cMYBEDDcZWMRj8v1B93oaYMxbGIZkOqc1SPGRNalbEoRykmTbl3oLLDEPBnTlTCOtN2u52LvLCotYxHUF2Mu0sJEmHjgWwIW7eS4mochhXsOK321NgdiJyf-NmlixzNVbdB746ZPCDUJl1VKzSE7uCWtutNpjYWk1HG2vVBFxwK3JV9-CaBWzN32Gmkkl43-jdhSZParCrqrn3zXUzfkUFqCzMJ6N2AwpZIZbGgM81ixwQqCbgW0f0LxGyD8CFJ6hpHZvXErXSQ',
                ]);
                dd($response);


            } else {
                // Handle case where user does not belong to any account
                return response()->json(['error' => 'User does not belong to any account'], 400);
            }
        } else {
            // Handle case where user is not authenticated
            return response()->json(['error' => 'User not authenticated'], 401);
        }
    }
}
