
<ul {{ $attributes->merge(['class' => ''])}}>
 <x-nav-link href="/" :active="request()->is('/') ? true : false"> Home </x-nav-link>
 <x-nav-link href="/books" :active="request()->is('books') ? true : false"> Books </x-nav-link>
 <x-nav-link href="/about" :active="request()->is('about') ? true : false"> About </x-nav-link>
 <x-nav-link href="/contact" :active="request()->is('contact') ? true : false"> Contact </x-nav-link>
</ul>
