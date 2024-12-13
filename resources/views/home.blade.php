@use('Illuminate\Support\Facades\Vite')

<x-layout>
    <nimbus-team>
        <template shadowrootmode="open">
            <style>
                {!! file_get_contents(Vite::asset('resources/css/user-card.css')) !!}
            </style>
            <ul class="card-list">
                @foreach ($team as $member)
                <li>
                    <article class="user-card">
                        <h2 class="user-card-title">
                            {{ $member['firstName'] }} {{ $member['lastName'] }}
                        </h2>

                        <img
                            class="user-card-avatar"
                            src="{{ $member['avatarURL'] }}"
                            height="150"
                            width="150"
                            alt="" />

                        <span class="user-card-role">{{ $member['role'] }}</span>
                        <span class="user-card-email">
                            <span class="visually-hidden">Email:</span>
                            <a href="mailto:{{$member['email']}}">{{ $member['email'] }}</a>
                        </span>

                        <span class="user-card-phone">
                            <span class="visually-hidden">Phone:</span>
                            <a href="tel:{{ $member['telephone'] }}">
                                {{ $member['telephone'] }}
                            </a>
                        </span>

                        <ul class="user-card-social">
                        @foreach($member['social'] as $key => $value)
                            <li>
                                <a
                                    class="icon icon-social-{{ $key }}"
                                    href="{{ $value['url'] }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    <span class="visually-hidden">
                                        Follow {{ $member['firstName'] }} on {{ $value['name'] }}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                        </ul>

                    </article>
                </li>
                @endforeach
            </ul>
        </template>
    </nimbus-team>
</x-layout>
