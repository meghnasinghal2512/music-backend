<?php
namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Log;

trait MailsendTrait
{
  public function sendMailToSeller($usr,$token){
    $email = $usr->email;
    Mail::send('emails.seller-register',['usr'=> $usr,'token'=>$token,'pathToImage'=>public_path()."/images/futurelogo.png"],function($message) use ($email){
          $message->from("custserv@futurestarr.com");
          $message->to("$email");
           //$message->to("$alert->email");
          $message->subject("Please confirm your email address for your FutureStarr account");
        });

         // check for failures
         if (Mail::failures()) {
             return false;
         }
         return true;

  }

  public function sendConfirmMailBySocial($usr,$token){
    $email = $usr->email;
    Mail::send('emails.register-email',['usr'=> $usr,'token'=>$token,'pathToImage'=>public_path()."/images/futurelogo.png"],function($message) use ($email){
          $message->from("custserv@futurestarr.com");
          $message->to("$email");
           //$message->to("$alert->email");
          $message->subject("Please confirm your email address for your FutureStarr account");
        });

         // check for failures
         if (Mail::failures()) {
             return false;
         }
         return true;
  }

  public function sendMailToBuyer($usr,$token){
    $email = $usr->email;
    Mail::send('emails.buyer-register',['usr'=> $usr,'token'=>$token,'pathToImage'=>public_path()."/images/futurelogo.png"],function($message) use ($email){
          $message->from("custserv@futurestarr.com");
          $message->to("$email");
           //$message->to("$alert->email");
          $message->subject("Please confirm your email address for your FutureStarr account");
        });

         // check for failures
         if (Mail::failures()) {
             return false;
         }
         return true;

  }

  public function sendForgotPasswordMail($usr,$token){
    $email = $usr->email;
    Mail::send('emails.forgot-password',['usr'=>$usr,'token'=>$token,'pathToImage'=>public_path()."/images/futurelogo.png"],function($message) use($email){
      $message->from("custserv@futurestarr.com");
      $message->to("$email");
      $message->subject("Reset your FutureStarr password");
    });

    // check for failures
    if (Mail::failures()) {
        return false;
    }
    return true;
  }

  public function sendThankYouMail($email){
    Log::info($email);
    Mail::send('emails.thankyou-mail',['user_email'=>$email,'pathToImage'=>public_path()."/images/futurelogo.png"],function($message) use($email){
      $message->from("custserv@futurestarr.com");
      $message->to("$email");
      $message->subject("Welcome to FutureStarr");
    });

    // check for failures
    if (Mail::failures()) {
        return false;
    }
    return true;
  }

  public function sendConfirmationMail($email,  $name){

    Log::info("method called");
    Log::info($email);
    Mail::send('emails.reply-to-contact-us',['user_email'=>$email,'user_name' => $name,'pathToImage'=>public_path()."/images/futurelogo.png"],function($message) use($email){
      $message->from("custserv@futurestarr.com");
      $message->to("$email");
      $message->subject("Welcome to FutureStarr");
    });

    // check for failures
    if (Mail::failures()) {
        return false;
    }
    Log::info("success");
  }

  public function sendContactRequestMailToAdmin($email, $name, $visitorUser){

    Log::info("method called");
    Log::info($email);
    Mail::send('emails.contact-request-to-admin',['user_email'=>$email,'user_name' => $name,'visitorUser' => $visitorUser, 'pathToImage'=>public_path()."/images/futurelogo.png"],function($message) use($email){
      $message->from("custserv@futurestarr.com");
      $message->to("$email");
      $message->subject("Welcome to FutureStarr");
    });

    // check for failures
    if (Mail::failures()) {
        return false;
    }
    Log::info("success");
  }

  public function sendContactRequestMailToSeller($email, $name, $visitorUser){

    Log::info("method called");
    Log::info($email);
    Mail::send('emails.seller-contact-message',['user_email'=>$email,'user_name' => $name,'visitorUser' => $visitorUser, 'pathToImage'=>public_path()."/images/futurelogo.png"],function($message) use($email){
      $message->from("custserv@futurestarr.com");
      $message->to("$email");
      $message->subject("Welcome to FutureStarr");
    });

    // check for failures
    if (Mail::failures()) {
        return false;
    }
    Log::info("success");
  }

  public function sendReportRequestMailToAdmin($email, $name, $comment, $report_name, $report_email){

    Log::info("method called");
    Log::info($email .' '. $name. ' '.$comment.' '.$report_email.' '.$report_name);
    Mail::send('emails.social-buzz-report-to-admin',['user_email'=>$email,'user_name'=>$name,'comment'=>$comment,'report_by'=>$report_name, 'report_email'=>$report_email,'pathToImage'=>public_path()."/images/futurelogo.png"],function($message) use($email){
      $message->from("$email");
      $message->to("custserv@futurestarr.com");
      $message->subject("Report to FutureStarr");
    });

    // check for failures
    if (Mail::failures()) {
        return false;
    }
    Log::info("success");
  }


// ************* promote product *************

  public function sendCustomPlanEmailtoSeller($email, $name){

    Log::info("method called");
    Log::info($email .' '. $name);
    Mail::send('emails.seller-custom-plan',['user_email'=>$email,'user_name'=>$name,'pathToImage'=>public_path()."/images/futurelogo.png"],function($message) use($email){
      $message->from("custserv@futurestarr.com");
      $message->to("$email");
      $message->subject("Fusture Starr plan request deatil");
    });

    // check for failures
    if (Mail::failures()) {
        return false;
    }
    Log::info("success");
  }

  public function sendCustomPlanEmailtoAdmin($email, $name, $plan){

    Log::info("method called");
    Log::info($email .' '. $name. ' '.$plan);
    Mail::send('emails.seller-custom-plan-to-admin',['user_email'=>$email,'user_name'=>$name,'plan'=>$plan,'pathToImage'=>public_path()."/images/futurelogo.png"],function($message) use($email){
      $message->from("$email");
      $message->to("custserv@futurestarr.com");
      $message->subject("Fusture Starr plan request deatil");
    });

    // check for failures
    if (Mail::failures()) {
        return false;
    }
    Log::info("success");
  }

}

?>
