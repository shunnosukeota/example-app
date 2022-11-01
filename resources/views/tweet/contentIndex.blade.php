<x-layout title="詳細 | プレツイ">
    <x-layout.single>
        <div class="px-2">
            <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
                プレツイ
            </h2>
            @php
                $breadcrumbs = [
                    ['href' => route('tweet.index'), 'label' => 'TOP'],
                    ['href' => '#', 'label' => '詳細']
                ];
            @endphp
            <x-element.breadcrumbs :breadcrumbs="$breadcrumbs"></x-element.breadcrumbs>
            <x-tweet.content :tweet="$tweet"></x-tweet.content>
            <x-tweet.rate :userId="$tweet->user_id" :rate="$tweet->rate" :tweetId="$tweet->id"></x-tweet.rate>
            <x-tweet.rateList :ratings="$ratings" :userId="$tweet->user_id" :tweetId="$tweet->id"></x-tweet.rateList>
        </div>
    </x-layout.single>
</x-layout>