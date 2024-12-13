<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'team' => [
            [
                "firstName" => "Selene",
                "lastName" => "Farrow",
                "avatarURL" => "https://fictionalfolks.netlify.app/avatars/selene.svg",
                "role" => "Flow Architect",
                "email" => "selene@nimbus.tech",
                "telephone" => "+1 (555) 123-4567",
                "social" => [
                    "bluesky" => [
                        "name" => "Bluesky",
                        "url" => "https://bsky.app/profile/selene.farrow"
                    ],
                    "mastodon" => [
                        "name" => "Mastodon",
                        "url" => "https://mastodon.social/@selene"
                    ],
                    "linkedin" => [
                        "name" => "LinkedIn",
                        "url" => "https://www.linkedin.com/in/selenefarrow"
                    ]
                ]
            ],
            [
                "firstName" => "Marlowe",
                "lastName" => "Solace",
                "avatarURL" => "https://fictionalfolks.netlify.app/avatars/marlowe.svg",
                "role" => "Pixel Whisperer",
                "email" => "marlowe@nimbus.tech",
                "telephone" => "+1 (555) 987-6543",
                "social" => [
                    "bluesky" => [
                        "name" => "Bluesky",
                        "url" => "https://bsky.app/profile/marlowe.solace"
                    ],
                    "mastodon" => [
                        "name" => "Mastodon",
                        "url" => "https://mastodon.social/@marlowe"
                    ],
                    "linkedin" => [
                        "name" => "LinkedIn",
                        "url" => "https://www.linkedin.com/in/marlowesolace"
                    ]
                ]
            ],
            [
                "firstName" => "Dorian",
                "lastName" => "Vexford",
                "avatarURL" => "https://fictionalfolks.netlify.app/avatars/dorian.svg",
                "role" => "Data Alchemist",
                "email" => "dorian@nimbus.tech",
                "telephone" => "+1 (555) 246-8135",
                "social" => [
                    "bluesky" => [
                        "name" => "Bluesky",
                        "url" => "https://bsky.app/profile/dorian.vexford"
                    ],
                    "mastodon" => [
                        "name" => "Mastodon",
                        "url" => "https://mastodon.social/@dorian"
                    ],
                    "linkedin" => [
                        "name" => "LinkedIn",
                        "url" => "https://www.linkedin.com/in/dorianvexford"
                    ]
                ]
            ]
        ]
    ]);
});
