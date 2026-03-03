<?php
/**
 * Null safe operator ( ?-> )
 * check object any property or method is null than avoid error and return null
 * $result = $object?->property;
 * OR,
 * $result = $object?->method();
 */
function getUser() {
    return;
}

$user = getUser();

$city = $user?->address?->city;
echo $city;
$first_post_title = $user?->posts[0]?->title;
echo $first_post_title;

//? before PHP 8.0 than check null manually
if ( $user !== null && $user->posts[0] !== null ) {
    $first_post_title = $user?->posts[0]?->title;
}

class User{
    public ?Account $account;

    public function __construct( ?Account $account )
    {
        $this->account = $account;
    }
}

class Account {
    public ?string $email;

    public function __construct( ?string $email )
    {
        $this->email = $email;
    }
}

$accountWithEmail = new Account(("info@gmail.com") );
$accountWithoutEmail = new Account(null);
$userWithAcount = new User( $accountWithEmail );
$userWithoutAcount = new User( $accountWithoutEmail );
$userWithoutNoAccount = new User( null );

$email1 = $userWithAcount?->account?->email ?? 'No email available';
$email2 = $userWithoutAcount?->account?->email ?? 'No email available';
$email3 = $userWithoutNoAccount?->account?->email ?? 'No email';
echo $email1 . PHP_EOL;
echo $email2 . PHP_EOL;
echo $email3 . PHP_EOL;

?>