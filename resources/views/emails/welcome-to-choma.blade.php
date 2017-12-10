@component('mail::message')

Hello {{ $user->name }},

#Welcome & Thank you for registering with Choma!

Whether you're a veteran or you just unpacked the moving truck, by joining Choma you've just started a journey towards doing more, seeing more and experiencing more of the world around you.

So, cheers to that and cheers to life - we challenge you to live it more memorably

If tomorrow is Monday or Thursday you're in for a treat. We send you the low down on what's happening in twice a week so you'll never be out of the loop. If it's not, no worries - we've included plenty of gems in this email.


@component('mail::button', ['url' => 'www.choma.dev'])
Visit Choma
@endcomponent


@component('mail::panel', ['url' => ''])
    Choma is your Friend. :)
@endcomponent




Peace, Love and Happy Days!<br>
Ervin at {{ config('app.name') }}
@endcomponent
