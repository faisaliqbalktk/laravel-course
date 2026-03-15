<div>
    <h1>Send Email in Laravel</h1>

    <ul>
        <li><strong>Make Changes in .env file for mail config</strong></li>
        <ul>
            <li>Set up your mail driver and credentials in `.env`:</li>
            <pre>
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
            </pre>
            <li>Use `MAIL_PASSWORD` as the <strong>App Password</strong> generated in Gmail (not your normal password).</li>
        </ul>

        <li><strong>Generate App Password in Gmail</strong></li>
        <ul>
            <li>Go to your Google Account → Security → App passwords.</li>
            <li>Choose Mail and the device (e.g., Other → Laravel) and generate a 16-character password.</li>
            <li>Use this password in `.env` under `MAIL_PASSWORD`.</li>
        </ul>

        <li><strong>Make Mail File</strong></li>
        <ul>
            <li>Create a Mailable class using artisan:</li>
            <pre>php artisan make:mail TestMail</pre>
            <li>This class will handle the email content and view.</li>
        </ul>

        <li><strong>Make Controller and Route</strong></li>
        <ul>
            <li>Create a controller method to send mail:</li>
            <pre>
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

public function sendMail() {
    Mail::to('receiver@example.com')->send(new TestMail());
    return 'Email sent successfully';
}
            </pre>
            <li>Define a route in `web.php`:</li>
            <pre>Route::get('/send-mail', [MailController::class, 'sendMail']);</pre>
        </ul>

        <li><strong>Make Email Template</strong></li>
        <ul>
            <li>Create a Blade view for your email, e.g., `resources/views/emails/test.blade.php`:</li>
            <pre>
<h1>Hello,</h1>
<p>This is a test email from Laravel!</p>
            </pre>
            <li>Use this view in your Mailable class with `$this->view('emails.test');`</li>
        </ul>

        <li><strong>Send and Test Mail</strong></li>
        <ul>
            <li>Visit `/send-mail` in your browser.</li>
            <li>Check the receiver inbox to confirm delivery.</li>
            <li>Make sure `.env` caching is cleared if you change credentials:</li>
            <pre>php artisan config:clear</pre>
        </ul>

        <li><strong>Interview Questions</strong></li>
        <ul>
            <li>What are different ways to send emails in Laravel?</li>
            <li>What is a Mailable class?</li>
            <li>How do you queue emails in Laravel?</li>
            <li>What is the difference between `Mail::send()` and `Mail::to()->send()`?</li>
            <li>How do you test emails locally without sending real emails?</li>
        </ul>
    </ul>
</div>