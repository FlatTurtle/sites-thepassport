@extends('sitecore::template')

@section('navigation')

    <nav>
        <div class="container">
            @if (Config::get('sitecore::logo'))
            <a href="{{ URL::to('/') }}"><img id="logo" src="{{ Config::get('sitecore::logo') }}"></a>
            @else
            <a id="brand" href="{{ URL::to('/') }}">{{ $flatturtle->title }}</a>
            @endif
            <ul>
            @foreach ($blocks as $block)
                @if ($block->title)
                <li>
                    <a href="#{{ $block->id }}">{{ $block->title }}</a>
                </li>
                @endif
            @endforeach
            @if (Config::get('sitecore::mailchimp'))
                <li>
                    <a href="#newsletter">{{ Lang::get('sitecore::newsletter.title') }}</a>
                </li>
            @endif
                <li>
                    <a href="http://google.be" class="btn colorful">Reserve</a>
                </li>
            </ul>
        </div>
    </nav>

@show
